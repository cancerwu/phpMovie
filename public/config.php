<?php

header( "content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','');
//选择数据库
mysql_query("use student");
mysql_query("set names utf8");

?>