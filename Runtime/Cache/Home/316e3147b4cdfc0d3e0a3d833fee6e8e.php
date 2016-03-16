<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<title>手机游戏免费下载触屏版自适应手机wap软件网站模板下载</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="/Public/Home/css/game/style.css" rel="stylesheet" media="screen">



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
    
    <div class="back_nav">

        <a class="back" href="javascript:;" onclick="history.go(-1)">返回</a>

        <span id="menu">导航</span>

        <div id="guide">

            <ul>

                <li><a href="../index.html">首页</a></li>

                <li><a href="danji.html">单机</a></li>

                <li><a href="danji.html">网游</a></li>

                <li><a href="danji.html">应用</a></li>

                <li><a href="danji.html">攻略</a></li>

                <li><a href="danji.html">资讯</a></li>

            </ul>

        </div>

    </div>

    

    <dl class="game_detail">

        <dt>

            <img src="<?php echo (get_cover($game["icon"],'path')); ?>" alt="<?php echo ($game["name"]); ?>">
            <a href="<?php echo ($game["download_url"]); ?>" class="btn_down">下载</a>

        </dt>

        <dd class="title"><?php echo ($game["name"]); ?></dd>

        <dd><span class="star"><i style="width:99%"></i></span><span class="score">9.9分</span><span class="ping">(已有1人评分)</span>
        </dd>

        <dd>大小：155.1 MB</dd>

        <dd>更新：2014-08-12</dd>

        <dd>当前版本：<?php echo ($game["version"]); ?></dd>

        <dd>人气：6</dd>

    </dl>

    <div id="game_img">

        <h3>游戏截图</h3>

        <div class="swiper-container">

            <div class="swiper-wrapper">
                <?php if(is_array($game["thumb"])): $i = 0; $__LIST__ = $game["thumb"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$thumb): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
                        <img src="<?php echo (get_cover($thumb,'path')); ?>" alt="">
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>

    </div>

    <div class="profile">

        <h3>内容提要</h3>

        <p><?php echo ($game["description"]); ?></p>

    </div>

    <div class="container gamerec">

        <div class="hd">

            <a class="more" href="#">更多</a>

            <h3>游戏推荐</h3>

        </div>

        <ul class="gamelist">

            <li>

                <a href="12234.html"><img src="../upload/1397724791.jpg" alt="掌上炸翻天"></a>

                <h3><a href="12234.html">万人炸金花</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1405574802.jpg" alt="女神斗地主"></a>

                <h3><a href="12234.html">女神斗地主</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1407122236.jpg" alt="天天爱闯关"></a>

                <h3><a href="12234.html">天天爱闯关</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1403165654.jpg" alt="嘉米麻将"></a>

                <h3><a href="12234.html">嘉米麻将</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1403920246.jpg" alt="万人斗地主"></a>

                <h3><a href="12234.html">万人斗地主</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1407480562.jpg" alt="吸血鬼日记"></a>

                <h3><a href="12234.html">吸血鬼日记</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1399441026.jpg" alt="3D狂野飞车"></a>

                <h3><a href="12234.html">3D狂野飞车</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1407317142.jpg" alt="天天美女"></a>

                <h3><a href="12234.html">天天美女</a></h3>

            </li>

            <li>

                <a href="12234.html"><img src="../upload/1396605515.jpg" alt="来自星星的僵尸"></a>

                <h3><a href="12234.html">来自星星的僵尸</a></h3>

            </li>


        </ul>

    </div>

<script>

    var mySwiper = new Swiper('.swiper-container', {

        pagination: '.pagination',

        paginationClickable: true,

        slidesPerView: 'auto'

    })

</script>

</div>
    <!--main end-->

    <!--footer start-->
    <p class="footer"><a href="default.htm">手机版</a><a id="return" href="javascript:void(0)" onClick="scroll(0,0)">回顶部</a>
    更多>><a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
</p>
    <!--footer end-->
</body>
</html>