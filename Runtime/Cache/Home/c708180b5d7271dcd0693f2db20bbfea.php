<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <title>玩游戏网手机游戏免费下载触屏版自适应手机wap软件网站模板下载</title>

    <meta name="keywords" content="" />

    <meta name="description" content="" />



    <link href="/Public/Home/css/game/style.css" rel="stylesheet" media="screen">

    <script src="/Public/static/jquery-2.0.3.min.js" type="text/javascript"></script>

    <script src="/Public/Home/js/game/common.js" type="text/javascript"></script>

</head>

<body>

<div class="main">

    <div class="back_nav">

        <a class="back" href="../index.html">游戏</a>

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

    <ul class="gamelist" id="infocon">
        <?php if(is_array($games)): $i = 0; $__LIST__ = $games;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$game): $mod = ($i % 2 );++$i;?><li>
                <a href="12234.html"><img src="<?php echo (get_cover($game["icon"],'path')); ?>" alt="<?php echo ($game["name"]); ?>"></a>
                <h3><a href="12234.html"><?php echo ($game["name"]); ?></a></h3>
                <p>人气：6</p>
                <p>大小：155.1 MB</p>
                <a class="btn_down" href="12234.html">抢先下载</a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

</div>

<p class="footer"><a href="../index.html">手机版</a><a id="return" href="javascript:void(0)" onClick="scroll(0,0)">回顶部</a></p>

</body>

</html>