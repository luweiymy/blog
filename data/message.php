<?php  //向数据库中插入数据
	// header("Content-type:text/html;charset=utf-8");
	 require "key.php";
	// $id=$_POST['id'];
	// $name=$_POST['name'];
	// $contents=$_POST['contents'];
	$time = date('Y-m-d H:i:s',time());//留言的时间
	//使用ajax传过来的数据
	$data = json_decode($_POST['data'],true);
	
	// $conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	// mysql_select_db("blog");
	// $query="insert into message (name,contents,time) values('".$name."','".$contents."','".$time."')";
	// $result=mysql_query($query);
	require "show_message.php";
?>