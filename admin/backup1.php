<?php
//打开服务器缓冲区
ob_start();
$hostname = "localhost";
$username = "root";
$password = "";

$dbname   = "student";
$command = "D:\wamp64\bin\mysql\mysql5.7.21\bin\mysqldump --add-drop-table --host=$hostname  --user=$username ";
if ($password)
    $command.= "--password=". $password ." ";
$command.= $dbname;
//读取库中的语句
system($command);
//获取缓冲区中的数据
$dump = ob_get_contents();
//关闭服务器的缓冲区
ob_end_clean();
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($dbname . ".sql"));
//flush();
echo $dump;
exit();
?>