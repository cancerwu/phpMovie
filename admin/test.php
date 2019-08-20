<?php
ob_start();
$username = "root";
$password = "";
$hostname = "localhost";
$dbname   = "student";
$command = "D:\wamp64\bin\mysql\mysql5.7.21\bin\mysqldump --add-drop-table --host=$hostname  --user=$username ";
if ($password) $command.= "--password=". $password ." ";
$command.= $dbname;
system($command);
$dump = ob_get_contents();
ob_end_clean();
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($dbname . "_" . date("Y-m-d_H-i-s").".sql"));
flush();
echo $dump;
exit();
?>