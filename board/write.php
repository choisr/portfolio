<?
	require_once $_SERVER['DOCUMENT_ROOT'] . "/board/include/header.php";

	$requestSuid = isset($_REQUEST['suid']) ? $_REQUEST['suid'] : "" ;
	$pMode = $requestSuid == "" ? "NEW" : "EDIT" ;
?>

<div id="warp">
	<div class="con_box">
		<div class="con_area">
			<h4>신규 작성</h4>
			<div class="table_con01">
				<form class="form-horizontal" id="writeFrm" action="dto/setDataDto.php" data-parsley-validate="true" enctype="multipart/form-data" method="post">
					<input type="hidden" id="pMode" name="pMode" value="<?=$pMode?>" />
					<input type="hidden" id="requestSuid" name="requestSuid" value="<?=$requestSuid?>" />

					<table class="table_st03">
						<tbody>
							<tr>
								<td style="text-align:center;">제목</td>
								<td style="border-left:1px solid #e3e3e3;"><input type="text" class="form-control input-sm" name="w_title" id="w_title" placeholder="제목을 입력해주세요." maxlength="20" ></td>
								<td style="text-align:center; border-left:1px solid #e3e3e3;">작성자</td>
								<td style="border-left:1px solid #e3e3e3;"><input type="text" class="form-control input-sm" name="w_name" id="w_name" placeholder="이름을 입력해주세요." maxlength="20" ></td>
							</tr>
							<tr>
								<td colspan="4" style="padding:15px 20px 0;">
									<textarea rows="5" placeholder="내용을 입력해주시기 바랍니다." id="w_content" name="w_content"></textarea>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			
			<!-- 버튼 영역 -->
			<div class="btn_area">
				<button type="button" class="btn btn-primary" onclick="goList()" style="font-size:13px; padding:5px 7px;">목록보기</button>
				<button type="button" class="btn btn-danger m-l-5" onclick="save()" style="font-size:13px; padding:5px 7px;">저장</button>
			</div>
		</div>
	</div>
<div>

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<!-- ================== BEGIN parsley JS ================== -->
<script src="<?=_web_url_?>/js/plugins/parsley/dist/parsley.js"></script>
<script src="<?=_web_url_?>/js/plugins/jquery-form/jquery.form.min.js"></script>
<script src="<?=_web_url_?>/js/loadingoverlay.min.js"></script>
<script src="<?=_web_url_?>/js/loadingoverlay_progress.min.js"></script>
<!-- ================== END parsley JS ================== -->

<script type="text/javascript">
	var requestSuid = "<?=$requestSuid?>";

	// 리스트페이지 이동
	function goList(){
		var url = "list.php";
		location.href = url;
	}

	// 작셍페이지 이동
	function goWrite(){
		var url = "write.php";
		location.href = url;
	}
	
	// 뷰페이지 이동
	function goView(suid){
		var url = "view.php?suid=" + suid;
		location.href = url;
	}

	$(document).ready(function(){
		if( requestSuid != "" ){ getData(); }

		$('#w_content').summernote({
			placeholder: "글 내용을 적어주세요.",
			height: 300,        
			minHeight: null,    
			maxHeight: null,   
			focus: true
		});

		$('#writeFrm').ajaxForm({
			"dataType" : "json",
			"success" : function(data, status) {
				if( data.rtnValue ){
					alert("글이 저장되었습니다.");
					goView(data.msg);
				}
			},
			error: function(x, o, e){
				alert(x.status + " : "+ o +" : "+e);
				hideLoading();
			}
		});
	});
	
	// 수정 시 이전 데이터 가져오기
	function getData(){
		$.ajax({
			method: "POST",
			url: "dao/getDataDao.php",
			data: {
				pMode : "TARGET" ,
				suid : requestSuid
			},
			beforeSend : function() {
				$(".table_st03").LoadingOverlay("show");
			},
			success: function(data, html){
				$(".table_st03").LoadingOverlay("hide");

				var Djson = JSON.parse(data);
				var k_data = Djson.data;
				
				var tmpHtml = "";
				if( k_data.length > 0 ){
					console.log(k_data);
					
					if( k_data[0].w_name != "" ){ $("#w_name").val(k_data[0].w_name); }
					if( k_data[0].w_title != "" ){ $("#w_title").val(k_data[0].w_title); }
					if( k_data[0].w_content != "" ){ $('#w_content').summernote('code', k_data[0].w_content); }
				}
			},
			error: function(x, o, e){
				$(".table_st03").LoadingOverlay("hide");
				alert(x.status + " : "+ o +" : "+e);
			}
		});
	}
	
	// 폼체크
	function formChk(){
		var status = true;

		if( $("#w_title").val().trim() == '' ){
			status = false;
			alert('제목을 입력해주시기 바랍니다.');
			$("#w_title").focus();

		}else if( $("#w_name").val().trim() == '' ){
			status = false;
			alert('이름을 입력해주시기 바랍니다.');
			$("#w_name").focus();

		}else if( $("#w_content").val().trim() == '' ){
			status = false;
			alert('내용을 입력해주시기 바랍니다.');
			$("#w_content").focus();
		}

		return status;
	}

	// 저장
	function save(){
		if( formChk() ){
			$("#writeFrm").submit();
		}
	}

</script>