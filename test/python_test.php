<?
	$text = "hello";
    echo $text . '</br>';
 
	$text_encode = base64_encode($text);
	echo $text_encode;
	
	$test = 'testGMTteddteGMTtewtgf';
	$test2 = explode("GMT",$test);

	print_r($test2);

?>