<?php

namespace Home\Controller;

use Think\Controller;
use Think\Model;

class GameController extends HomeController
{
    public function index()
    {

    }

    /**
     * 游戏详情页
     * @param $id integer
     */
    public function show($id)
    {
        $game = M('Game')->getById($id);
        $game['thumb'] = explode(',', $game['thumb']);

        $this->assign('game', $game);
        $this->display();
    }
}