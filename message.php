<?php  //向数据库中插入数据
	header("Content-type:text/html;charset=utf-8");
	require "key.php";
	if (!isset($_SESSION)) {
		# code...
		session_start();
	};

	$id=$_POST['id'];
	$name=$_POST['name'];
	$contents=$_POST['contents'];
	$conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	mysql_select_db("blog");
	$query="insert into blog (name,contents) values('".$name."','".$contents."')";
	$result=mysql_query($query);
	// if ($result>0) {
	// 	# code...
	// 	echo "s";
	// }
	// else {
	// 	# code...
	// 	echo "f";
	// }
	require "show_message.php";
?>