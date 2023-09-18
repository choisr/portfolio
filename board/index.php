<?
	$url = "./list.php";
	$url .= ( $_SERVER["QUERY_STRING"] == '' ? '' : '?' . $_SERVER["QUERY_STRING"] ) ;
	header( "Location: $url" );
	exit;
?>