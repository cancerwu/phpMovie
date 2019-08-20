<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>carousel模块快速使用</title>
    <link rel="stylesheet" href="css/layui.css" media="all">
</head>
<body>

<div class="layui-carousel" id="test1">
    <div carousel-item>
        <div><img src="image/movie1.png"></div>
        <div><img src="image/movie2.png"></div>
        <div><img src="image/movie3.png"></div>
        <div><img src="image/movie4.png"></div>
        <div><img src="image/movie5.png"></div>
    </div>
</div>


<script src="js/layui.all.js"></script>
<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test1'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
            ,interval: 1000
        });
    });
</script>
</body>
</html>