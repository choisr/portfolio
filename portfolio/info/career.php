<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/info/career_list.php";
?>

<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="javascript:;">경력기술서</a></h3>
			<div style="float:left; margin:4px 10px 0; font-size:12px; color:#949494; font-weight:bold;">우측 상단 아이콘 클릭 시 해당 프로젝트별 상세내용 확인 가능합니다.</div>
			<div class="clear"></div>

			<div class="careerList" style="display:none;">
				<!-- // ========================================================= START IICOMBINED -->
				<!-- 마케팅 (구글, 페이스북, 네이버) 상품 업로드 API -->
				<!-- 현금영수증 발급 API -->
				<!-- PS(Product Service) 접수 API -->
				<!-- EAI -->
				
				<?php foreach( $career_arr as $target_career ){ ?>
					<div class="dcon01">
						<div class="dcon01_01">
							<div class="dcon01_top">
								<span class="d_tit"><?=$target_career['d_tit']?></span>
								<h4><?=$target_career['title']?></h4>
								<span class="d_txt"><?=$target_career['d_txt']?></span>
								<?=$target_career['btn']?>
							</div>
							<div class="dcon01_bottom">
								<div>
									<span class="use_tit">사용기술</span><br>
									<span class="use_tec"><?=$target_career['skill']?></span>
								</div>
								<div class="use_list">
									<?php foreach( $target_career['desc'] as $target_desc ){ ?>
										<div class="list_01">
											<span class="nb01"></span>
											<span><?=$target_desc?></span>
										</div>
									<?php } ?>
								</div>
							</div>	<!-- # END dcon01_bottom -->
						</div>	<!-- # END dcon01_01 -->
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$( '.careerList' ).slideDown("slow");
	});
</script>

<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/footer.php";
?>