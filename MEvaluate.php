
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/graduate.css">
</head>
<body>
<form action="movienameSubmit.php" method="post">
    <div class="container graduate-content">
        <div class="content">
            <div class="graduate-title">
                <span>当前位置>电影评价</span>
            </div>
            <div class="sno">
                请输入待评价电影名称：
                <input type="text" id="sno" name="movie" style="width:200px; height: 30px"/><br/>
            </div>


            <div class="list1 "> <input type="submit" formaction="ScoreAndEvaluate.php" value="确定" name="username"/></div>
        </div>

    </div>
</form>
</body>
</html>