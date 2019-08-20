<?php
include "../public/config.php";

$newpassword = $_POST['newpw'];
$oldpassword = $_POST['oldpw'];


session_start();
$username = $_SESSION['username1'];
//sql语句取当前用户所有信息
$sql = "select * from admin where user_name='{$username}' and pass_word='{$oldpassword}'";
//发送sql语句
$res = mysql_query($sql);
//判断有没有资源里有没有输入的用户数据
$row = mysql_num_rows($res);

if(!$row){
    echo "<script>alert('原密码错误!');
    window.location.href='Password.php';</script>";
    exit;
}else {
    $sql2 = "update admin set pass_word='{$newpassword}' where user_name ='{$username}'";
    $res2 = mysql_query($sql2);

    if(!$res2){
        echo "<script>alert('修改失败！');
    window.location.href='Password.php';</script>";
    }
    else{
        echo "<script>alert('修改成功！');
    window.location.href='Password.php   ';</script>";
    }
}



?>