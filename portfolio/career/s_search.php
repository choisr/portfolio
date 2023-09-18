<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<style>
</style>

<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="<?=_web_url_?>/info/career.php">경력기술서</a> <i class="material-icons m-r-0">chevron_right</i>S SEARCH (쇼핑검색)</h3>
			<div class="clear"></div>

			<div class="careerDetail">
				<div class="detail_top">
					<span class="d_tit m-r-5">기여도 100%</span>
					<span class="d_tit">유지보수 100%</span>

					<h4>S SEARCH (쇼핑검색) <span class="d_date">2021.03 - 2021.04</span></h4>
					<div class="d_box">
						<p>네이버 Open API, Search Ad API를 이용하여 특정 업체와 키워드에 대한 네이버 쇼핑검색 관련 데이터 확인 목적으로 개발</p>
						
						<div style="margin-top:10px;">
							<span class="d_txt_tit">사용기술</span>
							<div>
								<span class="categ restapi">Rest API</span>
								<span class="categ php">PHP</span>
								<span class="categ mysql">MySQL</span>
								<span class="categ ajax">Ajax</span>
								<span class="categ javascript">Javascript</span>
								<span class="categ jquery">JQuery</span>
								<span class="categ html">HTML</span>
								<span class="categ css">CSS</span>
								<span class="categ linux">Linux</span>
							</div>
						</div>

						<div style="margin-top:10px;">
							<span class="d_txt_tit">작업 페이지</span><span style="color:#949494; font-size:11px; font-weight:bold; margin-left:5px;">클릭 시 해당 영역으로 스크롤 이동</span><br>
							<a href="javascript:;" onclick="moveScroll('shopping')"><span class="d_txt">쇼핑검색</span></a>
							<a href="javascript:;" onclick="moveScroll('keyword')"><span class="d_txt">키워드분석</span></a>
							<a href="javascript:;" onclick="moveScroll('relkwd')"><span class="d_txt">연관키워드</span></a>
							<a href="javascript:;" onclick="moveScroll('favorkwd')"><span class="d_txt">관심상품</span></a>
							<!-- <span class="nb01"></span> -->
							<!-- <div contenteditable="false" spellcheck="true" placeholder="비어 있는 인용" data-root="true" class="d_txtbox"><span class="d_txt">쇼핑검색</span><br><br><span class="d_txt">키워드분석</span><br></div> -->
							<div class="img_area">
								<div id="shopping" class="career_img">
									<span class="nb01"></span><span class="img_tit">쇼핑검색</span><br>
									<span class="img_txt">검색하고자 하는 업체 및 키워드 입력 시 네이버 Open API, Search Ad API 호출을 통해 해당 키워드에 대한 네이버 쇼핑검색 상품리스트를 토대로 필요한 데이터 가공, 업체 및 키워드 분석에 대한 내용 조회 가능</span>
									<img src="<?=_web_url_?>/img/career/s_search_result.png">
								</div>
								<div id="keyword" class="career_img">
									<span class="nb01"></span><span class="img_tit">키워드분석</span><br>
									<span class="img_txt">검색하고자 하는 키워드 입력 시 네이버 Open API(쇼핑) 호출을 통해 해당 키워드에 대한 네이버 쇼핑검색 상품리스트 조회</span>
									<img src="<?=_web_url_?>/img/career/s_keywd_result.png">
								</div>
								<div id="relkwd" class="career_img">
									<span class="nb01"></span><span class="img_tit">연관키워드</span><br>
									<span class="img_txt">검색하고자 하는 키워드 입력 시 네이버 Search Ad API 호출을 통해 해당 키워드의 파워컨텐츠 키워드 여부 및 디바이스별 견적 데이터(상품수,노출수,클릭수,CPC,클릭률,광고비) 조회</span>
									<img src="<?=_web_url_?>/img/career/s_relkwd_result.png">
								</div>
								<div id="favorkwd" class="career_img">
									<span class="nb01"></span><span class="img_tit">관심상품</span><br>
									<span class="img_txt">키워드(상품) 등록/삭제 기능을 구현하여 등록 이후 상품에 대한 데이터를 매일 수집 및 업데이트하여 최근 데이터 조회 가능(cron 사용 batch 설정, 일별 순위/가격 변동 데이터 그래프 구현)</span>
									<img src="<?=_web_url_?>/img/career/s_favorkwd_list.png">
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