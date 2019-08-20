<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/graduate.css">
</head>
<body>
<form action="EvaluateSubmit.php" method="post">
    <div class="container graduate-content">
        <div class="content">
            <div class="graduate-title">
                <span>当前位置>电影评价</span>
            </div>
            <div class="sno">
                请输入电影名：
                <input type="text" id="moviename" name="moviename" style="width:200px; height: 30px"/><br/>
            </div>
            <div class="sno">
                请输入评分：
                <input type="text" id="score" name="score" style="width:200px; height: 30px"/><br/>
            </div>
            <div class="evaluate" style="width: 253px; height: 50px; height :50px; line-height:50px;">
                请输入评价内容：<textarea style="width:300px;height:50px;"  id="evaluate"  name="evaluate"></textarea><br/>
            </div>
            <div class="list1 "> <input type="submit" value="提交"  /></div>
        </div>

    </div>
</form>
</body>
</html>