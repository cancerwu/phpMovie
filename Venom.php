<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>毒液</title>
</head>
<body>
<h1>毒液：致命守护者</h1>
<p>
    <img src="image/movie1.jpg" alt="Venom" width="200" height="300">
</p>

<script language="javascript">
    var price;
    price=42;
    var x;
    x = 16;
    var money;
    money=90;
    var num;
</script>

<h2>电影名称：毒液 &nbsp &nbsp &nbsp &nbsp 评分:7.2&nbsp &nbsp &nbsp &nbsp 票价：<script>document.write(price)</script></h2>

<h3>导演: 鲁本·弗雷斯彻</h3>
<h3>编剧: 杰夫·皮克纳 / 斯科特·罗森伯格 / 凯莉·马塞尔 / 托德·麦克法兰 / 戴维·麦克法兰</h3>
<h3>类型：动作 / 科幻 / 惊悚</h3>
<h3>主演: 汤姆·哈迪 / 米歇尔·威廉姆斯 / 里兹·阿迈德 / 斯科特·黑兹 / 瑞德·斯科特 / ...</h3>
<h3>制片国家/地区: 美国 / 中国大陆</h3>
<h3>语言: 英语 / 汉语普通话</h3>
<h3>片长: 112分钟 / 107分钟(中国大陆)</h3>
<p>
    剧情简介：
    艾迪（汤姆·哈迪 Tom Hardy 饰）是一位深受观众喜爱的新闻记者，和<br>
    女友安妮（米歇尔·威廉姆斯 Michelle Williams 饰）相恋多年，彼此<br>
    之间感情十分要好。安妮是一名律师，接手了生命基金会的案件，在女友<br>
    的邮箱里，艾迪发现了基金会老板德雷克（里兹·阿迈德 Riz Ahmed 饰）<br>
    不为人知的秘密。为此，艾迪不仅丢了工作，女友也离他而去。<br>
    &nbsp&nbsp&nbsp&nbsp之后，生命基金会的朵拉博士（珍妮·斯蕾特 Jenny Slate 饰）找到<br>
    了艾迪，希望艾迪能够帮助她阻止德雷克疯狂的罪行。在生命基金会的实验<br>
    室里，艾迪发现了德雷克进行人体实验的证据，并且在误打误撞之中被外星<br>
    生命体毒液附身。回到家后，艾迪和毒液之间形成了共生关系，他们要应对<br>
    的是德雷克派出的一波又一波杀手。
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
    <botton type="button" onclick="purchase()">购票</botton>
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
                    elem1.innerHTML = "剩余票数："+x;

                    elem2 = document.getElementById("demo2");
                    elem2.innerHTML = "您的余额："+money;
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