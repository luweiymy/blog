<?php  //向数据库中插入数据
	header("Content-type:text/html;charset=utf-8");
	require "../../data/key.php";
	if (!isset($_SESSION)) {
		# code...
		session_start();
	};
	$headname=$_POST['headname'];
	$contents=$_POST['contents'];
	$conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	mysql_select_db("blog");
	$query="select id from blog";
	$result=mysql_query($query);
	// require "show_message.php";
	echo $result;
?>