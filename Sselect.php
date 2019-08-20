<?php
$Sno = $_POST['Sno'];
//引入链接数据库的配置文件config
include"public/config.php";

$sql = "select Sno from student where Sno='{$Sno}'";

$res = mysql_query($sql);

$row  = mysql_num_rows($res);

if(!$row){
    echo "<script>alert('没有该学生学号!');
    window.location.href='Ssearch.php';</script>";
    exit;
}else {
    echo "<script>window.location.href='Sinformation2.php';</script>";
}
?>