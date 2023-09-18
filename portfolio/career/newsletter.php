<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<style>
</style>

<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="<?=_web_url_?>/info/career.php">경력기술서</a> <i class="material-icons m-r-0">chevron_right</i>뉴스레터</h3>
			<div class="clear"></div>

			<div class="careerDetail">
				<div class="detail_top">
					<span class="d_tit m-r-5">기여도 90%</span>
					<span class="d_tit">유지보수 100%</span>

					<h4>뉴스레터 <span class="d_date">2020.12</span></h4>
					<div class="d_box">
						<p>매월 자사 관련 뉴스레터 발송하기 위한 목적으로 템플릿 등록 및 관리, 발송 기능 구현</p>
						
						<div style="margin-top:10px;">
							<span class="d_txt_tit">사용기술</span>
							<div>
								<span class="categ php">PHP</span>
								<span class="categ mysql">MySQL</span>
								<span class="categ ajax">Ajax</span>
								<span class="categ javascript">Javascript</span>
								<span class="categ jquery">JQuery</span>
								<span class="categ html">HTML</span>
								<span class="categ css">CSS</span>
							</div>
						</div>

						<div style="margin-top:10px;">
							<span class="d_txt_tit">작업 페이지</span><span style="color:#949494; font-size:11px; font-weight:bold; margin-left:5px;">클릭 시 해당 영역으로 스크롤 이동</span><br>
							<a href="javascript:;" onclick="moveScroll('list')"><span class="d_txt">리스트</span></a>
							<a href="javascript:;" onclick="moveScroll('add')"><span class="d_txt">템플릿 등록/수정</span></a>
							<!-- <a href="javascript:;" onclick="moveScroll('relkwd')"><span class="d_txt">연관키워드</span></a>
							<a href="javascript:;" onclick="moveScroll('favorkwd')"><span class="d_txt">관심상품</span></a> -->
							<!-- <span class="nb01"></span> -->
							<!-- <div contenteditable="false" spellcheck="true" placeholder="비어 있는 인용" data-root="true" class="d_txtbox"><span class="d_txt">쇼핑검색</span><br><br><span class="d_txt">키워드분석</span><br></div> -->
							<div class="img_area">
								<div id="list" class="career_img">
									<span class="nb01"></span><span class="img_tit">리스트</span><br>
									<span class="img_txt">등록한 템플릿 리스트(미리보기, 발송리스트, 조회수 및 조회시간 확인 가능), 개별발송/일괄발송/재발송 및 관리(수정/삭제) 가능</span>
									<img src="<?=_web_url_?>/img/career/newsletter_list.png">
									<img src="<?=_web_url_?>/img/career/newsletter_list2.png">
								</div>
								<div id="add" class="career_img">
									<span class="nb01"></span><span class="img_tit">템플릿 등록/수정</span><br>
									<span class="img_txt">원하는 카테고리 및 카테고리별 리스트를 직접 선택하여 템플릿에 추가할 수 있으며, 직접입력 가능</span>
									<img src="<?=_web_url_?>/img/career/newsletter_write.png">
									<img src="<?=_web_url_?>/img/career/newsletter_write2.png">
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