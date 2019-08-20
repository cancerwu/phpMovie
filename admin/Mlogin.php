<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/login.css"/>
</head>
<body>
<div class="login">
    <div class="content clearfix">
        <div class="content-left">
            <div class="logo">
                <img src="image/logo.jpg" width="158" height="163">
                <p>影院后台管理</p>
            </div>
        </div>
        <div class="shu"></div>
        <div class="content-right">
            <form method="post" action="Madlogin.php">
                <div class="login-form">
                    <h2>管理员登录/LOGIN</h2>
                    <div class="account clearfix">
                        <span>账　号：</span>
                        <input type="text" name="username" placeholder="请输入账号"    required />
                    </div>
                    <div class="password clearfix">
                        <span>密　码：</span>
                        <input type="password" name="password"  placeholder="请输入密码" required/>
                    </div>
                    <div class="btn">
                        <div >
                            <input type="submit" id="login" value="登录" />
                        </div>

                        <span class="forget"><a href="#">忘记密码</a></span>
                    </div>
                </div></form>
        </div>
    </div>
</div>


</body>
</html>
