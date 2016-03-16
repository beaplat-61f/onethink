<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use Home\Model\DocumentModel;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

//        $category = D('Category')->getTree();
//        $lists    = D('Document')->lists(null);
//
//        $this->assign('category',$category);//栏目
//        $this->assign('lists',$lists);//列表
//        $this->assign('page',D('Document')->page);//分页

        // 首页缩略图
        $thumbs = M('Thumb')->order('id desc')->limit(4)->select();

        // 最新资讯
        /** @var DocumentModel $document */
        $document = D('Document');
        $news = $document->lists(40);

        $newsTop = array_slice($news, 0, 2);
        $newsBottom = array_slice($news, 2, 4);

        // 最新攻略
        $strategy = $document->lists(39);
        $strategyTop = array_slice($strategy, 0, 2);
        $strategyBottom = array_slice($strategy, 2, 4);


        $data = [
            'newsTop' => $newsTop,
            'newsBottom' => $newsBottom,
            'strategyTop' => $strategyTop,
            'strategyBottom' => $strategyBottom,
            'thumbs' => $thumbs
        ];
        $this->assign($data);
        $this->display();
    }

}