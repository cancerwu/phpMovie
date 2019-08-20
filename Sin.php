<?php
session_start();
header("Content-type:text/html ;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";


// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

mysqli_query($conn,"set names utf8");

$moviename= $_POST['moviename'];
$movietype= $_POST['movietype'];
$movietime= $_POST['movietime'];
$shangyingdate= $_POST['shangyingdate'];



$sql = "INSERT INTO movie(moviename,movietype,movietime,shangyingdate)
VALUES('{$moviename}','{$movietype}','{$movietime}','{$shangyingdate}')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('上架成功！');
    window.location.href='Sinformation2.php';</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>