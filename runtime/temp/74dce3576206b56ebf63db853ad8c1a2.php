<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/bill2\view\find\index.html";i:1528245729;s:68:"D:\PHP\Apache\Apache24\htdocs\tp5\application\bill2\view\layout.html";i:1527645578;}*/ ?>
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
	
	<h1>查看账单</h1>
	<table>
		<tr>
			<td>编号</td>
			<td>种类</td>
			<td>价格</td>
			<td>创建日期</td>
			<td>删除</td>
			<td>修改</td>
		</tr>
		<?php if(is_array($bill) || $bill instanceof \think\Collection || $bill instanceof \think\Paginator): $i = 0; $__LIST__ = $bill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
		<!-- id相当于循环变量 -->
		<tr>
			<td><input type="text" value="<?php echo $a['id']; ?>"></td>
			<td><input type="text" value="<?php echo $a['kinds']; ?>"></td>
			<td><input type="text" value="<?php echo $a['price']; ?>"></td>
			<td><input type="text" value="<?php echo date("Y-m-d",$a['logDate']); ?>"></td>
			<td>
				<a href="/bill2/delete/index?id=<?php echo $a['id']; ?>" onclick="return myConfirm()">
					<button type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-remove"></span>
					</button>
				</a>
			</td>
			<td><a href="/bill2/delete/edit?id=<?php echo $a['id']; ?>">修改</a></td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<a href="/bill2/index">返回页面</a>
		<br>
		<a href="/bill2/add/index">新增记录</a>
	</table>

</body>		
</html>