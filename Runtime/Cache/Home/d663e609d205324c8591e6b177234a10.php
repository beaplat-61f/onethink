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
    
    <div class="header">

    <span id="menu">导航</span>

    <div id="guide">

        <ul>

            <li><a href="index.html"><i class="iconfont">&#xe601;</i> 首页</a></li>

            <li><a href="android/danji.html"><i class="iconfont">&#xe600;</i> 单机</a></li>

            <li><a href="android/danji.html">网游</a></li>

            <li><a href="android/danji.html">应用</a></li>

            <!--<li><a href="android/danji.html">攻略</a></li>-->

            <!--<li><a href="android/danji.html">资讯</a></li>-->

        </ul>

    </div>

    <a class="search" href="index.html">搜索</a>

    <img class="logo" src="/Public/Home/images/game/logo.png">

</div>

    

    <div class="index-banner proportion" F="0.40625">

        <ul class="swiper-wrapper">
            <?php if(is_array($thumbs)): $i = 0; $__LIST__ = $thumbs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$thumb): $mod = ($i % 2 );++$i;?><li class="swiper-slide"><a href="android/12234.html" target="_blank"><img
                        src="<?php echo (get_cover($thumb["image"],'path')); ?>" title="<?php echo ($thumb["description"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li class="swiper-slide"><a href="android/12234.html" target="_blank"><img-->
                    <!--src="/Public/Home/images/game/upload/1399518651.jpg" title="掠夺之剑：暗影大陆推出汉化版"></a></li>-->

            <!--<li class="swiper-slide"><a href="android/12234.html" target="_blank"><img-->
                    <!--src="/Public/Home/images/game/upload/1399518636.jpg" title="腾讯新游《全民砰砰砰》登录iOS"></a></li>-->

            <!--<li class="swiper-slide"><a href="android/12234.html" target="_blank"><img-->
                    <!--src="/Public/Home/images/game/upload/1399518674.jpg" title="里约大冒险2——愤怒的小鸟里约版更新"></a></li>-->

            <!--<li class="swiper-slide"><a href="android/12234.html" target="_blank"><img-->
                    <!--src="/Public/Home/images/game/upload/1399518692.jpg" title="超凡蜘蛛侠2官方游戏登陆安卓"></a></li>-->

        </ul>

        <div class="index-pagination"></div>

        <div class="banner-title"><p></p></div>

    </div>

    <ul class="nav">

        <li class="ddyx"><a href="android/danji.html">安卓单机</a></li>

        <li class="jptj"><a href="android/danji.html">安卓网游</a></li>

        <li class="yyzx"><a href="android/danji.html">手机应用</a></li>

        <li class="gldq"><a href="<?php echo U('Article/lists?category=strategy');?>">攻略大全</a></li>

        <li class="xwzx"><a href="android/danji.html">新闻资讯</a></li>


    </ul>

    <div class="box">

        <div class="hd">

            <ins></ins>

            <div class="over">

                <a href="android/danji.html" class="more">更多</a>

                <h3>推荐手游</h3>

            </div>

        </div>

        <ul class="gamelist">

            <li>

                <a href="android/12234.html"><img src="/Public/Home/images/game/upload/1397724791.jpg" alt="掌上炸翻天"></a>

                <h3><a href="android/12234.html">万人炸金花</a></h3>

                <p>人气：677</p>

                <p>大小：6.9 MB</p>

                <a class="btn_down" href="android/12234.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12234.html"><img src="/Public/Home/images/game/upload/1405574802.jpg" alt="女神斗地主"></a>

                <h3><a href="android/12234.html">女神斗地主</a></h3>

                <p>人气：56</p>

                <p>大小：4.8 MB</p>

                <a class="btn_down" href="android/12234.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12234.html"><img src="/Public/Home/images/game/upload/1407122236.jpg" alt="天天爱闯关"></a>

                <h3><a href="android/12234.html">天天爱闯关</a></h3>

                <p>人气：73</p>

                <p>大小：12.27 MB</p>

                <a class="btn_down" href="android/12234.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12234.html"><img src="/Public/Home/images/game/upload/1403165654.jpg" alt="嘉米麻将"></a>

                <h3><a href="android/12234.html">嘉米麻将</a></h3>

                <p>人气：61</p>

                <p>大小：6.62 MB</p>

                <a class="btn_down" href="android/12234.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12234.html"><img src="/Public/Home/images/game/upload/1403920246.jpg" alt="万人斗地主"></a>

                <h3><a href="android/12234.html">万人斗地主</a></h3>

                <p>人气：246</p>

                <p>大小：7.66 MB</p>

                <a class="btn_down" href="android/12234.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12234.html"><img src="/Public/Home/images/game/upload/1407480562.jpg" alt="吸血鬼日记"></a>

                <h3><a href="android/12234.html">吸血鬼日记</a></h3>

                <p>人气：3</p>

                <p>大小：119.19 MB</p>

                <a class="btn_down" href="android/12234.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12234.html"><img src="/Public/Home/images/game/upload/1399441026.jpg" alt="3D狂野飞车"></a>

                <h3><a href="android/12234.html">3D狂野飞车</a></h3>

                <p>人气：39</p>

                <p>大小：5.29 MB</p>

                <a class="btn_down" href="android/12234.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12190.html"><img src="/Public/Home/images/game/upload/1407317142.jpg" alt="天天美女"></a>

                <h3><a href="android/12190.html">天天美女</a></h3>

                <p>人气：31</p>

                <p>大小：360 KB</p>

                <a class="btn_down" href="android/12190.html">抢先下载</a>

            </li>

            <li>

                <a href="android/11819.html"><img src="/Public/Home/images/game/upload/1396605515.jpg" alt="来自星星的僵尸"></a>

                <h3><a href="android/11819.html">来自星星的僵尸</a></h3>

                <p>人气：100</p>

                <p>大小：6.97 MB</p>

                <a class="btn_down" href="android/11819.html">抢先下载</a>

            </li>


        </ul>

    </div>

    <div class="box">

        <div class="hd">

            <ins></ins>

            <div class="over">

                <a href="android/wangyou.html" class="more">更多</a>

                <h3>经典手游</h3>

            </div>

        </div>

        <ul class="gamelist">

            <li>

                <a href="android/12120.html"><img src="/Public/Home/images/game/upload/1406273727859743.jpg" alt="拳皇98"></a>

                <h3><a href="android/12120.html">拳皇98</a></h3>

                <p>人气：121</p>

                <p>大小：71.94 MB</p>

                <a class="btn_down" href="android/12120.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12215.html"><img src="/Public/Home/images/game/upload/1407484469.jpg" alt="3D狂热飞车"></a>

                <h3><a href="android/12215.html">3D狂热飞车</a></h3>

                <p>人气：19</p>

                <p>大小：11.51 MB</p>

                <a class="btn_down" href="android/12215.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12116.html"><img src="/Public/Home/images/game/upload/1406257599.jpg" alt="围住神经猫"></a>

                <h3><a href="android/12116.html">围住神经猫</a></h3>

                <p>人气：2140</p>

                <p>大小：446 KB</p>

                <a class="btn_down" href="android/12116.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12056.html"><img src="/Public/Home/images/game/upload/1404889743854676.jpg" alt="变形金刚：崛起"></a>

                <h3><a href="android/12056.html">变形金刚：崛起</a></h3>

                <p>人气：97</p>

                <p>大小：92.29 MB</p>

                <a class="btn_down" href="android/12056.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12150.html"><img src="/Public/Home/images/game/upload/1406796628.jpg" alt="狂野飙车8免谷歌版"></a>

                <h3><a href="android/12150.html">狂野飙车8免谷歌版</a></h3>

                <p>人气：186</p>

                <p>大小：1.07 GB</p>

                <a class="btn_down" href="android/12150.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12218.html"><img src="/Public/Home/images/game/upload/1407484683.jpg" alt="天天老虎机"></a>

                <h3><a href="android/12218.html">天天老虎机</a></h3>

                <p>人气：20</p>

                <p>大小：2.96 MB</p>

                <a class="btn_down" href="android/12218.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12216.html"><img src="/Public/Home/images/game/upload/1407484442807362.jpg" alt="全民狂飙"></a>

                <h3><a href="android/12216.html">全民狂飙</a></h3>

                <p>人气：19</p>

                <p>大小：6.15 MB</p>

                <a class="btn_down" href="android/12216.html">抢先下载</a>

            </li>

            <li>

                <a href="android/12137.html"><img src="/Public/Home/images/game/upload/1406624206454326.jpg" alt="街头霸王4：竞技场"></a>

                <h3><a href="android/12137.html">街头霸王4：竞技场</a></h3>

                <p>人气：73</p>

                <p>大小：1 KB</p>

                <a class="btn_down" href="android/12137.html">抢先下载</a>

            </li>

            <li>

                <a href="android/11927.html"><img src="/Public/Home/images/game/upload/1400120612.jpg" alt="纪念碑谷"></a>

                <h3><a href="android/11927.html">纪念碑谷</a></h3>

                <p>人气：1363</p>

                <p>大小：119.75 MB</p>

                <a class="btn_down" href="android/11927.html">抢先下载</a>

            </li>


        </ul>

    </div>

    <div class="box">

        <div class="hd">

            <ins></ins>

            <div class="over">

                <a href="news/default.htm" class="more">更多</a>

                <h3>最新资讯</h3>

            </div>

        </div>

        <dl class="newslist">

            <dt>

            <ul>
                <?php if(is_array($newsTop)): $i = 0; $__LIST__ = $newsTop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newsTop): $mod = ($i % 2 );++$i;?><li>
                        <a href="news/43671.html" target="_blank"><img src="<?php echo (get_cover($newsTop["cover_id"],'path')); ?>">
                            <h3><a href="news/43671.html" target="_blank"><?php echo ($newsTop["title"]); ?></a></h3>
                            <p><?php echo ($newsTop["description"]); ?></p>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

            </dt>

            <dd>

                <ul>
                    <?php if(is_array($newsBottom)): $i = 0; $__LIST__ = $newsBottom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newsBottom): $mod = ($i % 2 );++$i;?><li><span>[新游速递]</span><a href="gl/81926.html"><?php echo ($newsBottom["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>

            </dd>

        </dl>

    </div>

    <div class="box">

        <div class="hd">

            <ins></ins>

            <div class="over">

                <a href="gl/default.htm" class="more">更多</a>

                <h3>最新攻略</h3>

            </div>

        </div>

        <dl class="newslist">

            <dt>

            <ul>
                <?php if(is_array($strategyTop)): $i = 0; $__LIST__ = $strategyTop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$strategy): $mod = ($i % 2 );++$i;?><li>

                        <a href="gl/81927.html" target="_blank"><img src="<?php echo (get_cover($strategy["cover_id"],'path')); ?>">

                            <h3><a href="gl/81927.html" target="_blank"><?php echo ($strategy["title"]); ?></a></h3>

                            <p><?php echo ($strategy["description"]); ?></p>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>

            </dt>

            <dd>

                <ul>
                    <?php if(is_array($strategyBottom)): $i = 0; $__LIST__ = $strategyBottom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$strategyBottom): $mod = ($i % 2 );++$i;?><li><span>[攻略]</span><a href="gl/81926.html"><?php echo ($strategyBottom["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

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