<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>游戏分类列表</title>
</head>
<body>
    <a href="/">首页</a> &gt; 游戏分类
    <hr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><a href="/index.php?s=/Home/GameCategory/allGames/cateId/<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></a>
        <img src="<?php echo (get_cover($data["icon"],'path')); ?>" alt="<?php echo ($data["name"]); ?>"><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>