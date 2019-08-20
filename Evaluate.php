<?php
session_start();
header("Content-type:text/html ;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";


// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

mysqli_query($conn,"set names utf8");

$sno= $_POST['sno'];
$gradeuatelv= $_POST['gradeuatelv'];
$evaluate= $_POST['evaluate'];


$sql = "INSERT INTO sevaluate(sno,gradeuatelv,evaluate)
VALUES('{$sno}','{$gradeuatelv}','{$evaluate}')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('提交成功！');
    window.location.href='SGraduate.php';</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>