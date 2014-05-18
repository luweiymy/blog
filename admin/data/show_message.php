<?php
	header("Content-type:text/html;charset=utf-8");	
	require "../../data/key.php";
	$conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	mysql_select_db("blog");
	$query="select * from blog";
	$result=mysql_query($query);
	echo "<table>";
	while ($rs=mysql_fetch_object($result)) {		
		echo "<tr>";
		echo "<td> 标题：".$rs->headname."</td><br/>";
		echo "<td>内容：".$rs->contents."</td><br/>";
		echo "</tr>";		
	}
	echo "</table>";
?>