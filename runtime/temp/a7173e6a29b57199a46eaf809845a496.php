<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/m3\view\index\edit.html";i:1524655710;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
  <h1>编辑</h1>
  <form action="/m3/index/update" method="post">
  <div class="form-group">
    <label for="name">姓名</label>
    <input type="text" name="name" id="name" class="form-control" value="<?php echo $users['name']; ?>">
  </div>
  <div class="form-group">
    <label for="mobile">电话</label>
    <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $users['mobile']; ?>">
  </div>
  <div class="form-group">
    <label for="address">地址</label>
    <input type="text" name="address" id="address" class="form-control" value="<?php echo $users['address']; ?>">
  </div>
  <button type="rest" class="btn btn-default">重置</button>
  <button type="submit" class="btn btn-default">提交</button>
  <input type="hidden" name="id" id="id" value="<?php echo $users['id']; ?>">
  </form>
</body>
</html>