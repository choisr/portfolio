<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<div id="warp">
	<div class="con_box">
		<div class="site">
			<h3><a href="javascript:;">포트폴리오</a></h3>
			<div class="clear"></div>

			<div class="siteList" style="display:none;">
				<!-- DIOR 디올 사이트 -->
				<div class="dcon01">
					<div class="dcon01_01">
						<div class="dcon01_top">
							<span class="d_tit">2018.03</span>
							<h4>DIOR 디올 사이트 리뉴얼</h4>
						</div>
						<div class="dcon01_bottom">
							<div>
								<span class="use_tit" style="margin-top:5px;">사용기술</span><br>
								<span class="use_tec">PHP, HTML, CSS, Javascript, JQuery</span>
							</div>
							<div class="d_img">
								<a href="http://chsr.dothome.co.kr/new/index.php" target="_blank"><img src="<?=_web_image_path_?>/portfolio/chsr_dior.png"></a>
							</div>
						</div>	<!-- # END dcon01_bottom -->
					</div>	<!-- # END dcon01_01 -->
				</div>

				<!-- SUBWAY 써브웨이 사이트 -->
				<div class="dcon01">
					<div class="dcon01_01">
						<div class="dcon01_top">
							<span class="d_tit">2017.05</span>
							<h4>SUBWAY 써브웨이 사이트 리뉴얼</h4>
						</div>
						<div class="dcon01_bottom">
							<div>
								<span class="use_tit" style="margin-top:5px;">사용기술</span><br>
								<span class="use_tec">HTML, CSS, Javascript, JQuery</span>
							</div>
							<div class="d_img">
								<a href="http://chsr.dothome.co.kr/subway/" target="_blank"><img src="<?=_web_image_path_?>/portfolio/chsr_subway.png"></a>
							</div>
						</div>	<!-- # END dcon01_bottom -->
					</div>	<!-- # END dcon01_01 -->
				</div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$( '.siteList' ).slideDown("slow");
	});
</script>

<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/footer.php";
?>