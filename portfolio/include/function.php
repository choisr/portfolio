<?php
	// 확장
	function pageExtDel($this_file){
		if ( strpos($this_file,".php") ) {
			return strtolower(substr($this_file, 0, strpos($this_file,".php")));
		}else {
			return $this_file;
		}
	}

	function checkThisPage($page){
		$page = str_replace("_view","" , $page);
		$page = str_replace("_write","" , $page);
		$page = str_replace("_edit","" , $page);
		return $page;
	}

?>