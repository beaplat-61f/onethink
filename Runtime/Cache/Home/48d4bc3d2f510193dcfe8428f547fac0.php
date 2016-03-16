<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<title>文章列表</title>

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
    
    
    <a href="/">首页</a> &gt; <?php echo ($category["title"]); ?>
    <div class="span9">
        <!-- Contents
        ================================================== -->
        <section id="contents">

            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="">
                    <h3 class="ellipsis"><a href="<?php echo U('Article/detail?id='.$data['id']);?>"><?php echo ($data["title"]); ?></a></h3>
                </div>
                <div>
                    <p class="lead"><?php echo ($data["description"]); ?></p>
                </div>
                <div>
                    <span><a href="<?php echo U('Article/detail?id='.$data['id']);?>">查看全文</a></span>
					<span class="pull-right">
						<span class="author"><?php echo (get_username($data["uid"])); ?></span>&nbsp;&nbsp;
						<span>发表于 <?php echo (date('Y-m-d H:i:s',$data["create_time"])); ?></span>
						<span>阅读(<?php echo ($data["view"]); ?>)</span>&nbsp;&nbsp;
                </div>
                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>

            <div class="onethink pagination pagination-right pagination-large">
                <?php $__PAGE__ = new \Think\Page(get_list_count($category['id']), $category['list_row']);echo $__PAGE__->show(); ?>
            </div>
        </section>
    </div>
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