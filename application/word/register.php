<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
<div class="content" align="center">
    <!--头部-->
    <div class="header">
        <h1>注册页面</h1>
    </div>
    <!--中部-->
    <div class="middle">
        <form action="registeraction.php" method="post">
            <table border="0">
                <tr>
                    <td>用户ID：</td>
                    <td><input type="text" id="userid" name="userid" required="required"></td>
                </tr>
                <tr>
                    <td>用户名：</td>
                    <td><input type="text" id="username" name="username" required="required"></td>
                </tr>
                <tr>
                    <td>密&nbsp;&nbsp;&nbsp;码：</td>
                    <td><input type="password" id="password" name="password" required="required"></td>
                </tr>
                <tr>
                    <td>重复密码：</td>
                    <td><input type="password" id="sourpass" name="sourpass" required="required"></td>
                </tr>
                <tr>
                    <td>性别：</td>
                    <td>
                        <input type="radio" id="gender" name="gender" value="男">男
                        <input type="radio" id="gender" name="gender" value="女">女
                    </td>
                </tr>
                <tr>
                    <td>Email：</td>
                    <td><input type="email" id="email" name="email" required="required"></td>
                </tr>
                <tr>
                    <td>QQ：</td>
                    <td><input type="text" id="qq" name="qq" required="required"></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>选择头像</td>
                    <td>
                    <img id="imageFace" src="images/1.jpg" width="100" height="100">
                    <select name="userface"  size="1"   onchange="document.images['imageFace'].src='images/'+ options[selectedIndex].value+ '.jpg';">
                        <?php
                        for($i=1;$i<=4;$i++)
                            echo  "<option value='$i'> 头像-$i </option>";
                        ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <!--提示信息-->
                        <?php
                        $err=isset($_GET["err"])?$_GET["err"]:"";
                        switch($err) {
                            case 1:
                                echo "用户名已存在！";
                                break;
                            case 2:
                                echo "注册失败";
                                break;
                            case 3:
                                echo "注册成功！";
                                break;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" id="register" name="register" value="注册">
                        <input type="reset" id="reset" name="reset" value="重置">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        如果已有账号，快去<a href="login.php">登录</a>吧！
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>