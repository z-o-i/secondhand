<?php
//声明变量
$userid = isset($_POST['userid'])?$_POST['userid']:"";
$username = isset($_POST['username'])?$_POST['username']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
$sourpass = isset($_POST['sourpass'])?$_POST['sourpass']:"";
$gender = isset($_POST['gender'])?$_POST['gender']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$qq = isset($_POST['qq'])?$_POST['qq']:"";
$face = isset($_POST['userface'])?$_POST['userface']:"";
if($password == $sourpass) {
    //建立连接
    $conn = mysqli_connect('localhost','root','425316','liuyanpu');
    //准备SQL语句,查询用户名
    $sql_select="SELECT username FROM yonghu WHERE username = '$username'";
    //执行SQL语句
    $ret = mysqli_query($conn,$sql_select);
    $row = mysqli_fetch_array($ret);
    //判断用户名是否已存在
    if($username == $row['username']) {
        //用户名已存在，显示提示信息
        header("Location:register.php?err=1");
    } else {

        //用户名不存在，插入数据
        //准备SQL语句
        $sql_insert = "INSERT INTO yonghu(userid,username,password,sourpass,gender,email,qq,face) VALUES('$userid','$username','$password','$sourpass','$gender','$email','$qq','$face')";
        //执行SQL语句
        mysqli_query($conn,$sql_insert);
        header("Location:register.php?err=3");
    }

    //关闭数据库
    mysqli_close($conn);
} else {
    header("Location:register.php?err=2");
}

?>