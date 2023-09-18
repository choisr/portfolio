<?
	require_once $_SERVER['DOCUMENT_ROOT'] . "/board/include/dbconnect.php";

	// GET PAGEMODE
	$refer = $_SERVER['HTTP_REFERER'];
	$callbasename=basename($refer);
	$pageMode = strtolower(substr($callbasename, 0, strpos($callbasename,".php")));

	// 사용자 Parameter
	$pMode = isset($_REQUEST['pMode']) ? $_REQUEST['pMode'] : "" ;

	// OUTPUT
	$msg = "";
	$flag = false;
	$output = array(
		  "data"		=> array()
		, "rtnValue"	=> $flag
		, "msg"		=> $msg
	);

	// === [ 게시판 ] - 작성 페이지 ===
	if( $pageMode == "write" ){
		$requestSuid	= isset($_REQUEST['requestSuid'])	? $_REQUEST['requestSuid']							: "" ;		
		$w_title			= isset($_REQUEST['w_title'])			? addslashes(trim($_REQUEST['w_title']))			: "" ;		// 제목
		$w_name		= isset($_REQUEST['w_name'])		? addslashes(trim($_REQUEST['w_name']))		: "" ;		// 작성자
		$w_content		= isset($_REQUEST['w_content'])	? addslashes(trim($_REQUEST['w_content']))		: "" ;		// 내용

		// 신규작성
		if( $pMode == "NEW" ){
			$insSql = "
				INSERT INTO zxchsr.board ( w_name, w_title, w_content, regdate )
				VALUES ( '".$w_name."', '".$w_title."', '".$w_content."', NOW() )
			";

			$maxSuid = "";
			if( mysqli_query($db, $insSql) ){
				$flag = true;
				$maxSuid = mysqli_insert_id($db);
			}

		// 수정
		}else if( $pMode == "EDIT" ){
			$updSql = "
				UPDATE zxchsr.board
				SET w_name = '".$w_name."'
					, w_title = '".$w_title."'
					, w_content = '".$w_content."'
					, regdate = NOW()
				WHERE suid = ".$requestSuid."
			";
			if( mysqli_query($db, $updSql) ){
				$flag = true;
				$maxSuid = $requestSuid;
			}
		}

		$output['msg']			= $maxSuid;
		$output['rtnValue']	= $flag;
	
	// === [ 게시판 ] - 뷰, 리스트 페이지 ===
	}else if( $pageMode == "view" || $pageMode == "list" ){
		// 삭제(단일삭제)
		if( $pMode == "DEL_TARGET"){
			$suid = isset($_REQUEST['suid']) ? $_REQUEST['suid'] : "" ;

			$updSql = "
				UPDATE zxchsr.board
				SET del_yn = 'Y'
				WHERE suid = ".$suid."
			";
			if( mysqli_query($db, $updSql) ){
				$flag = true;
			}
		
		// 선택삭제
		}else if( $pMode == "DEL_SELECT" ){
			$suidArr = isset($_REQUEST['suidArr']) ? $_REQUEST['suidArr'] : array() ;
			$selList = implode(",", $suidArr);
			
			$updSql = "
				UPDATE zxchsr.board
				SET del_yn = 'Y'
				WHERE suid IN ( ".$selList." )
			";
			if( mysqli_query($db, $updSql) ){
				$flag = true;
			}
		}

		$output['rtnValue']	= $flag;
	
	}else{
		$output["data"] = [];
	}

	print json_encode($output);
	exit;	
?>