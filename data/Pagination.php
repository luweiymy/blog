<?php  //向数据库中插入数据
	require "key.php";
	$conn=mysql_connect($host,$user,$password)or die("连接数据库失败".mysql_error());
	mysql_select_db("blog");
	if (isset($_GET["page"])) {
		# code...
		@$page=max(1,intval($_GET["page"]));
		$pagesize=10;
		$startIndex=($page-1)*$pagesize;
		// 这是显示评论的地方
		$query="select * from message order by id desc limit $startIndex,$pagesize";
		$result=mysql_query($query);
		$num=mysql_num_rows(mysql_query("select * from message"));
		$pagenum=@ceil($num/$pagesize);
		// echo $num;//总的记录数
		// echo $pagenum;//总的页数
		$str="";
		for ($i=1; $i < $pagenum+1; $i++) { 
		// # code...
			if ($page!=$i) {
			// 	# code...
				$str=$str."<a href='javascript:void(0)' onclick='pagination(".$i.")'>".$i."</a>&nbsp;&nbsp;&nbsp;";
			}
			else{
        		$str=$str."<a href='javascript:void(0)' onclick='pagination(".$i.")'>[".$i."]</a>&nbsp;&nbsp;&nbsp;";
   			}	
        }
        echo $str;
	}else{
   		die();
	}
?>
