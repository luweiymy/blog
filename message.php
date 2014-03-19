<?php
	header("Content-type:text/html;charset=utf-8");	
	require "key.php";
	$id=$_POST['id'];
	$name=$_POST['name'];
	$contents=$_POST['contents'];
	$conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	mysql_select_db("blog");
	$query="insert into message (name,contents) values('".$name."','".$contents."')";
	// $query="insert into message (name,content) values ('0000','iiiii')";
	$result=mysql_query($query);
	// if ($result>0) {
	// 	# code...
	// 	echo "s";
	// }
	// else {
	// 	# code...
	// 	echo "f";
	// }
?>