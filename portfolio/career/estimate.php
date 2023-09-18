<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<style>
.career_img img { width:80%; }
</style>


<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="<?=_web_url_?>/info/career.php">경력기술서</a> <i class="material-icons m-r-0">chevron_right</i>통합견적서 툴 개발</h3>
			<div class="clear"></div>

			<div class="careerDetail">
				<div class="detail_top">
					<span class="d_tit m-r-5">기여도 90%</span>
					<span class="d_tit">유지보수 100%</span>

					<h4>통합견적서 툴 개발 <span class="d_date">2020.01</span></h4>
					<div class="d_box">
						<p>매체별 광고 예상 견적에 대해 사용자가 원하는 매체 선택,추가하여 견적서를 작성히면 자사 견적서 틀에 맞춰 이메일 발송이 가능하도록 기능 구현</p>
						
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
							<a href="javascript:;" onclick="moveScroll('list')"><span class="d_txt">리스트</span></a>
							<a href="javascript:;" onclick="moveScroll('add')"><span class="d_txt">견적서 작성/수정</span></a>
							<a href="javascript:;" onclick="moveScroll('detail')"><span class="d_txt">상세키워드 견적 조회/업로드</span></a>
							<a href="javascript:;" onclick="moveScroll('preview')"><span class="d_txt">견적서 미리보기</span></a>
							<!-- <span class="nb01"></span> -->
							<!-- <div contenteditable="false" spellcheck="true" placeholder="비어 있는 인용" data-root="true" class="d_txtbox"><span class="d_txt">쇼핑검색</span><br><br><span class="d_txt">키워드분석</span><br></div> -->
							<div class="img_area">
								<div id="list" class="career_img">
									<span class="nb01"></span><span class="img_tit">리스트</span><br>
									<span class="img_txt">담당자별 견적서 발송 리스트 (수신확인시간 조회가능), 발송했던 내용 그대로 다른 수신 계정으로 재발송 가능</span>
									<img src="<?=_web_url_?>/img/career/estimate_list.png" style="width:100%;">
								</div>
								<div id="add" class="career_img">
									<span class="nb01"></span><span class="img_tit">견적서 작성/수정</span><br>
									<span class="img_txt">매체별 입력 방식으로 견적서 작성, 추가사항 입력 부분 구현</span>
									<img src="<?=_web_url_?>/img/career/estimate_write2.png">
								</div>
								<div id="detail" class="career_img">
									<span class="nb01"></span><span class="img_tit">상세키워드 견적 조회/업로드</span><br>
									<span class="img_txt">네이버 - 네이버 Search Ad API를 이용해 키워드 입력만으로 견적 리스트 조회 및 선택추가, 카카오/구글 - 엑셀 업로드 시 견적서 자동 추가, 이 외 매체 - 직접입력</span>
									<img src="<?=_web_url_?>/img/career/estimate_detail.png">
									<img src="<?=_web_url_?>/img/career/estimate_detail2.png">
								</div>
								<div id="preview" class="career_img">
									<span class="nb01"></span><span class="img_tit">견적서 최종 미리보기</span><br>
									<span class="img_txt">실제 메일 발송 전 작성한 내용 그대로 발송되는 화면단 미리보기 기능</span>
									<img src="<?=_web_url_?>/img/career/estimate_preview.png">
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