<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>留言板</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">

</head>
<body data-spy="scroll" data-target=".bs-doc-sidebar">
	<div class="container">
	<!--导航-->
		<div class="head">
			<div class="navbar navbar-inverse">
			  	<div class="navbar-inner ">
				    <div class="container">
				      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</a>
				 
				        <!-- Be sure to leave the brand out there if you want it shown -->
				        <a class="brand" href="#">Project name</a>
				 
				        <!-- Everything you want hidden at 940px or less, place within here -->
				      	<div class="nav-collapse collapse">
				        <!-- .nav, .navbar-search, .navbar-form, etc -->
				        	<ul class="nav" >
					      		<li class="active"><a href="index.php">首页</a></li>
					    		<li><a href="#">每日一博</a></li>
					      		<li><a href="experience.html">小小经验</a></li>
					      		<li><a href="message_post.php">留言</a></li>
					      		<li><a href="aboutme.html">关于我</a></li>
					   		</ul>
					   		
				      	</div>
				    </div>
			  	</div>
			</div>
		</div>
	<!--内容 -->
		<div class="content">
			<?php
				require "show_message.php";
			?>
			<div class="page">
				<ul class="pager">
					<li><a href="#">前一页</a></li>
			  		<li><a href="#">后一页</a></li>
				</ul>

			</div>
		</div>
		<!-- <hr/> -->

		<!--留言部分-->

		<div class="content1">
			<form class="form-horizontal" method="post"  action="message.php">
				<h3><i class="icon-heart"></i>我要留言<i class="icon-heart"></i></h3>
				<div class="control-group">
				    <div class="controls">
				      <input type="hidden" id="id" name="id">
				    </div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="inputName" > 昵称：</label>
				    <div class="controls">
				      <input type="text" id="inputName" name="name">
				    </div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="inputContent" >内容：</label>
				    <div class="controls">
				      <textarea rows="5" placeholder="请输入留言内容" name="contents"></textarea>
				    </div>
				</div>
				<div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn" name="login" >提交</button>
				    </div>
				</div>
			</form>
		</div>
	<!--页脚-->

		<div class="foot">mengyayang&copy;Company 2014</div>
	</div>

</body>