<?php//检查表单输入
	header('Content-Type:text/xml');
	require "message.php";
	session_start();
	$id=$_POST['id'];
	$name=$_POST['name'];
	$contents=$_POST['contents'];

?>