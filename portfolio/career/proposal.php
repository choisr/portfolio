<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>

<style>
</style>

<div id="warp">
	<div class="con_box">
		<div class="career">
			<h3><a href="<?=_web_url_?>/info/career.php">경력기술서</a> <i class="material-icons m-r-0">chevron_right</i>이메일제안서 툴 개발</h3>
			<div class="clear"></div>

			<div class="careerDetail">
				<div class="detail_top">
					<span class="d_tit m-r-5">기여도 90%</span>
					<span class="d_tit">유지보수 100%</span>

					<h4>이메일제안서 툴 개발 <span class="d_date">2020.02 - 2020.03</span></h4>
					<div class="d_box">
						<p>사용자별 원하는 메일 템플릿 선택 및 보내고자 하는 내용 작성, 이미지, 첨부파일을 추가하면 템플릿 틀에 맞춰 이메일 발송이 가능하도록 기능 구현</p>
						
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
							<a href="javascript:;" onclick="moveScroll('add')"><span class="d_txt">제안서 작성/수정</span></a>
							<a href="javascript:;" onclick="moveScroll('preview')"><span class="d_txt">제안서 최종 미리보기</span></a>
							<a href="javascript:;" onclick="moveScroll('sign')"><span class="d_txt">전자서명 설정</span></a>
							<!-- <span class="nb01"></span> -->
							<!-- <div contenteditable="false" spellcheck="true" placeholder="비어 있는 인용" data-root="true" class="d_txtbox"><span class="d_txt">쇼핑검색</span><br><br><span class="d_txt">키워드분석</span><br></div> -->
							<div class="img_area">
								<div id="list" class="career_img">
									<span class="nb01"></span><span class="img_tit">리스트</span><br>
									<span class="img_txt">담당자별 이메일제안서 발송 리스트 (수신확인시간 조회가능), 발송했던 템플릿(+작성한 내용) 그대로 다른 수신 계정으로 재발송 가능</span>
									<img src="<?=_web_url_?>/img/career/proposal_list.png">
								</div>
								<div id="add" class="career_img">
									<span class="nb01"></span><span class="img_tit">제안서 작성/수정</span><br>
									<span class="img_txt">원하는 템플릿을 선택하여 에디터(네이버 SmartEditor2) 내 제안서 내용 작성 (자동이미지리스트 선택 추가, 임시저장/불러오기 기능) </span>
									<img src="<?=_web_url_?>/img/career/proposal_write.png">
									<img src="<?=_web_url_?>/img/career/proposal_write2.png">
									<img src="<?=_web_url_?>/img/career/proposal_auto_img.png">
								</div>
								<div id="preview" class="career_img">
									<span class="nb01"></span><span class="img_tit">제안서 최종 미리보기</span><br>
									<span class="img_txt">실제 메일 발송 전 작성한 내용 그대로 발송되는 화면단 미리보기 기능</span>
									<img src="<?=_web_url_?>/img/career/proposal_preview.png" style="margin-bottom:20px;">
									<span class="img_txt">- 실제 수신 메일 화면단 -</span>
									<img src="<?=_web_url_?>/img/career/proposal_mail.png">
								</div>
								<div id="sign" class="career_img">
									<span class="nb01"></span><span class="img_tit">전자서명 설정</span><br>
									<span class="img_txt">이미지 첨부/미첨부, 이메일 발신자명 수정, 현재 전자서명 이미지 다운받기 기능</span>
									<img src="<?=_web_url_?>/img/career/proposal_sign.png">
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