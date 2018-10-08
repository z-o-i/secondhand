<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/m4\view\index\show.html";i:1524619188;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="/static/bootstrap-3.3.7-dist/jquery/jquery.slim.min.js" ></script>
    <script src="/static/bootstrap-3.3.7-dist/jquery/popper.min.js" ></script>
    <script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script>
    	function myConfirm(){
    		return confirm("确认删除数据?");
    	}
    </script>
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>姓名</td>
			<td>删除</td>
			<td>修改</td>
		</tr>
		<?php if(is_array($Zy) || $Zy instanceof \think\Collection || $Zy instanceof \think\Paginator): $i = 0; $__LIST__ = $Zy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
		<tr>
			<td><?php echo $a['id']; ?></td>
			<td><?php echo $a['name']; ?></td>
			<td>
				<a href="/m4/index/delete?id=<?php echo $a['id']; ?>" onclick="return myConfirm()">
					<button class="btn btn-default" type="button">
						<span class="glyphicon glyphicon-remove"></span>
					</button>
				</a>
			</td>
			<td><a href="/m4/index/edit1?id=<?php echo $a['id']; ?>">修改</a></td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</body>
</html>