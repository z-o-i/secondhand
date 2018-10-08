<?php
$conn = mysqli_connect('localhost','root','425316','liuyanpu');
@session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('没有登录')</script>";   //弹出窗口
    echo "<script>location ='login.php'</script>"; //跳转到登陆页面
    exit;
}
@$username = $_SESSION['username'];
$userQuery = mysqli_query($conn,"select * from yonghu where username = '$username'");
$userArray = mysqli_fetch_assoc($userQuery);
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
            background-size:100%;}
        #top {width:1000px;border: 1px solid red;font-size: 20px;}
        #top span{margin-left: 70px;}
        a{text-decoration: none;}
        #left {margin-top: 20px;font-size: 20px;margin-left: 200px;}
        #right{width:400px;float: right;}
    </style>
</head>
<body>
<div id="main">
    <div id="top">
        <p style="text-align: center">欢迎来到留言板</p>
        <a href="main.php"> <span>主页</span></a>
        <a href="register.php"> <span>注册</span></a>
        <a href="login.php"> <span>登录</span></a>
        <a href="logout.php"> <span>注销</span></a>
        <a href="write.php"> <span>写留言</span></a>
        <a href="select.php"><span>查看留言</span></a>
        <a href="sel.php"><span>留言操作</span></a>
    </div>
    <div id="content">
        <div id="left">
            <img src="images/<?php echo $userArray['face'];?>.jpg" width="100px" height="100px">
            欢迎<?php echo $userArray['username'];?>来到D&E留言板
        </div>
        <div id="right">
            <form name="liuyan" action="liuyan.php" method="post">
                <table>

                    <tr>
                        <td>标题：</td>
                        <td><input type="text" name="title" id="title"></td>
                    </tr>
                    <tr>
                        <td>内容：</td>
                        <td><textarea name="content" rows="10" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>留言者：</td>
                        <td><input type="text" name="fromwho" id="fromwho" value="<?php echo $userArray['username']; ?>"></td>
                    </tr>
                    <tr>
                        <td>给谁留言：</td>
                        <td><input type="text" name="towho" id="towho"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" id="submit" value="提交留言"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>



