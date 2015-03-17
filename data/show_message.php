<?php
	header("Content-type:text/html;charset=utf-8");	
	require "key.php";
	$conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	mysql_select_db("blog");
	$query="select * from message  order by id desc";
	$result=mysql_query($query);
	// echo "<table>";
	// while ($rs=mysql_fetch_object($result)) {		
	// 	echo "<tr><td>".$rs->name."：".$rs->contents."</td></tr>";
	// 	echo "<tr><td><span>评论时间：".$rs->time."</span></td></tr>";
	// 	echo "<tr><td></br></td></tr>";
	// }
	// echo "</table>";
?>