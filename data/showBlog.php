<?php
	header("Content-type:text/html;charset=utf-8");	
	require "key.php";
	$conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	mysql_select_db("blog");
	$query="select * from blog where id=50";
	$result=mysql_query($query);
	// echo "<table>";
	while ($rs=mysql_fetch_object($result)) {
		echo "<h4>".$rs->headname."</br></h4>";
		echo "<p>".$rs->contents."</p>";
	}
?>