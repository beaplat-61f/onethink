<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<title>游戏分类</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="/Public/Home/css/game/style.css" rel="stylesheet" media="screen">


    <link rel="stylesheet" href="/Public/Home/css/game/cate.css">


<script src="/Public/static/jquery-2.0.3.min.js" type="text/javascript"></script>

<script src="/Public/Home/js/game/swiper-2.0.min.js" type="text/javascript"></script>

<script src="/Public/Home/js/game/common.js" type="text/javascript"></script>

<script language="javascript">

    $(document).ready(function(){
        var mySwiper = new Swiper('.index-banner',{

            pagination: '.index-pagination',

            loop:true,

            grabCursor: true,

            paginationClickable: true,

            onSlideChangeEnd : function() {

                var bannerTitle = $(".index-banner ul li.swiper-slide-active img").attr("title");

                $(".banner-title p").text(bannerTitle);

            }

        })

        var bannerFstTitle = $(".index-banner ul li.swiper-slide-active img").attr("title");

        $(".banner-title p").text(bannerFstTitle);



        fjcHeight();

        fontSizeHack();

        $(".index-banner ul li img").show();



    })

</script>
</head>
<body>
    <!--main start-->
    <div class="main">
    

        <div class="header">

            <span id="menu">导航</span>

            <div id="guide">

                <ul>

                    <li><a href="index.html">首页</a></li>

                    <li><a href="android/danji.html">单机</a></li>

                    <li><a href="android/danji.html">网游</a></li>

                    <li><a href="android/danji.html">应用</a></li>

                    <li><a href="android/danji.html">攻略</a></li>

                    <li><a href="android/danji.html">资讯</a></li>

                </ul>

            </div>

            <a class="search" href="index.html">搜索</a>

            <img class="logo" src="/Public/Home/images/game/logo.png">

        </div>
    
    
    <a href="/">首页</a> &gt; 游戏分类
    <hr>

    <div class="list">
    <ul>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                <a href="/index.php?s=/Home/GameCategory/allGames/cateId/<?php echo ($data["id"]); ?>">
                    <img src="<?php echo (get_cover($data["icon"],'path')); ?>" alt="<?php echo ($data["name"]); ?>" class="radius img-responsive">
                    <?php echo ($data["name"]); ?>
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>

        <div class="clear"></div>
    </ul>
    </div>

    <!--<div class="bottom"></div>-->

</div>
    <!--main end-->

    <!--footer start-->
    <p class="footer"><a href="default.htm">手机版</a><a id="return" href="javascript:void(0)" onClick="scroll(0,0)">回顶部</a>
    更多>><a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
</p>
    <!--footer end-->
</body>
</html>