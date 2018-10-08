<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/m3\view\index\add.html";i:1524034311;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>新增页面</h1>
	<form action="/m3/index/create" method="post">
		<div class="form-group">
    		<label for="name">姓名</label>
    		<input type="text" id="name" name="name" class="form-control" placeholder="姓名">
  		</div>
  		<div class="form-group">
    		<label for="mobile">电话</label>
    		<input type="text" id="mobile" name="mobile" class="form-control" placeholder="电话">
  		</div>
  		<div class="form-group">
    		<label for="address">地址</label>
    		<input type="text" id="address" name="address" class="form-control" placeholder="地址">
  		</div>
  		<button type="submit" class="btn btn-default">提交</button>
  		<button type="reset" class="btn btn-default">重置</button>
	</form>
</body>
</html>