<?
	require_once $_SERVER['DOCUMENT_ROOT'] . "/board/include/header.php";

	$requestSuid = isset($_REQUEST['suid']) ? $_REQUEST['suid'] : "" ;
	if( $requestSuid == "" ){ echo "<script>alert(\"잘못된 접근입니다.\");</script>"; exit; }
?>

<div id="warp">
	<div class="con_box">
		<div class="con_area">
			<h4>신규 작성</h4>
			<div class="table_con01">
				<form class="form-horizontal" id="writeFrm" action="dto/setDataDto.php" data-parsley-validate="true" enctype="multipart/form-data" method="post">
					<input type="hidden" id="pMode" name="pMode" value="NEW" />

					<table class="table_st03">
						<tbody>
							<tr>
								<td style="text-align:center;">제목</td>
								<td style="border-left:1px solid #e3e3e3;"><span id="w_title"></span></td>
								<td style="text-align:center; border-left:1px solid #e3e3e3;">작성자</td>
								<td style="border-left:1px solid #e3e3e3;"><span id="w_name"></span></td>
								<td style="text-align:center; border-left:1px solid #e3e3e3;">작성일</td>
								<td style="border-left:1px solid #e3e3e3;"><span id="w_date"></span></td>
							</tr>
							<tr>
								<td style="text-align:center;">내용</td>
								<td colspan="5" id="w_content" style="border-left:1px solid #e3e3e3; padding:10px 20px;"></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			
			<!-- 버튼 영역 -->
			<div class="btn_area">
				<button type="button" class="btn btn-primary" onclick="goList()" style="font-size:13px; padding:5px 7px;">목록보기</button>
				<button type="button" class="btn btn-info m-l-5" onclick="goWrite('<?=$requestSuid?>')" style="font-size:13px; padding:5px 7px;">수정</button>
				<button type="button" class="btn btn-danger m-l-5" onclick="goDel('<?=$requestSuid?>')" style="font-size:13px; padding:5px 7px;">삭제</button>
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
	// 리스트페이지 이동
	function goList(){
		var url = "list.php";
		location.href = url;
	}

	// 작셍페이지 이동
	function goWrite(suid){
		var url = "write.php?suid=" + suid;
		location.href = url;
	}

	$(document).ready(function(){
		getData();
	});
	
	function getData(){
		$.ajax({
			method: "POST",
			url: "dao/getDataDao.php",
			data: {
				pMode : "TARGET" ,
				suid : "<?=$requestSuid?>"
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
					//console.log(k_data);
					
					if( k_data[0].w_name != "" ){ $("#w_name").html(k_data[0].w_name); }
					if( k_data[0].w_title != "" ){ $("#w_title").html(k_data[0].w_title); }
					if( k_data[0].w_content != "" ){ $("#w_content").html(k_data[0].w_content); }
					if( k_data[0].regdate != "" ){ $("#w_date").html(k_data[0].regdate); }
				}
			},
			error: function(x, o, e){
				$(".table_st03").LoadingOverlay("hide");
				alert(x.status + " : "+ o +" : "+e);
			}
		});
	}
	
	// 삭제
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
					$(".table_st03").LoadingOverlay("show");
				},
				success: function(data, html){
					$(".table_st03").LoadingOverlay("hide");

					var Djson = JSON.parse(data);
					if( Djson.rtnValue ){
						alert("글이 삭제되었습니다.");
						goList();
					}
					
				},
				error: function(x, o, e){
					$(".table_st03").LoadingOverlay("hide");
					alert(x.status + " : "+ o +" : "+e);
				}
			});
		}
	}

</script>