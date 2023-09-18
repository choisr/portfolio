<?
/**/
	$ROOT = $_SERVER['DOCUMENT_ROOT'];
	
	define("SAVE_DIR", $_SERVER['DOCUMENT_ROOT']."/data/total_banner");
	define("SAVE_URL", $_SERVER['DOCUMENT_ROOT']."/data/total_banner");

	$tempfile = $_FILES['bannerImg']['tmp_name']; ;  // 파일 위치
	$filename =$_FILES['bannerImg']['name'];  // 파일명

	$savefile =SAVE_DIR . '/' . $filename;

	/***파일 확장자 제한*******************************
	  
	if (!preg_match("/.(pdf|zip)$/i", $savefile))
		die("$tempfile==> $savefile -ERR: File Format!");
	**************************************************/


	move_uploaded_file($tempfile, $savefile);

	$filesize = filesize($savefile);

	if (!$filesize) {
		$filesize = 0;
		$random_name = '-ERR';
//		unlink($savefile);
	};

	$rdata = sprintf('{"fileUrl": "%s/%s", "filePath": "%s", "fileName": "%s", "fileSize": "%d" }',
		SAVE_URL,
		$filename,
		$savefile,
		$filename,
		$filesize );

	//echo $rdata;
//	list($width, $height, $type, $attr) = getImagesize($savefile);
/**/


		$nalja_kr = mktime (date("H"),date("i"),0,date("m"),date("d"),  date("Y"));

		$kr_y = date("Y",$nalja_kr);
		$kr_m = date("m",$nalja_kr);
		$kr_d = date("d",$nalja_kr);
		$kr_s = date("H",$nalja_kr);
		$kr_b = date("i",$nalja_kr);
		$todaytime =$kr_y.$kr_m.$kr_d.$kr_s.$kr_b;

		include $ROOT."/include/connect.inc";

		$filename_tmp = explode(".",$filename);
			$SAFile_update = "insert into nectv.netv_total_banner ( 
												seq,
												subject,
												comment,
												service,
												banner_img,
												widthSize,
												heightSize,
												thumbnail,
												update_day,
												cl_cd,
												cd_id
											)values(
												'".$_POST['inputDataA']."',
												'".iconv("utf-8","euckr",$_POST['inputDataB'])."',
												'".iconv("utf-8","euckr",trim($_POST['inputDataC']))."',
												'Y',
												'$filename',
												'".$_POST['wSize']."',
												'".$_POST['hSize']."',
												'".$_POST['linkURL']."',
												'".$_POST['todaytime']."',
												'".$_POST['inputDataE']."',
												'".$_POST['inputDataF']."'
											)";
			$SAFile_Dresult = mysql_query($SAFile_update);

?>
<script>
	top.div_img_preview_setup1('<?=$savefile?>','<?=$filename?>','<?=$gubun?>');
</script>