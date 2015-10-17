<?php 
	$ac = array('name' => 'lc');
	require 'php_class/mould.php';
	$test = new Handle_file(array('view/header.html','view/footer.html'),'test.php',true);
	require $test->req_file();
 ?>