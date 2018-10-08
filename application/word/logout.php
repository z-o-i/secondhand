

<?php
/*
//开启session
session_start();
//撤销session
session_unset();
session_destroy();
//跳转到login.php
header("Location:login.php");
*/
session_start();
if(!isset($_SESSION['username'])){
    //判断用户有没有登陆
    echo "<script>alert('没有登录')</script>";   //弹出警告框
    echo "<script>location ='login.php'</script>"; //跳转到登陆页面
    exit;
}

$_SESSION['username'] = null;
echo "<script>alert('注销成功')</script>";
echo "<script>location ='main.php'</script>";
?>
