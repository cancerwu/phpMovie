<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/main.css" >
    <link rel="stylesheet" href="css/information.css">

</head>
<body>
<div class="school-msg">
    <div class="pos-set wrap">
        <span>当前位置>上架电影</span>
    </div>
    <div class="basics-msg">
        <p>基础信息</p>
    </div>
    <form action="Sin.php" method="post" class="basics-list">
        <ul class="clearfix">

            <li>
                <label for="1">电影名称 :</label>
                <div class="inp-border">
                    <input type="text" name="moviename" value="" id="2">
                </div>
            </li>
            <li>
                <label for="2">电影类型 :</label>
                <div class="inp-border">
                    <input type="text" name="movietype" value="" id="3">
                </div>
            </li>
            <li>
                <label for="3">电影时长 :</label>
                <div class="inp-border">
                    <input type="text" name="movietime" value="" id="4">
                </div>
            </li>

            <li>
                <label for="4">上映时间:</label>
                <div class="inp-border">
                    <input type="date" name="shangyingdate" value="" id="5">
                </div>
            </li>

        </ul>
        <input type="submit" id="keep" style="margin-left: 300px" value="保存"/>
    </form>
</div>

</body>
</html>