<?php
header( "content-type:text/html;charset=utf-8");
//连接数据库
$conn = @mysql_connect('localhost','root','');
//选择数据库
mysql_query("use movie");
mysql_query("set names utf8");
$sql="select * from movie order by movieID ";
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
<form action="Ssearchid.php" name="myform" method="post" >
    <ul color="#FFB800" class="seachform">
        <li>
            <div>
                <select name="select">
                    <option value="1">电影名称</option>
                    <option value="2">电影类别</option>
                </select>
            </div>
        </li>
        <li>
            <input type="text" class="scinput" id="username" name="search"  required />
        </li>
        <li>
            <input  type="submit" class="layui-btn layui-btn-radius layui-btn-normal" value="查询" />
        </li>
    </ul>
</form>
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

            <td><a href="Venom2.php" class="layui-btn layui-btn-xs layui-btn-normal">查看</a>&nbsp;
                <a href="ScoreAndEvaluate.php" class="layui-btn layui-btn-xs layui-btn-normal">评价</a>&nbsp;
                </td>
        </tr>
            <?php endforeach;?>
        </div>
        </tbody>
    </table>
</div>







</body>
</html>
