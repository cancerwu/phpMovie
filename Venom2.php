<?php
header( "content-type:text/html;charset=utf-8");
//连接数据库
$conn = @mysql_connect('localhost','root','');
//选择数据库
mysql_query("use movie");
mysql_query("set names utf8");

$sql1="select remain from business where moviename='毒液'";
$sql2="select balance from users order by userID='1'";

$res1 = mysql_query($sql1);
$res2 = mysql_query($sql2);
$row1 = @mysql_fetch_assoc($res1);
$row2 = @mysql_fetch_assoc($res2);
//var_dump($row1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>毒液：致命守护者</title>
</head>
<body>
<h1>毒液：致命守护者</h1>
<p>
    <img src="image/movie1.jpg" alt="Deadpool" width="200" height="300">
</p>

<script language="javascript">
    var price;
    price=20;
    var x;
    x="<?php echo $row1['remain'] ?>";
    var money;
    money="<?php echo $row2['balance']?>";
    var num;
    var i=0;
</script>

<h2>电影名称：毒液 &nbsp &nbsp &nbsp &nbsp 评分:7.2&nbsp &nbsp &nbsp &nbsp 票价：<script>document.write(price)</script>
</h2>
<h3>导演: 蒂姆·米勒</h3>
<h3>编剧: 瑞特·里斯 / 保罗·韦尼克 / 法比安·尼切扎 / 罗伯·莱菲尔德</h3>
<h3>类型：喜剧 / 动作 / 科幻 / 冒险</h3>
<h3>主演: 瑞恩·雷诺兹 / 莫蕾娜·巴卡琳 / 艾德·斯克林 / T·J·米勒 / 吉娜·卡拉诺 / ...</h3>
<h3>制片国家/地区: 美国 / 加拿大</h3>
<h3>语言: 英语 / 汉语普通话</h3>
    失去了容貌。史崔克将军把他作为失败品投入监狱折磨并继续研究，最终导致他的<br>
    出逃。死侍是个亦正亦邪的角色，他拥有超越人类的力量、耐力、速度及自我愈合<br>
    能力，精通各种武器，擅长搏击术，不过他的精神不太稳定。
</p>



<h4 id="demo1">
    剩余票数：
    <script language="javascript">document.write(x);</script>
</h4>
<h5 id="demo2">
    您的余额：
    <script language="javascript">document.write(money);</script>
</h5>
<p>
    <botton type="submit" onclick="purchase()">购票</botton>
    <script language="javascript">
        function purchase() {

            num=prompt("请问您要购买几张票?");
            if (x>=num) {
                if (money-num*price>=0) {
                    alert("您已购买了" + num + "张票");
                    x=x-num;
                    money=money-num*price;
                    //更改页面信息
                    elem1 = document.getElementById("demo1");
                    elem1.innerHTML = "剩余票数:" + x;

                    elem2 = document.getElementById("demo2");
                    elem2.innerHTML = "您的余额：" + money;
                    i=i+1;

                    <?php
/*                    $value1 = "<script>document.write(x);</script>";
                    $value2 = "<script>document.write(money);</script>";
                    mysqli_query($conn,"UPDATE business SET remain = $value1
                    WHERE moviename = '毒液'");
                    mysqli_query($conn,"UPDATE users SET balance = $value2
                    WHERE userID = '1'");
                    */?>


                }
                else
                    alert("余额不足");
            }
            else{
                alart("票数不足");
            }
        }
    </script>

</p>
</body>
</html>