<?php
header("Content-type:text/html;charset=utf-8");
//接受数据
$username = $_POST['username'];
$password = $_POST['password'];
session_start();
$_SESSION['username1'] = $username;
//验证是否正确
//连接数据库
$conn = @mysql_connect('localhost','root','');
//选择数据库
@mysql_query("use student");
//设置编码
@mysql_query("set names utf8");
//sql语句取当前用户所有信息
$sql = "select * from admin where user_name='{$username}' and pass_word='{$password}'";
//发送sql语句
$res = @mysql_query($sql);
//判断有没有资源里有没有输入的用户数据
$row = @mysql_num_rows($res);
if(!$row){
    echo "<script>alert('用户名或密码错误!');
    window.location.href='login.php';</script>";
    exit;
}else {
    echo "<script>alert('登录成功!');
    window.location.href='../Mindex.php';</script>";
}


?>