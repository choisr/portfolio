<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<style>
</style>

<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="<?=_web_url_?>/info/career.php">경력기술서</a> <i class="material-icons m-r-0">chevron_right</i>네이버 통합관리</h3>
			<div class="clear"></div>

			<div class="careerDetail">
				<div class="detail_top">
					<span class="d_tit m-r-5">기여도 100%</span>
					<span class="d_tit">유지보수 100%</span>

					<h4>네이버 통합관리 <span class="d_date">2020.08 - 2020.09</span></h4>
					<div class="d_box">
						<p>담당자별 검색광고 설정값을 편리하게 관리하기 위해 네이버 Search Ad API를 이용해 자사 그룹웨어 내 네이버 검색광고 시스템과 동일한 기능 구현</p>
						
						<div style="margin-top:10px;">
							<span class="d_txt_tit">사용기술</span>
							<div>
								<span class="categ restapi">Rest API</span>
								<span class="categ php">PHP</span>
								<span class="categ mysql">MySQL</span>
								<span class="categ ajax">Ajax</span>
								<span class="categ javascript">Javascript</span>
								<span class="categ jquery">JQuery</span>
								<span class="categ linux">Linux</span>
							</div>
						</div>

						<div style="margin-top:10px;">
							<span class="d_txt_tit">작업 페이지</span><span style="color:#949494; font-size:11px; font-weight:bold; margin-left:5px;">클릭 시 해당 영역으로 스크롤 이동</span><br>
							<a href="javascript:;" onclick="moveScroll('list')"><span class="d_txt">리스트</span></a>
							<a href="javascript:;" onclick="moveScroll('favor')"><span class="d_txt">키워드 즐겨찾기</span></a>
							<a href="javascript:;" onclick="moveScroll('detail')"><span class="d_txt">키워드 품질지수</span></a>
							<a href="javascript:;" onclick="moveScroll('campaign')"><span class="d_txt">캠페인/광고그룹/키워드</span></a>
							<!-- <span class="nb01"></span> -->
							<!-- <div contenteditable="false" spellcheck="true" placeholder="비어 있는 인용" data-root="true" class="d_txtbox"><span class="d_txt">쇼핑검색</span><br><br><span class="d_txt">키워드분석</span><br></div> -->
							<div class="img_area">
								<div id="list" class="career_img">
									<span class="nb01"></span><span class="img_tit">리스트</span><br>
									<span class="img_txt">담당자별 네이버 검색광고 관리 계정 리스트</span>
									<img src="<?=_web_url_?>/img/career/nv_list.png">
								</div>
								<div id="favor" class="career_img">
									<span class="nb01"></span><span class="img_tit">키워드 즐겨찾기</span><br>
									<span class="img_txt">등록된 키워드를 일괄 관리할 수 있는 리스트</span>
									<img src="<?=_web_url_?>/img/career/nv_favor.png">
								</div>
								<div id="detail" class="career_img">
									<span class="nb01"></span><span class="img_tit">키워드 품질지수</span><br>
									<span class="img_txt">등록된 키워드의 품질지수 및 CTR(클릭률) 일별 데이터 수집하여 누적데이터 조회 가능 (cron 사용 batch 설정)</span>
									<img src="<?=_web_url_?>/img/career/nv_detail.png">
								</div>
								<div id="campaign" class="career_img">
									<span class="nb01"></span><span class="img_tit">캠페인/광고그룹/키워드</span><br>
									<span class="img_txt">캠페인/광고그룹/키워드별 일괄 관리 가능한 리스트</span>
									<img src="<?=_web_url_?>/img/career/nv_campaign.png">
									<img src="<?=_web_url_?>/img/career/nv_group.png">
									<img src="<?=_web_url_?>/img/career/nv_keyword.png">
								</div>
							</div>
						</div>
					</div>
				</div>

				<a href="<?=_web_url_?>/info/career.php" class="back_btn"><i class="material-icons">arrow_back</i> 목록보기</a>
			</div> <!-- # END careerDetail -->
			
		</div>
	</div>
</div>

<script type="text/javascript">
	// 해당 영역 스크롤 이동
	function moveScroll(obj){
		var obj_height = $("#"+obj).offset()
		//console.log(obj_height);
		$('html, body').animate({'scrollTop': obj_height.top - 90},400);
	}
</script>

<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/footer.php";
?>