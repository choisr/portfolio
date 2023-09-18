<?
	require_once $_SERVER['DOCUMENT_ROOT'] . "/board/include/dbconnect.php";

	// GET PAGEMODE
	$refer = $_SERVER['HTTP_REFERER'];
	$callbasename=basename($refer);
	$pageMode = strtolower(substr($callbasename, 0, strpos($callbasename,".php")));

	// 사용자 Parameter
	$pMode = isset($_REQUEST['pMode']) ? $_REQUEST['pMode'] : "" ;
	
	// OUTPUT
	$row = array();
	$output = array(
		"data"	=> array()
	);
	
	// === [ 게시판 ] - 리스트 페이지 ===
	if( $pageMode == "list" ){
		// 리스트
		if( $pMode == "LIST" ){
			$searchValue = isset($_REQUEST['searchValue']) ? $_REQUEST['searchValue'] : "" ;

			// 검색
			$sWhere = "";
			if( $searchValue != "" ){ $sWhere .= " AND ( w_name LIKE '%". $searchValue ."%' OR w_title LIKE '%". $searchValue ."%' ) "; }
				
			// 정렬
			$sOrder = " ORDER BY suid DESC ";

			$selSql = "
				SELECT suid, w_name, w_title, w_content, DATE_FORMAT(regdate, '%Y-%m-%d %H:%i') AS regdate
				FROM zxchsr.board
				WHERE del_yn != 'Y'
			";

			$selSql .= $sWhere . $sOrder ;

			$totSql = "
				SELECT 
					  COUNT(*) AS totalCnt
				FROM ( ".$selSql." ) AS A
			";
			$totRes = mysqli_query($db, $totSql);
			$totRow = mysqli_fetch_array($totRes); 

			$no = $totRow['totalCnt'];
			
			$selRes = mysqli_query($db, $selSql);
			while( $selRow = mysqli_fetch_assoc($selRes) ){
				$selRow['no'] = number_format($no--);
				$row[] = $selRow;
			}
		}

		$output['data'] = $row;
	
	// === [ 게시판 ] - 뷰, 작성 페이지 ===
	}else if( $pageMode == "view" || $pageMode == "write" ){
		// 뷰 데이터
		if( $pMode == "TARGET" ){
			$suid = isset($_REQUEST['suid']) ? $_REQUEST['suid'] : "" ;
			
			$selSql = "
				SELECT w_name, w_title, w_content, DATE_FORMAT(regdate, '%Y-%m-%d %H:%i') AS regdate
				FROM zxchsr.board
				WHERE del_yn != 'Y'
					AND suid = ".$suid."
			";
			$selRes = mysqli_query($db, $selSql);
			$selRow = mysqli_fetch_assoc($selRes);
			$row[] = $selRow;
		}

		$output['data'] = $row;

	}else{
		$output["data"] = [];
	}

	mysqli_close($db);
	print json_encode($output);
	exit;
?>