<?php
header( "content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','');
//选择数据库
mysql_query("use movie");
mysql_query("set names utf8");

$Search = $_POST['search'];
$value = $_POST['select'];

//通过下拉框不同的条件查询符合条件的数据
switch ($value){
    case 1:$sql = "select * from movie where moviename='{$Search}'";
            break;
    case 2:$sql = "select * from movie where movietype='{$Search}'";
            break;
    case 3:$sql = "select * from student where Sclass='{$Search}'";
    default:
        break;
}

//发送sql语句
$res = mysql_query($sql);//结果集的资源
//转换成数据
//创一个数组来装多个数据
$rows=array();
while ($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
}
if(!$rows){
    echo "<script>alert('该条件不存在！');
    window.location.href='Ssearch.php'</script>";
}


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/layui.css" media="all">
    <link href="css/search.css" rel="stylesheet" type="text/css" />
    <script src="js/layui.all.js" charset="utf-8"></script>
</head>
<body>
<div>
    <div>
        <br>
        <br>
        <a href="Ssearch.php" class="layui-btn layui-btn-radius layui-btn-normal">后退</a>
        <br>
        <br>
    </div>
</div>
<div>

    <table align="center" class="tablelist">
        <thead>
        <tr>
            <th>影片名称</th>
            <th>影片类型</th>
            <th>影片时长</th>
            <th>上映时间</th>
            <th>海报</th>
            <th>综合评分</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <div>
            <?php foreach ($rows as $k=>$v):?>
                <tr>

                    <td><?php echo $v['moviename'];?></td>
                    <td><?php echo $v['movietype'];?></td>
                    <td><?php echo $v['movietime'];?></td>
                    <td>
                        <?php echo date("Y-m-d", strtotime($v['shangyingdate']));?>
                    </td>
                    <td><?php echo "<img src='{$v['image']}'/>"; ?></td>
                    <td><?php echo $v['score'];?></td>

                    <td><a href="edit.php?Sno=<?php echo $row['moviename'];?>" class="tablelink">查看</a>&nbsp;
                        <a href="delete.php?Sno=<?php echo $row['moviename'];?>" class="tablelink" onclick="return confirm('确认要删除吗')">删除</a></td>
                </tr>
            <?php endforeach;?>
        </div>
        </tbody>
    </table>
</div>


</body>
</html>

