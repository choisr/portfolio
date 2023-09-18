<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/head.php";

?>

<style>
	body {
	  /*background-color:#f5f5f5;*/
	  /*background: linear-gradient(#3d3b83, #9f46df) no-repeat fixed 100%;*/
	  background: linear-gradient(#fa887e, #ff2753) no-repeat fixed 100%;
	  text-align: center;
	  color:#fff;
	}

	* { color:#fff; text-decoration: none;}
	#warp { margin-top:0; position:absolute; top:30%; }
	.typing_area { width:95%; display:inline-block; }
	.typing_box { width:80%; height:170px; border:5px solid #fff; border-radius:15px; display:inline-block; }
	.typing_box h1 { font-size:80px; caret-color:#fff; line-height:170px; }
	.search_btn { display:inline-block; float:right;/* width:150px; */ }
	.search_btn a { display:inline-block; opacity: 0; transition: all 1s ease 2s; }
	.enter-button { display:inline-block; width:80%; text-align:right; } 
	.enter-button a { display: inline-block; font-size: 2em; text-decoration: none; color: #fff; opacity: 0; transition: all 1s ease 2s; }
	.clkIcon { font-size:28px; vertical-align:-5px; }
	.searchIcon { color:#fff; font-size:150px; vertical-align:-55px; margin-left:25px;  }
	
</style>
<body>
	
	<div id="warp">
		<div class="con_box">
			<div class="typing_area">
				<div class="typing_box">
					<h1 id="gocoder_typing"></h1>
				</div>
				<div class="search_btn">
					<a href="javascript:;" onclick="clkBtn()" ><i class="material-icons searchIcon">ads_click</i><p style="font-size: 24px;">Click</p></a>	
				</div>
			</div>
			
			<!-- <div class="enter-button"> -->
				<!-- <a href="javascript:;" onclick="clkBtn()" >Click <i class="material-icons clkIcon">ads_click</i></a> -->
			<!-- </div> -->
		</div>
	</div>
	 
<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://www.cssscript.com/demo/simple-typewriter-effect-pure-javascript-typewriterjs/typewriter.js"></script>
 
<script type="text/javascript">
	
	$(document).ready(function() {
		showTyping();
	});
	
	function showTyping(){
		var typing = document.getElementById('gocoder_typing');
		var typewriter = new Typewriter(typing, {
			loop: false
		});
		 
		typewriter.typeString("Hi, I'm Sook Ran")
			.pauseFor(3000)
			.deleteAll()
			.typeString('I will introduce myself')
			.pauseFor(3000)
			//.deleteChars(7)
			//.typeString('GoCoder.Net')
			.start();

		$(".search_btn").find("a").animate({
			opacity:1,
			marginLeft : '30px'
		});

		//$(".search_btn").effect("shake");
	} 

	function clkBtn(){
		$("body").fadeOut();
		location.href = "info/info.php";
	}

</script>

</body>
</html>