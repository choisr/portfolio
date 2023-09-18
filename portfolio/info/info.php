<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/header.php";
?>
<div id="warp">
	<div class="con_box">
		<div class="info">
			<!-- <h3>AAAA</h3>
			<div class="clear"></div> -->

			<!-- ### 정보 -->
			<div class="info_top">
				<div class="info_img">
					<!-- <img src="<?=_web_image_path_?>/chsr.jpg"> -->
					<!-- <img src="<?=_web_image_path_?>/key_bg03.jpg"> -->
				</div>
				<div class="info_txtbox">
					<p>
						<span class="info_tit">최숙란</span>
						<span class="info_txt">1995년 (29세) | 여</span>
					</p>
					<div style="padding:15px 0 5px 5px;">
						<input id='info_mail' type='text' style='position:absolute;top:-99999em;' value='ch_-sr@naver.com' />
						<!-- <p style="font-size:15px;"><i class="material-icons" style="vertical-align:-5px;">smartphone</i> 010.2180.1202</p> -->
						<p style="font-size:16px;">
							<i class="material-icons">mail_outline</i> <a class="hover_gy" href="mailto:ch_-sr@naver.com" title="메일 발송하기" target="_blank">ch_-sr@naver.com</a>
							<a href="javascript:;" onclick="copy('mail')" class="copy_btn" title="메일 복사하기">복사하기</a>
						</p>
						<!-- <p style="font-size:15px;"><i class="material-icons" style="vertical-align:-5px;">home</i> (07002) 서울 동작구 사당로17길</p> -->
						<p style="font-size:16px;"><i class="material-icons">draw</i> <a href="https://zxchsr.tistory.com/" target="_blank" title="블로그 바로가기" class="hover_gy">zxchsr.tistory.com</a></p>
					</div>
					<div>
						<!-- <i class="material-icons">dashboard</i> -->
						<span class="categ php">PHP</span>
						<span class="categ javascript">Javascript</span>
						<span class="categ jquery">JQuery</span>
						<span class="categ html">HTML</span>
						<span class="categ css">CSS</span>
						<span class="categ mysql">MySQL</span>
						<span class="categ linux">Linux</span>
						<span class="categ nodejs">Node.js</span>
					</div>
				</div>
			</div>
			<div class="clear"></div>

			<div class="info_about">
				<!-- <span class="info_tit2">보유스킬</span>
				<div class="clear"></div> -->

				<div class="skill_txtbox">
					<p><i class="material-icons">task_alt</i> <span class="textB">PHP 실무 경험 4년 이상</span></p>
					<p><i class="material-icons">task_alt</i> <span class="textB">이커머스 송수신 API 개발</span></p>
					<p>
						<i class="material-icons">task_alt</i> <span class="textB">REST API</span>를 활용한 Web 개발<br>
						<span style="padding-left:30px; font-size:12px;">•Google(+Youtube), Naver, Kakao, KCP, I'mport, Cafe24, MakeShop, Godomall, Popbill, MailChimp, CloudGate(TWC)</span>
					</p>
					<p><i class="material-icons">task_alt</i> <span class="textB">AWS 및 오픈소스 웹서버(Apache, Nginx) 경험</span></p>
					<p><i class="material-icons">task_alt</i> <span class="textB">Atlassian(Bitbucket), Jenkins(CI/CD)</span></p>
					<p><i class="material-icons">task_alt</i> <span class="textB">MySQL</span>(설계, 이벤트 스케쥴러, 저장프로시저 생성) 및 <span class="textB">MsSQL</span></p>
					<p><i class="material-icons">task_alt</i> <span class="textB">Linux</span> 기본 명령어 및 <span class="textB">cron 사용 batch</span> 컨트롤</p>
					<p><i class="material-icons">task_alt</i> HTML/CSS/Javascript Frontend UI/UX 구현 가능</p>
					<p><i class="material-icons">task_alt</i> Javascript Ajax, Magento 플랫폼, 프레임워크 (node.js) 작업 경험</p>
				</div>
			</div>
			
			<!-- ### 보유스킬 -->
			<!-- <div class="info_skill">
				<span class="info_tit2">보유스킬</span>
				<div class="clear"></div>
				<div class="skill_txtbox">
					<p>- HTML5, CSS3 기본 지식 및 UI, UX 구현가능</p>
					<p>- <span class="textB">PHP 실무 경험 2년 이상</span></p>
					<p>- <span class="textB">REST API</span>를 활용한 Web 개발 경험 (네이버, 카카오모먼트, 유튜브, 카페24, 메이크샵, 고도몰)</p>
					<p>- <span class="textB">JQuery</span>(JQuery UI 구현</span>- datepicker, fullcalendar, colorpicker, summernote, smartedit 등)</p>
					<p>- <span class="textB">Javascript Ajax, 프레임워크 (node.js)</span> 개발 경험 보유</p>
					<p>- <span class="textB">MySQL</span> 테이블 설계 및 기본구문, 이벤트 스케쥴러, 저장프로시저 생성 가능</p>
					<p>- <span class="textB">Linux</span> 기본 명령어 및 <span class="textB">cron 사용 batch</span> 작업 가능</p>
				</div>
			</div>
			<div class="clear"></div> -->
			
			<!-- ### 학력 및 경력 -->
			<div class="info_bottom">
				<span class="info_tit2">경력</span>
				<span class="info_txt2">총 4년 1개월</span></span>
				<div class="clear"></div>
				<div class="table_con01">
					<table class="table_st02">
						<thead>
							<tr style="background-color:#f7f7f7; font-weight:700; font-size:15px;">
							  <td style="border-left:none;width:18%; font-weight:700;">근무기간</td>
							  <td style="font-weight:700;">회사명</td>
							  <td style="font-weight:700;">부서</td>
							  <td style="font-weight:700;">직급</td>
							  <td style="font-weight:700;">지역</td>
							  <td style="font-weight:700;">직종</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2021.06 ~ 재직중</td>
								<td>아이아이컴바인드(젠틀몬스터)</td>
								<td>백엔드1팀</td>
								<td>-</td>
								<td>서울</td>
								<td>IT·인터넷 | 웹개발</td>
							</tr>
							<tr>
								<td colspan="6"><span class="d_tit" style="margin:0 5px 0 0;">담당업무</span> 지사별 이커머스 송수신 API 개발(제품,회원,주문,재고,온라인마케팅 등), 신규 프로젝트 로직 개발 및 유지보수 / Rest API를 활용한 Web 개발</td>
							</tr>
							<tr>
								<td>2018.12 ~ 2021.05</td>
								<td>미래아이엔씨</td>
								<td>지원-개발팀</td>
								<td>주임</td>
								<td>서울</td>
								<td>IT·인터넷 | 웹개발</td>
							</tr>
							<tr>
								<td colspan="6"><span class="d_tit" style="margin:0 5px 0 0;">담당업무</span> 자사 그룹웨어&솔루션 개발 및 유지보수 / Rest API를 활용한 Web 개발</td>
							</tr>
						</tbody>
					</table>
				</div>

				<span class="info_tit2">학력</span>
				<span class="info_txt2">최종학력 | 대학교 <span class="">4년</span> 졸업</span>
				<div class="clear"></div>
				<div class="table_con01">
					<table class="table_st02">
						<thead>
							<tr style="background-color:#f7f7f7; font-weight:700; font-size:15px;">
							  <td style="border-left:none;width:18%; font-weight:700;">재학기간</td>
							  <td style="font-weight:700;">구분</td>
							  <td style="font-weight:700;">학교명(소재지)</td>
							  <td style="font-weight:700;">전공</td>
							  <td style="font-weight:700;">학점</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2018.03 ~ 2019.02</td>
								<td>졸업</td>
								<td>서일대학교(학사학위/서울)</td>
								<td>정보통신공학과</td>
								<td>4.25/4.5</td>
							</tr>
							<tr>
								<td>2014.03 ~ 2017.02</td>
								<td>졸업</td>
								<td>서일대학교(서울)</td>
								<td>정보통신공학과</td>
								<td>4.17/4.5</td>
							</tr>
							<tr>
								<td>2011.03 ~ 2014.02</td>
								<td>졸업</td>
								<td>예림디자인고등학교</td>
								<td>전문(실업)계 (인터넷정보과)</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
				</div>

				<span class="info_tit2">작업</span>
				<span class="info_txt2">포트폴리오/블로그</span>
				<div class="clear"></div>
				<div class="table_con01">
					<table class="table_st02">
						<thead>
							<tr style="background-color:#f7f7f7; font-weight:700; font-size:15px;">
							  <td style="border-left:none;width:18%; font-weight:700;">구분</td>
							  <td style="font-weight:700;">작업년도</td>
							  <td style="font-weight:700;">링크</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="d_tit">포트폴리오</span></td>
								<td>2018년</td>
								<td>
									<a href="http://chsr.dothome.co.kr/new" target="_blank" title="새창으로 링크연결" class="pf_link">
										chsr.dothome.co.kr
									</a>
								</td>
							</tr>
							<tr>
								<td><span class="d_tit">블로그</span></td>
								<td>2020년 ~</td>
								<td>
									<a href="https://zxchsr.tistory.com" target="_blank" title="새창으로 링크연결" class="pf_link">
										zxchsr.tistory.com
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>


			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		var conBox = $('.con_box');
		conBox.fadeIn();
	});
	
	// 복사하기
	function copy(obj){
		$("#info_"+obj).select();
		
		try{
			var successful = document.execCommand("copy");
			if( successful ){
				alert("메일 계정 복사완료!\n메일 보내주시면 최대한 빠른 시일 내에 회신드리겠습니다.\n감사합니다:)");
			}

		}catch(err){
			alert('이 브라우저는 지원하지 않습니다.');
		}
	}
</script>

<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/portfolio/include/footer.php";
?>