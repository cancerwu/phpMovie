<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/password.css">
</head>
<body>
<div class="container information-content">
    <div class="content">
        <div class="information-title">
            <span>当前位置>修改密码</span>
        </div>
        <div class="revise-content  ">


            <form action="pswupdate.php" method="post">
                <div>原始密码： <input type="password"  name="oldpw" id="pw" required/></div>
                <div>输入密码： <input type="password"  name="newpw" id="pw1" required/></div>
                <div>确认密码： <input type="password"  id="pw2" onkeyup="validate()" required/><span id="tishi"></span></div>
                <div class="list1"><input type="submit" value="提交" id="submit"/><br/><br/>
                    <input type="reset" value="重置"/></div>
            </form>

            <script>
                function validate() {
                    var pw1 = document.getElementById("pw1").value;
                    var pw2 = document.getElementById("pw2").value;
                    if(pw1 == pw2) {
                        document.getElementById("tishi").innerHTML="<font color='green'>密码相同</font>";
                        document.getElementById("submit").disabled = false;
                    }
                    else {
                        document.getElementById("tishi").innerHTML="<font color='red'>密码不相同</font>";
                        document.getElementById("submit").disabled = true;
                    }
                }
            </script>

        </div>

    </div>

</div>


</body>
</html>