<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\product\add.html";i:1535974828;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>查看购物车</h1>
<table>
    <tr>
        <td>商品名称</td>
        <td>商品单价</td>
        <td>商品数量</td>
        <td>操作</td>
    </tr>
</table>
<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
<!-- id相当于循环变量 -->
<tr>
    <td><input type="text" value="<?php echo $a['name']; ?>"></td>
    <td><input type="text" value="<?php echo $a['price']; ?>"></td>
    <td><input type="text" value="<?php echo $a['num']; ?>"></td>
    <td><input type="text" value="删除"></td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>