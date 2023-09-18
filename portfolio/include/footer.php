		<div class="footer_box">
			Copyright ⓒ Sook Ran Choi, All rights reserved.
		</div>

		<div id="top_btn" class="top_btn" style="display:none;"><a href="javascript:top_btn();" ><img src="<?=_web_url_?>/img/top_btn.jpg"/></a></div>
		<!-- <div id="top_btn" class="top_btn" style="display:none;"><a href="javascript:top_btn();" ><img src="<?=_web_url_?>/img/top_btn2.png"/></a></div> -->

<script type="text/javascript">
	function top_btn(){
		//$('html, body').scrollTop(0);  
		$('html, body').animate({'scrollTop': 0},400);
	}

	$(document).ready(function() {
		var h = $(this).scrollTop();
		
		if(h > 200){		
			$("#top_btn").show();
		}else{
        	$("#top_btn").hide();
        }
	});

	$(window).scroll(function(){
		var h = $(this).scrollTop();
		
		if(h > 200){		
			$("#top_btn").show();
		}else{
        	$("#top_btn").hide();
        }
	})
</script>

	</body>
</html>