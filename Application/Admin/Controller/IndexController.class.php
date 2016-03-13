<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;

use User\Api\UserApi as UserApi;

/**
 * 后台首页控制器
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
class IndexController extends AdminController
{

    /**
     * 后台首页
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function index()
    {
        if (UID) {
            $this->meta_title = '管理首页';
            $this->display();
        } else {
            $this->redirect('Public/login');
        }
    }

    /**
     * 查询全部的栏目分类
     * @author 南宁网大网站技术部
     */
    public function all()
    {
        echo get_cover_path(2);
        $field = 'id,name,pid,title,link_id,icon';
        $category = D('Category')->field($field)->select();
        $cateList = $this->unlimitedForLevel($category);
        $this->assign('category', $cateList);
//        $this->display();
    }

    /**
     * 多维数组递归
     * @author 南宁网大网站技术部
     * @param $cate [传入的数组]
     * @param $name [子数组名]
     * @param $pid [父级ID]
     * @return array
     */
    public function unlimitedForLevel($cate, $name = 'child', $pid = 0)
    {
        $arr = array();
        foreach ($cate as $key => $v) {
            //判断，如果$v['pid'] == $pid的则压入数组Child
            if ($v['pid'] == $pid) {
                //递归执行
                $v[$name] = self::unlimitedForLevel($cate, $name, $v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }

}
