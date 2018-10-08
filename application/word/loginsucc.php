<html>
<head>
    <meta name="content-type"; charset="UTF-8">
    <title>登陆成功</title>
</head>
<body>
<div>
    <?php
    //开启session
    @ session_start();
    //声明变量
    $username= isset($_SESSION['username'])?$_SESSION['username']:"";
    //判断session是否为空
    if(!empty($username)){
        ?>
        <h1>登录成功！</h1>
        欢迎您！
        <?php
        echo $username;
        ?>
        <br/>
        <a href="main.php">回到主页</a>

        <?php
    }else {
        //未登录，无权访问
        ?>
        <h1>你无权访问！！！</h1>
        <?php
    }
    ?>
</div>
</body>
</html>