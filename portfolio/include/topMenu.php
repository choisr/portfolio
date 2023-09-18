<?
	$refer = $_SERVER['REQUEST_URI'];
	$callbasename=basename($refer);
	$pageMode = strtolower(substr($callbasename, 0, strpos($callbasename,".php")));
	if ( $pageMode == '' ){
		$pageMode = 'index';
	}
	
	// 경력기술서 리스트
	if( strpos($refer, "career") !== false ){
		$pageMode = 'career';
	}

	$array_category = [
		"info"		=> [
			"name"	=> "소개",
			"link"		=> _web_url_ . "/info/info.php",
			"class"	=> "account_circle"
		],
		"career"	=> [
			"name"	=> "경력기술서",
			"link"		=> _web_url_ . "/info/career.php",
			"class"	=> "assignment"
		],
		//"site"		=> [
			//"name"	=> "포트폴리오",
			//"link"		=> _web_url_ . "/info/site.php",
			//"class"	=> "public"
		//]		
	];
?>

<style>
	.material-icons { font-size:23px; vertical-align:-7px; margin-right:5px; }
	.b_tit { position:relative;font-size: 20px;font-weight: bold;letter-spacing: 1px; }
	.s_tit { position:absolute;font-size: 14px;color: #c1c1c1;top: 20px;left: 0;padding-top: 2px;letter-spacing: 6.8px; }
	.logoIcon { font-size:50px;vertical-align: -24px;background: -webkit-linear-gradient(#fbbab6, #ff2753); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
</style>

<div class="top_box">
  <div class="top_con">
	<!-- <div class="logo">
		<a href="<?=_web_url_?>/info/info.php">
			<span _ngcontent-wbj-c35="" class="material-icons logoIcon">loyalty</span>
			<span class="b_tit">Sook Ran's<span class="s_tit">Portfolio</span></span>
		</a>
	</div> -->
	<div class="top_menu">
	  <ul>
	  	<? 
			foreach ( $array_category as $dept1=>$dept1_val ) {
				$classON = "";
				if ( $dept1 == $pageMode ) {
					$classON = "on";
				}
		?>
			<li>
				<a href="<?=$dept1_val['link']?>" class="<?=$classON?>">
					<span _ngcontent-wbj-c35="" class="material-icons"><?=$dept1_val['class']?></span> <?=$dept1_val['name']?>
				</a>
			</li>
		<?
			} 
		?>
	  </ul>
	</div>
  </div>
</div>