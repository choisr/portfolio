<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<style>
</style>

<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="<?=_web_url_?>/info/career.php">경력기술서</a> <i class="material-icons m-r-0">chevron_right</i>사내 교육동영상</h3>
			<div class="clear"></div>

			<div class="careerDetail">
				<div class="detail_top">
					<span class="d_tit m-r-5">기여도 100%</span>
					<span class="d_tit">유지보수 100%</span>

					<h4>사내 교육동영상 <span class="d_date">2019.07</span></h4>
					<div class="d_box">
						<p>영업담당자 교육을 위한 동영상 업로드/조회 목적으로 사내 그룹웨어 내 교육동영상 별도 페이지 개발</p>
						
						<div style="margin-top:10px;">
							<span class="d_txt_tit">사용기술</span>
							<div>
								<span class="categ php">PHP</span>
								<span class="categ mysql">MySQL</span>
								<span class="categ javascript">Javascript</span>
								<span class="categ jquery">JQuery</span>
								<span class="categ html">HTML</span>
								<span class="categ css">CSS</span>
							</div>
						</div>

						<div style="margin-top:10px;">
							<span class="d_txt_tit">작업 페이지</span><span style="color:#949494; font-size:11px; font-weight:bold; margin-left:5px;">클릭 시 해당 영역으로 스크롤 이동</span><br>
							<a href="javascript:;" onclick="moveScroll('list')"><span class="d_txt">리스트</span></a>
							<a href="javascript:;" onclick="moveScroll('view')"><span class="d_txt">동영상 뷰</span></a>
							<a href="javascript:;" onclick="moveScroll('admin')"><span class="d_txt">관리자페이지</span></a>
							<!-- <span class="nb01"></span> -->
							<!-- <div contenteditable="false" spellcheck="true" placeholder="비어 있는 인용" data-root="true" class="d_txtbox"><span class="d_txt">쇼핑검색</span><br><br><span class="d_txt">키워드분석</span><br></div> -->
							<div class="img_area">
								<div id="list" class="career_img">
									<span class="nb01"></span><span class="img_tit">리스트</span><br>
									<span class="img_txt">업로드 영상 리스트, 특정 영상 즐겨찾기 및 다운로드 기능 제공, 관리자의 경우 담당자별 조회수(체류시간) 확인 가능 </span>
									<img src="<?=_web_url_?>/img/career/edu_list.png">
									<img src="<?=_web_url_?>/img/career/edu_viewcnt.png">
								</div>
								<div id="view" class="career_img">
									<span class="nb01"></span><span class="img_tit">동영상 뷰</span><br>
									<span class="img_txt">동영상 뷰 페이지, 영상 재생속도 설정 기능 및 이전/다음 및 인기 콘텐츠 리스트 제공</span>
									<img src="<?=_web_url_?>/img/career/edu_view.png">
								</div>
								<div id="admin" class="career_img">
									<span class="nb01"></span><span class="img_tit">관리자페이지</span><br>
									<span class="img_txt">카테고리별 관리 및 영상 업로드/수정/삭제 기능 구현</span>
									<img src="<?=_web_url_?>/img/career/edu_admin_list.png">
									<img src="<?=_web_url_?>/img/career/edu_admin_upload.png">
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