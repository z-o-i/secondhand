<?php
Header('content_type=html/text charset=UTF8');
$conn = mysqli_connect('localhost','root','425316','liuyanpu');
date_default_timezone_set("Asia/Shanghai");
echo "<title>留言信息写入表</title>";
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('请登录')</script>";   //弹出窗口
    echo "<script>location ='login.php'</script>"; //跳转到登陆页面
    exit;
}

$title = $_POST['title'];
$content = $_POST['content'];
$fromwho = $_POST['fromwho'];
$towho = $_POST['towho'];

$sqlstr = "insert into liuyan (title,content,fromwho,towho,time) values('$title','$content','$fromwho','$towho',now())";
//判断错误
$result = mysqli_query($conn,$sqlstr)or die('执行语句有误').mysqli_error();
$n = mysqli_affected_rows($conn);
if($n){
    echo "<script>alert('留言成功')</script>";
    echo "<script>location='select.php'</script>";
}
else
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
mysqli_close($conn);
?>