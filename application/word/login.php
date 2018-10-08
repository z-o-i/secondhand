<html>
<head>
    <meta name="content-type"; charset="UTF-8">
    <title>登陆</title>
</head>
<body>
<div class="content" align="center">
    <!--头部-->
    <div class="header">
        <h1>登录页面</h1>
    </div>
    <!--中部-->
    <div class="middle">
        <form id="loginform" action="loginaction.php" method="post">
            <table border="0">
                <tr>
                    <td>用户名：</td>
                    <td>
                        <input type="text" id="name" name="username" required="required"
                               value="<?php echo isset($_COOKIE["wang"])?$_COOKIE["wang"]:"";?>">
                    </td>
                </tr>
                <tr>
                    <td>密码：</td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <!--提示信息-->
                        <?php
                        $err=isset($_GET["err"])?$_GET["err"]:"";
                        switch($err) {
                            case 1:
                                echo "用户名或密码错误！";
                                break;
                            case 2:
                                echo "用户名或密码不能为空！";
                                break;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" id="login" name="login" value="登录">
                        <input type="reset" id="reset" name="reset" value="重置">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        还没有账号，快去<a href="register.php">注册</a>吧！
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>