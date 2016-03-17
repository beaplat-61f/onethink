<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<title>文章列表</title>

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
    
    


    <div class="box">

        <div class="hd">

            <ins></ins>

            <div class="over">

                <h3>
                    <a href="/">首页</a> &gt; <?php echo ($category["title"]); ?>
                </h3>

            </div>

        </div>

        <dl class="newslist">

            <dt>

            <ul>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>

                        <a href="gl/81927.html" target="_blank"><img src="<?php echo (get_cover($strategy["cover_id"],'path')); ?>">

                            <h3><a href="gl/81927.html" target="_blank"><?php echo ($data["title"]); ?></a></h3>

                            <p><?php echo ($data["description"]); ?></p>

                            <p><?php echo (date('Y-m-d H:i:s',$data["create_time"])); ?></p>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>

            </dt>
            <dd>
                <!--PAGE BEGIN-->
                <div class="onethink pagination pagination-right pagination-large">
                    <?php $__PAGE__ = new \Think\Page(get_list_count($category['id']), $category['list_row']);echo $__PAGE__->show(); ?>
                </div>
                <!--PAGE END-->
            </dd>
        </dl>

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