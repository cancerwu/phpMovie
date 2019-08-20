<?php
include "public/config.php";

$Sno = $_POST['Sno'];
$sql="select student.* , grade.* from student,grade where student.Sno=grade.Sno and student.Sno='{$Sno}'";
//发送sql语句
$res = mysql_query($sql);//结果集的资源
//转换成数据

$rows = array();
while ($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
}

$result = empty($rows);
if($result){
    echo "<script>alert('该学生无录入成绩！');
    window.location.href='Gsearch.php'</script>";
}
//var_dump($row);
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link href="css/search.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div>
    <div>
        <br>
        <a href="Gsearch.php" class="tablelink">后退</a>
        <br>
    </div>
</div>
<div>

    <table align="center" class="tablelist">
        <thead>
        <tr>
            <th></th>
            <th>学号</th>
            <th>姓名</th>
            <th>专业</th>
            <th>班级</th>
            <th>学科</th>
            <th>成绩</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <div>
            <?php foreach ($rows as $k=>$v):?>
                <tr>
                    <td><input name="checkItem" type="checkbox" value="" /></td>
                    <td><?php echo $v['Sno'];?></td>
                    <td><?php echo $v['Sname'];?></td>
                    <td><?php echo $v['Sdept'];?></td>
                    <td><?php echo $v['Sclass'];?></td>
                    <td><?php echo $v['Scourse'];?></td>
                    <td><?php echo $v['Sgrade'];?></td>
                    <td><a href="Gdelete.php?Sno=<?php echo $v['Sno'];?>" class="tablelink" onclick="return confirm('确认要删除吗')">删除</a></td>
                </tr>
            <?php endforeach;?>

        </div>
        </tbody>
    </table>
</div>
</body>
</html>

