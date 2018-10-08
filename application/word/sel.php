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

$sql_ly = "select * from liuyan where fromwho = '$username'";
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
            #xx{text-align: center;margin-left:300px;margin-top: 50px;}
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

        <div>
            <table align=center style='margin-top:50px;'>
                <form name="myFrom" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <tr>
                        <td>关键字</td>
                        <td><input type="text" name="keys" /></td>
                        <td><input type="submit" name="chaxun" value="查询" /></td>
                    </tr>
                </form>
            </table>
        </div>

    
   <?php
    @$key = $_POST['keys'];
    if(isset($_POST['chaxun']) && $key!= null){
    $sqlstr = "select * from liuyan where id='$key' || content='$key' || fromwho='$key' || towho='$key' || title like '%$key%'";
    $result = mysqli_query($conn,$sqlstr) or die("查找失败：".mysqli_error($conn));
    echo "<div id='xx'>";
    echo "<table cellspacing='0' cellpadding='0' border=1 size=50><tr>";
    echo "<td></td>";
    echo "<td width='60px'>"."序号"."</td>";
    echo "<td width='60px'>"."标题"."</td>";
    echo "<td width='120px'>"."留言内容"."</td>";
    echo "<td width='60px'>"."发件人"."</td>";
    echo "<td width='60px'>"."收件人"."</td>";
    echo "<td width='60px'>"."回复"."</td>";
    echo "</tr></div>";
   ?>
    <form name="delform" method="post" action="delete.php" >
        <?php
        while($show = mysqli_fetch_array($result,MYSQLI_ASSOC) ){
            $del_id = $show["id"];
            echo "<tr align=center > ";
            echo "<td><input type='checkbox' name='keyid[]' value='".$del_id."'/></td>";
            echo "<td>".$show["id"]."</td>";
            echo "<td>".$show["title"]."</td>";
            echo "<td>".$show["content"]."</td>";
            echo "<td>".$show["fromwho"]."</td>";
            echo "<td>".$show["towho"]."</td>";
            echo "<td><a href='write.php'><input type='button' value='回复'/></a></td>";
            echo "</tr>";
        }
        echo  "<tr align='center'> <td colspan=7 >";
        echo  "<input type='submit' name='shanchu' value='删除'/>";
        echo  "</td> </tr>";
        ?>
    </form>

    <?php
    echo "</table>";
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
</div>
</body>
</html>
