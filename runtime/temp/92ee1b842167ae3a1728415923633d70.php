<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/m3\view\index\showall.html";i:1524621606;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	<h1>user</h1>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>id</td>
			<td>姓名</td>
			<td>电话</td>
			<td>地址</td>
			<td>删除</td>
			<td>修改</td>
		</tr>
		<?php if(is_array($users) || $users instanceof \think\Collection || $users instanceof \think\Paginator): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
		<!-- id相当于循环变量 -->
		<tr>
			<td><input type="text" value="<?php echo $a['id']; ?>"></td>
			<td><input type="text" value="<?php echo $a['name']; ?>"></td>
			<td><input type="text" value="<?php echo $a['mobile']; ?>"></td>
			<td><input type="text" value="<?php echo $a['address']; ?>"></td>
			<td>
				<a href="/m3/index/delete?id=<?php echo $a['id']; ?>" onclick="return myConfirm()">
					<button type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-remove"></span>
					</button>
				</a>
			</td>
			<td><a href="/m3/index/edit?id=<?php echo $a['id']; ?>">修改</a></td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</body>
</html>