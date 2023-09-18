<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<style>
</style>

<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="<?=_web_url_?>/info/career.php">경력기술서</a> <i class="material-icons m-r-0">chevron_right</i>네이버 데이터랩</h3>
			<div class="clear"></div>

			<div class="careerDetail">
				<div class="detail_top">
					<span class="d_tit m-r-5">기여도 90%</span>
					<span class="d_tit">유지보수 100%</span>

					<h4>네이버 데이터랩 <span class="d_date">2019.10</span></h4>
					<div class="d_box">
						<p>자사 사이트 내 네이버 데이터랩과 동일한 기능 구현 목적으로 네이버 데이터랩 API를 이용해 통합 검색 트렌드 및 쇼핑 카테고리별 검색 트렌드 데이터 그래프화 작업<br>데이터값 의미: 구간별 클릭량의 상대적 비율. 구간별 결과에서 가장 큰 값을 100으로 설정한 상댓값</p>
						
						<div style="margin-top:10px;">
							<span class="d_txt_tit">사용기술</span>
							<div>
								<span class="categ restapi">Rest API</span>
								<span class="categ php">PHP</span>
								<span class="categ mysql">MySQL</span>
								<span class="categ javascript">Javascript</span>
								<span class="categ jquery">JQuery</span>
							</div>
						</div>

						<div style="margin-top:10px;">
							<span class="d_txt_tit">작업 페이지</span><span style="color:#949494; font-size:11px; font-weight:bold; margin-left:5px;">클릭 시 해당 영역으로 스크롤 이동</span><br>
							<a href="javascript:;" onclick="moveScroll('trend')"><span class="d_txt">검색어트렌드</span></a>
							<a href="javascript:;" onclick="moveScroll('field')"><span class="d_txt">쇼핑인사이트(분야통계)</span></a>
							<a href="javascript:;" onclick="moveScroll('s_trend')"><span class="d_txt">쇼핑인사이트(쇼핑분야 트렌드 비교)</span></a>
							<a href="javascript:;" onclick="moveScroll('search')"><span class="d_txt">쇼핑인사이트(검색어통계)</span></a>
							<!-- <span class="nb01"></span> -->
							<!-- <div contenteditable="false" spellcheck="true" placeholder="비어 있는 인용" data-root="true" class="d_txtbox"><span class="d_txt">쇼핑검색</span><br><br><span class="d_txt">키워드분석</span><br></div> -->
							<div class="img_area">
								<div id="trend" class="career_img">
									<span class="nb01"></span><span class="img_tit">검색어트렌드</span><br>
									<span class="img_txt">네이버 통합검색 내 특정 검색어의 검색량 조회 (최대 주제어5개 입력 가능)</span>
									<img src="<?=_web_url_?>/img/career/datalab_trend.png">
									<img src="<?=_web_url_?>/img/career/datalab_trend2.png">
								</div>
								<div id="field" class="career_img">
									<span class="nb01"></span><span class="img_tit">쇼핑인사이트(분야통계)</span><br>
									<span class="img_txt">다양한 분야에서 클릭이 발생한 검색어의 클릭량 추이 및 연령별/성별 상세 정보 조회</span>
									<img src="<?=_web_url_?>/img/career/datalab_field.png">
								</div>
								<div id="s_trend" class="career_img">
									<span class="nb01"></span><span class="img_tit">쇼핑인사이트(쇼핑분야 트렌드 비교)</span><br>
									<span class="img_txt">원하는 특정 분야별 클릭 횟수 트렌드 비교</span>
									<img src="<?=_web_url_?>/img/career/datalab_s_trend.png">
								</div>
								<div id="search" class="career_img">
									<span class="nb01"></span><span class="img_tit">쇼핑인사이트(검색어통계)</span><br>
									<span class="img_txt">검색어의 클릭이 발생한 연령별/성별 정보를 확인</span>
									<img src="<?=_web_url_?>/img/career/datalab_search.png">
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