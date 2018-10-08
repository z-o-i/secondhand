<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/m3\view\index\register.html";i:1523838879;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="/static/bootstrap-3.3.7-dist/jquery/jquery.slim.min.js" ></script>
    <script src="/static/bootstrap-3.3.7-dist/jquery/popper.min.js" ></script>
    <script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
		body{background:#9DE8DD}
		#Login{width:400px;height:300px;1border:1px solid red;position:absolute;left:50%;top:50%;margin:-150px -250px;background:#FFFFFF;border-radius:25px;}
		#Login p{font-size:20px;font-family:黑体;}
		#userName{width:250px;border-radius:25px;margin:0 auto;}
		#tel{width:250px;margin-top:50px;border-radius:25px;margin:0 auto;}
		#ad{width:250px;border-radius:25px;margin:0 auto;}
		#register{width:60px;margin-top:50px;border-radius:25px;margin:20px 100px;float:left;}
		#log{width:60px;border-radius:25px;margin:-55px 100px;float:right;}
		#Login p{margin-top: 10px;}
	</style>
</head>
<body>
	<div id="main">
		<form action="/m3/index/create">
		<div id="Login">
			<p class="text-center">用户注册</p>
            <input type="text" class="form-control" placeholder="姓名" name="name" id="userName" style="margin-top:50px;">
            <input type="text" class="form-control" placeholder="电话" name="mobile" id="tel" style="margin-top:10px;">
            <input type="text" class="form-control" placeholder="地址" name="address" id="ad" style="margin-top:10px;">
            <input type="submit" name="register" value="注册" id="register"  class="btn btn-default">
            <input type="button" name="log" value="登录" id="log"  class="btn btn-default">
            
		</div>
	</form>
	</div>
	
</body>
<ml>