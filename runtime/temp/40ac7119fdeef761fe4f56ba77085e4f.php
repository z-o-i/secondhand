<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/m4\view\index\showall.html";i:1523411060;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>user</h1>
	<table>
		<tr>
			<td>id</td>
			<td>姓名</td>
		</tr>
		<?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?>
		<!-- id相当于循环变量 -->
		<tr>
			<td><?php echo $l['id']; ?></td>
			<td><?php echo $l['name']; ?></td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</body>
</html>