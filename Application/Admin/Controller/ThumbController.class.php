<?php
namespace Admin\Controller;

class ThumbController extends ThinkController
{
    private $model_name = 'thumb'; /*在OneThink模型管理中查看自己模型标识（不是名称）修改此处*/

    public function index()
    {

        $this->lists(); /*系统会调用View/Team/index.html来显示*/

    }


    public function lists($model = null)
    {

        parent::lists($this->model_name); /*系统会调用View/Team/list.html来显示*/

    }


    public function add($model = null)
    {

        $model = M('Model')->getByName($this->model_name); /*通过Model名称获取Model完整信息*/

        parent::add($model['id']); /*系统会调用View/Team/add.html来显示*/

    }


    public function edit($model = null, $id = 0)
    {

        $id || $this->error('请选择要编辑的用户！');

        $model = M('Model')->getByName($this->model_name); /*通过Model名称获取Model完整信息*/

        parent::edit($model['id'], $id); /*系统会调用View/Team/edit.html来显示*/

    }

    public function del($model = null, $ids = null)
    {

        $model = M('Model')->getByName($this->model_name); /*通过Model名称获取Model完整信息*/

        parent::del($model['id'], $ids); /*没有页面，只有Ajax提示返回，不需要View/Team/del.html*/

    }

}