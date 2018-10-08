<?php
	$conn = mysqli_connect('localhost','root','425316','liuyanpu');
	@session_start();
	@$username = $_SESSION['username'];
	$userQuery = mysqli_query($conn,"select * from yonghu where username = '$username'");
	$userArray = mysqli_fetch_assoc($userQuery);

function GetIP(){
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
        $ip = getenv("REMOTE_ADDR");
    else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
        $ip = $_SERVER['REMOTE_ADDR'];
    else
        $ip = "unknown";
    return($ip);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #main {width:1000px;height:600px;position:absolute;left:calc(50% - 500px);border:1px solid black;
            filter:alpha(opacity=50);
            -moz-opacity:0.5;
            -khtml-opacity: 0.5;
            opacity: 0.5;
            background:url(images/1.jpg);
            background-size:100%;
        }
        #top {width:1000px;border: 1px solid red;font-size: 20px;}
        #top span{margin-left: 70px;}
        a{text-decoration: none;}
        #left {margin-top: 20px;font-size: 20px;margin-left: 200px;}
    </style>
</head>
<body>
<div id="main">
    <div id="top">
        <p style="text-align: center">留言板</p>
        <a href="main.php"> <span>主页</span></a>
        <a href="register.php"> <span>注册</span></a>
        <a href="login.php"> <span>登录</span></a>
        <a href="logout.php"> <span>注销</span></a>
        <a href="write.php"> <span>写留言</span></a>
        <a href="select.php"><span>查看留言</span></a>
        <a href="sel.php"><span>留言操作</span></a>
    </div>
    <div id="left">
        <img src="images/<?php echo $userArray['face'];?>.jpg" width="100px" height="100px">
        欢迎<?php echo $userArray['username'];?>来到D&E留言板
        您的IP地址为：<?php echo GetIP();?>
    </div>
</div>
</body>
</html>