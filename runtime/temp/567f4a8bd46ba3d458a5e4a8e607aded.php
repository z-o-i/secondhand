<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/bill\view\update\index.html";i:1526007520;s:67:"D:\PHP\Apache\Apache24\htdocs\tp5\application\bill\view\layout.html";i:1525259282;}*/ ?>
<!DOCTYPE HTML>

<html lang="zh-CN">
<head>
	<title>
	修改
</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="/static/bootstrap-3.3.7-dist/js/jquery.min.js" ></script>
    <script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
	

	<div class="modal fade" tabindex="-1" role="dialog" id="myModal"
		data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<!--注释（取消）掉关闭x的按钮
			<button type="button" class="close" data-dismiss="modal1" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			-->
			<h4 class="modal-title">修改密码</h4>
		  </div>
		  <form action="/bill/update/checkPwd">
		  <div class="modal-body">
		  	<div class="form-group">
				<label for="loginId">账号</label>
				<input type="text" class="form-control" id="loginId" name="loginId" value="<?php echo \think\Request::instance()->session('loginId'); ?>">
			</div>
			<div class="form-group">
				<label for="password">请输入新密码</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="请输入新密码">
			</div>
			<div class="form-group">
				<label for="checkPwd">请确认密码</label>
				<input type="password" class="form-control" id="checkPwd" 
				name="checkPwd" placeholder="请确认密码">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">关闭
			</button>
			<button type="submit" class="btn btn-primary">提交</button>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->	
	<script>
		$('#myModal').modal();
	</script>
</form>

</body>		
</html>