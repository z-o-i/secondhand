<?php
//判断有没有登陆
@session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('没有登录')</script>";   //弹出窗口
    echo "<script>location ='login.php'</script>"; //跳转到登陆页面
    exit;
}
$conn = mysqli_connect('localhost','root','425316','liuyanpu');
$ip = $_SERVER['REMOTE_ADDR'];
@session_start();
@$username = $_SESSION['username'];
$userQuery = mysqli_query($conn,"select * from yonghu where username = '$username'");
$userArray = mysqli_fetch_assoc($userQuery);//作为一个关联数组

$sql_ly = "select * from liuyan where fromwho = '$username' || towho = '$username'";
$query = mysqli_query($conn,$sql_ly);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
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
        #xx{margin-left: 300px;margin-top: 50px;}
    </style>
</head>
<body>
<div id="main">
    <div id="top">
        <p style="text-align: center">D&E虐狗小分队</p>
        <a href="main.php"> <span>主页</span></a>
        <a href="register.php"> <span>注册</span></a>
        <a href="login.php"> <span>登录</span></a>
        <a href="logout.php"> <span>注销</span></a>
        <a href="write.php"> <span>写留言</span></a>
        <a href="select.php"><span>查看留言</span></a>
        <a href="sel.php"><span>留言操作</span></a>
    </div>
    <div id="xx">
        <table border="1" cellspacing="0" cellpadding="0">
            <tr>
                <td width="60px">序号</td>
                <td width="60px">标题</td>
                <td width="120px">留言内容</td>
                <td width="60px">发件人</td>
                <td width="60px">收件人</td>
                <td width="120px">留言时间</td>
            </tr>
            <!-- 开始while循环 -->
            <?php while ($query_row = mysqli_fetch_assoc($query)):?>
                <tr>
                    <td><?php echo $query_row['id']?></td>
                    <td><?php echo $query_row['title']?></td>
                    <td><?php echo $query_row['content']?></td>
                    <td><?php echo $query_row['fromwho']?></td>
                    <td><?php echo $query_row['towho']?></td>
                    <td><?php echo $query_row['time']?></td>
                </tr>
            <?php endwhile;?>
            <!-- 结束while循环 -->
        </table>
    </div>
</div>
</body>
</html>