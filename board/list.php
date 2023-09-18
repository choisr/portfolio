<?
	require_once $_SERVER['DOCUMENT_ROOT'] . "/board/include/header.php";
?>

<div id="warp">
	<div class="con_box">
		<div class="con_area">
			<!-- <h4>게시판</h4> -->
			<button type="button" class="writeBtn btn btn-primary" onclick="goWrite('new')">신규작성</button>
			<button type="button" class="btn btn-danger m-l-5" onclick="goSelDel()">선택삭제</button>
			<div class="search_area">
				<input type="text" class="form-control input-sm" id="searchValue" style="height:15px; float:left; width:150px;" placeholder="검색어 입력(제목 또는 작성자)">
				<!-- <button type="button" class="btn btn-primary" onclick="CallBackLoadMain()">검색</button> -->
				<button type="button" class="btn btn-search" onclick="CallBackLoadMain()" style="padding:1.5px 3px;"><i class="material-icons" style="font-size:22px; vertical-align:-8px;">search</i></button>
			</div>
			
			<!-- 소스파일 다운 -->
			<a href="board.zip" class="downloadBtn"><i class="material-icons m-r-5" style="font-size:15px; vertical-align:-3px;">get_app</i>소스 파일 다운</a>

			<div class="table_con01">
				<table class="table_st02">
					<thead>
						<tr style="background-color:#f7f7f7; font-weight:700; font-size:15px;">
						  <td style="border-left:none;font-weight:700;"><input type="checkbox" class="selAll" /></td>
						  <td style="font-weight:700;">번호</td>
						  <td style="font-weight:700;">제목</td>
						  <td style="font-weight:700;">작성자</td>
						  <td style="font-weight:700;">작성일</td>
						  <td style="font-weight:700;"></td>
						</tr>
					</thead>
					<tbody class="list_body"></tbody>
				</table>
			</div>
		</div>
	</div>
<div>

<script type="text/javascript">
	// 전체선택 시 선택 리스트 모두 체크됨 
	$(".selAll").click( function(){
		$(".selChk").prop('checked', this.checked);
	});

	// 전체선택 후 선택 리스트 하나라도 누르게 되면 전체선택 체크 해제
	function clkSelChk(){
		$(".selAll").prop("checked", false);
	}

	// 검색 :: 엔터키 이벤트
	$("#searchValue").keydown(function(key) {
		if( key.keyCode == 13 ){
			CallBackLoadMain();
		}
	});
	
	// 작셍페이지 이동
	function goWrite(suid){
		var url = "write.php";
		if( suid != "new" ){ url += "?suid=" + suid ; }
		location.href = url;
	}
	
	// 뷰페이지 이동
	function goView(suid){
		var url = "view.php?suid=" + suid;
		location.href = url;
	}

	$(document).ready(function(){
		CallBackLoadMain();
	});

	function CallBackLoadMain(){
		$.ajax({
			method: "POST",
			url: "dao/getDataDao.php",
			data: {
				pMode : "LIST" ,
				searchValue : $("#searchValue").val()
			},
			beforeSend : function() {
				$(".list_body").LoadingOverlay("show");
			},
			success: function(data, html){
				$(".list_body").LoadingOverlay("hide");

				var Djson = JSON.parse(data);
				var k_data = Djson.data;
				//console.log(k_data);

				var tmpHtml = "";
				if( k_data.length > 0 ){
					for( var i=0; i<k_data.length; i++ ){
						tmpHtml += "<tr>";
						tmpHtml += "	<td><input type='checkbox' class='selChk' onclick='clkSelChk()' name='selChk[]' value='"+ k_data[i].suid +"' /></td>";
						tmpHtml += "	<td>"+ k_data[i].no +"</td>";
						tmpHtml += "	<td><a href='javascript:;' onclick='goView(\""+ k_data[i].suid +"\")' >"+ k_data[i].w_title +"</a></td>";
						tmpHtml += "	<td>"+ k_data[i].w_name +"</td>";
						tmpHtml += "	<td>"+ k_data[i].regdate +"</td>";
						tmpHtml += "	<td>";
						tmpHtml += "		<button type='button' class='btn btn-info' onclick='goWrite(\""+ k_data[i].suid +"\")' style='font-size:13px; padding:5px 7px;'>수정</button>";
						tmpHtml += "		<button type='button' class='btn btn-danger m-l-5' onclick='goDel(\""+ k_data[i].suid +"\")' style='font-size:13px; padding:5px 7px;'>삭제</button>";
						tmpHtml += "	</td>";
						tmpHtml += "</tr>";
					}

				}else{
					tmpHtml += "<tr>";
					tmpHtml += "	<td colspan='6'>데이터가 존재하지 않습니다.</td>";
					tmpHtml += "</tr>";
				}

				$(".list_body").html(tmpHtml);
			},
			error: function(x, o, e){
				$(".list_body").LoadingOverlay("hide");
				alert(x.status + " : "+ o +" : "+e);
			}
		});
	}
	
	// 단일삭제
	function goDel(suid){
		var strConfirm = confirm("해당 게시글을 삭제하시겠습니까?");
		if( strConfirm ){
			$.ajax({
				method: "POST",
				url: "dto/setDataDto.php",
				data: {
					pMode : "DEL_TARGET" ,
					suid : suid
				},
				beforeSend : function() {
					$(".list_body").LoadingOverlay("show");
				},
				success: function(data, html){
					$(".list_body").LoadingOverlay("hide");

					var Djson = JSON.parse(data);
					if( Djson.rtnValue ){
						alert("해당 게시글이 삭제되었습니다.");
						CallBackLoadMain();
					}
				},
				error: function(x, o, e){
					$(".list_body").LoadingOverlay("hide");
					alert(x.status + " : "+ o +" : "+e);
				}
			});
		}
	}
	
	// 선택삭제
	function goSelDel(){
		var chkArray = new Array();

		$("input[name='selChk[]']:checked").each(function() { 
		  var tmpVal = $(this).val(); 
		  chkArray.push(tmpVal);
		});

		if( chkArray.length < 1 ){
		  alert("삭제할 게시글을 선택해주시기 바랍니다.");
		  return;
		}

		var strConfirm = confirm("선택하신 게시글을 삭제하시겠습니까?");
		if( strConfirm ){
			$.ajax({
				method: "POST",
				url: "dto/setDataDto.php",
				data: {
					pMode : "DEL_SELECT" ,
					suidArr : chkArray
				},
				beforeSend : function() {
					$(".list_body").LoadingOverlay("show");
				},
				success: function(data, html){
					$(".list_body").LoadingOverlay("hide");

					var Djson = JSON.parse(data);
					if( Djson.rtnValue ){
						alert("선택하신 글이 모두 삭제되었습니다.");
						CallBackLoadMain();
					}
				},
				error: function(x, o, e){
					$(".list_body").LoadingOverlay("hide");
					alert(x.status + " : "+ o +" : "+e);
				}
			});
		}
	}
</script>