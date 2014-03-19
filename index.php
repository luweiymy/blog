<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--启动响应式-->	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"><!--启动响应式-->	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<script src="http://code.jquery.com/jquery-1.8.1.js"></script>	
	<script type="text/javascript" >
	$(document).ready(function(){
		$('#myTab a').click(function (e) {
	 	e.preventDefault();
	 	$(this).tab('show');
	 	// alert("000");
		})
	})
	</script>
</head>

<body data-spy="scroll" data-target=".bs-doc-sidebar">
	<!--导航-->
	<div class="container">
		<div class="navbar navbar-inverse">
		  	<div class="navbar-inner">
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
				      		<li class="active"><a href="#">首页</a></li>
				    		<li><a href="blog.html">每日一博</a></li>
				      		<li><a href="experience.html">小小经验</a></li>
				      		<li><a href="message.html">留言</a></li>
				      		<li><a href="aboutme.html">关于我</a></li>
				   		</ul>
				   		
			      	</div>
			    </div>
		  	</div>
		</div>
		  <!--内容-->
		<div class="row">
			<div class="container-fluid">
				<div class="row-fluid">
				    <div class="span3 bs-docs-sidebar">
				      <!--Sidebar content-->
				       	<ul class="nav nav-list bs-docs-sidenav affix-top" id="myTab">
				       	 	<li class="disabled"><a href="#">首页列表</a></li>
						  	<li class="active"><a href="#index">博客首页<i class="icon-chevron-right"></i></a></li>
						  	<li class><a href="#marrow">博客精华<i class="icon-chevron-right"></i></a></li>
						  	<!-- <li class="divider"></li> -->
						</ul>
					
				    </div>
				    <div class="span9">
				      <!--Body content-->
				      	<div class="tab-content">
							<div class="tab-pane active" id="index">
								<div class="hero-unit">
								    <h1>杨梦雅的博客</h1>
								  	<p>前端开发菜鸟</p>
								 	<p>
										<a href="aboutme.html" class="btn btn-primary btn-large">
								      		了解我
								   	 	</a>
							  		</p>
								</div>
								<div class="span4">
									<h3>Thumbnail label</h3>
									<p>Thumbnail caption...</p>
									<button class="btn-primary">view<i class="icon-chevron-right icon-white"></i></button>
								</div>
								<div class="span4">
									<h3>Thumbnail label</h3>
									<p>Thumbnail caption...</p>
									<button class="btn-primary">view<i class="icon-chevron-right icon-white"></i></button>
								</div>
								<div class="span4">
									<h3>Thumbnail label</h3>
									<p>Thumbnail caption...</p>
									<button class="btn-primary">view<i class="icon-chevron-right icon-white"></i></button>
								</div>
								<div class="span4">
									<h3>Thumbnail label</h3>
									<p>Thumbnail caption...</p>
									<button class="btn-primary">view<i class="icon-chevron-right icon-white"></i></button>
								</div>
							</div>
							<div class="tab-pane" id="marrow">
								<ul>
									<li><a>11111的帖子</a></li>
									<li><a>11111的帖子</a></li>
									<li><a>11111的帖子</a></li>
									<li><a>11111的帖子</a></li>
									<li><a>11111的帖子</a></li>
									<li><a>11111的帖子</a></li>
									<li><a>11111的帖子</a></li>
									<li><a>11111的帖子</a></li>

								</ul>								
							</div>
						</div>
				    </div>
	  			</div>
			</div>
		</div>
	
	<!-- </div> -->
<!--页脚部分-->
		<hr/>
		<div class="footer">mengyayang&copy;Company 2014</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="js/bootstrap-modal.js"></script> -->
</body>
</html>