<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/12 0012
 * Time: 23:34
 */

namespace Home\Controller;

use Admin\Controller\ThinkController;
use Think\Controller;
use Think\Model;
use Think\Think;

class GameCategoryController extends HomeController
{
    public function index()
    {
        echo 111;
    }

    /**
     * 所有的游戏分类
     */
    public function show()
    {
        $list = M('GameCategory')->select();
//        $data = M('game_category')->select();
        /** @var $this Controller*/
        $this->assign('list', $list);
        $this->display();
    }

    /**
     * 某分类下的所有游戏
     * @param $cateId
     */
    public function allGames($cateId)
    {
        $cate = M('GameCategory')->getByCateId($cateId);
        $this->assign('cate', $cate);

        $map = ['category' => $cateId];
        $games = M('Game')->where($map)->select();

        $this->assign('games', $games);
        $this->display();
    }
}