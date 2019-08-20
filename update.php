<?php
include "public/config.php";

$Sno = $_POST['Sno'];
$Sname =$_POST['Sname'];
$Sage =$_POST['Sage'];
$Ssex =$_POST['Ssex'];
$Sdept=$_POST['Sdept'];
$Sclass=$_POST['Sclass'];
@$Senter=$_POST['Senter'];
@$Sgraduate=$_POST['Sgraduate'];

//数据验证（是不是需要的数据或者有没有用或者是否存在）
if($Sno == ''||$Sname==''||$Sage==''||$Ssex==''||$Sdept==''||$Sclass=='') {
    echo "<script>alert('请将信息填写完整！');
    window.location.href='edit.php?Sno='+$Sno;</script>";
}
$sql = "update student set Sname='{$Sname}',Sage='{$Sage}',Ssex='{$Ssex}',Sdept='{$Sdept}',Sclass='{$Sclass}' where Sno='{$Sno}'";
//发送sql语句
$res = mysql_query($sql);
if(!$res){
    echo "<script>alert('修改失败！');
    window.location.href='edit.php?Sno='+$Sno;</script>";
}
else{
    echo "<script>alert('修改成功！');
    window.location.href='Ssearch.php   ';</script>";
}
?>