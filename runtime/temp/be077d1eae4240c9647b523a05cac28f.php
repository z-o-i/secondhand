<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/bill2\view\add\upload.html";i:1528282641;s:68:"D:\PHP\Apache\Apache24\htdocs\tp5\application\bill2\view\layout.html";i:1527645578;}*/ ?>
<!DOCTYPE HTML>

<html lang="zh-CN">
<head>
	<title>
    上传文件
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
	

<form action="/bill2/add/upload" enctype="multipart/form-data" method="post">
<input type="file" name="image" /> <br> 
<input type="submit" value="上传" /> 
</form> 

</body>		
</html>