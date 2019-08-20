<?php
//接收学号
$moviename = $_GET['moviename'];
//引入链接数据库的配置文件config
header( "content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','');
//选择数据库
mysql_query("use movie");
mysql_query("set names utf8");

//sql语句
$sql = "delete from movie where moviename= '{$moviename} '";
//发送sql语句
$res = mysql_query($sql);
if(!$res){
    echo "<script>alert('删除失败！');
    window.location.href='Ssearch.php';</script>";
}else{
    echo "<script>alert('删除成功！');
    window.location.href='Ssearch.php';</script>";
}

?>