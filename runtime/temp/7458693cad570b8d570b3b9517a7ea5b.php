<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/bill2\view\index\index.html";i:1527642544;s:68:"D:\PHP\Apache\Apache24\htdocs\tp5\application\bill2\view\layout.html";i:1527645578;}*/ ?>
<!DOCTYPE HTML>

<html lang="zh-CN">
<head>
	<title>
	查看账单
</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="/static/bootstrap-3.3.7-dist/js/jquery.min.js" ></script>
    <script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script>
    	function myConfirm(){
    		return confirm('将要删除数据，是否继续？');
    	}
    </script>
</head>
<body>
	
	<!-- Fixed navbar -->
		<nav class="navbar navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" 
				data-toggle="collapse" data-target="#navbar" aria-expanded="false" 
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">账单</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#">首页</a></li>
				<li><a href="/bill2/login/index">登录</a></li>
				<li><a href="/bill2/login/logout">注销[<?php echo \think\Session::get('loginId'); ?>]</a></li>
				<li><a href="/bill2/update/index">修改密码</a></li>
				<li><a href="/bill2/find/index">查看账单</a></li>
				<li><a href="#about">关于</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">菜单 <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li class="dropdown-header">Nav header</li>
					<li><a href="#">Separated link</a></li>
					<li><a href="#">One more separated link</a></li>
				  </ul>
				</li>
				<!-- <li>当前登录用户：<?php echo \think\Request::instance()->session('loginId'); ?></li> -->
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>

</body>		
</html>