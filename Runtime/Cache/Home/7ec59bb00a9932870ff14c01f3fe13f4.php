<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<title>手机游戏免费下载触屏版自适应手机wap软件网站模板下载</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="/Public/Home/css/game/style.css" rel="stylesheet" media="screen">


<style>
    /*阿里巴巴字库*/
    @font-face {
    font-family: 'iconfont';
    src: url('//at.alicdn.com/t/font_1458116937_0631251.eot'); /* IE9*/
    src: url('//at.alicdn.com/t/font_1458116937_0631251.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('//at.alicdn.com/t/font_1458116937_0631251.woff') format('woff'), /* chrome、firefox */
    url('//at.alicdn.com/t/font_1458116937_0631251.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('//at.alicdn.com/t/font_1458116937_0631251.svg#iconfont') format('svg'); /* iOS 4.1- */
    }
    .iconfont{font-family:"iconfont";
        font-size:16px;font-style:normal;}
</style>

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
    
    
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h2><?php echo ($info["title"]); ?></h2>
            <p>
				<span  class="pull-left">
					<span class="author"><?php echo (get_username($info["uid"])); ?></span>
					<span> 发表于 <?php echo (date('Y-m-d H:i',$info["create_time"])); ?></span>
				</span>
				<span class="pull-right">
					<?php $prev = D('Document')->prev($info); if(!empty($prev)): ?><a href="<?php echo U('?id='.$prev['id']);?>">上一篇</a><?php endif; ?>
                    <?php $next = D('Document')->next($info); if(!empty($next)): ?><a href="<?php echo U('?id='.$next['id']);?>">下一篇</a><?php endif; ?>
				</span>
            </p>
        </div>
    </header>

    <a href="/">首页</a> &gt; <a href="<?php echo U('Article/lists?category=' . $category['name']);?>"><?php echo ($category["title"]); ?></a> &gt; <?php echo ($info["title"]); ?>
    <div class="span9 main-content">
        <!-- Contents
        ================================================== -->
        <section id="contents"><?php echo ($info["content"]); ?></section>
        <hr/>
        <!--<?php echo hook('documentDetailAfter',$info);?>-->
    </div>

</div>
    <!--main end-->

    <!--footer start-->
    <p class="footer"><a href="default.htm">手机版</a><a id="return" href="javascript:void(0)" onClick="scroll(0,0)">回顶部</a>
    更多>><a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
</p>
    <!--footer end-->
</body>
</html>