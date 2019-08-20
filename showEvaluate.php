<?php
header( "content-type:text/html;charset=utf-8");
//连接数据库
$conn = @mysql_connect('localhost','root','');
//选择数据库
mysql_query("use movie");
mysql_query("set names utf8");
$sql="select * from evaluate  ";
//发送sql语句
$res = mysql_query($sql);//结果集的资源
//转换成数据
$rows = array();
while ($row = @mysql_fetch_assoc($res)){
    $rows[] = $row;
}
//var_dump($rows);
?>




<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link href="css/search.css" rel="stylesheet" type="text/css" />
    <link href="css/layui.css" rel="stylesheet" type="text/css" />

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
            <th>评分</th>
            <th>评价内容</th>
        </tr>
        </thead>
        <tbody>
        <div>
            <?php foreach ($rows as $k=>$v):?>
                <tr>
                    <td><?php echo $v['moviename'];?></td>
                    <td><?php echo $v['score'];?></td>
                    <td><?php echo $v['evaluate'];?></td>

                </tr>
            <?php endforeach;?>
        </div>
        </tbody>
    </table>
</div>







</body>
</html>
