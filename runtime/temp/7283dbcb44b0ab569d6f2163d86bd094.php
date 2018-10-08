<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/bill2\view\delete\edit.html";i:1528073445;s:68:"D:\PHP\Apache\Apache24\htdocs\tp5\application\bill2\view\layout.html";i:1527645578;}*/ ?>
<!DOCTYPE HTML>

<html lang="zh-CN">
<head>
	<title>
	修改账单
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
	
	<div class="modal fade" tabindex="-1" role="dialog" id="myModal"
		data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<!--注释（取消）掉关闭x的按钮
			<button type="button" class="close" data-dismiss="modal1" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			-->
			<h4 class="modal-title">修改</h4>
		  </div>
		  <form action="/bill2/delete/update" method="post">
		  <div class="modal-body">
			<div class="form-group">
				<label for="kinds">类别</label>
				<input type="text" class="form-control" id="kinds" name="kinds" value=<?php echo $bill['kinds']; ?>>
			</div>
			<div class="form-group">
				<label for="price">金额</label>
				<input type="text" class="form-control" id="price" 
				name="price" value=<?php echo $bill['price']; ?>>
			</div>
			<input type="hidden" name="id" id="id" value=<?php echo $bill['id']; ?>>
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

</body>		
</html>