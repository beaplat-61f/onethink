# onethink笔记

## 上传多图

1. 建立视图钩子，名字为UploadImages
2. 启用插件
3. 修改 `\Application\Admin\Common\function.php` 135行 `get_attribute_type` 函数的 `type` 增加一行

	'pictures'   =>  array('上传多图','varchar(255) NOT NULL'),

4. 修改 `\Application\Admin\View\Article\Add.html` 在 `<switch name="field.type">` 之后添加
	
		<case value="pictures">
			{:hook('UploadImages', array('name'=>$field['name'],'value'=>$field['value']))}
		</case>

5. 修改 `\Application\Admin\View\Article\Edit.html` 在 `<switch name="field.type">` 之后添加一行

		<case value="pictures">
			{:hook('UploadImages', array('name'=>$field['name'],'value'=>$data[$field['name']]))}
		</case>

6. 前台调用多图时，取了相应字段以后，explode(',',字段名)以后，循环输出 __ROOT__{$v|get_cover='path'}

7. bug反馈：表里同时有上传图片跟上传多图时，上传多图的顺序（设置表单显示的顺序）必须在上传单图的上面

## 模型属性自定义函数

![](http://www.thinkphp.cn/Uploads/editor/2014-02-10/52f8715d6b9cb.jpg)

然后在文件 `/application/admin/common/function.php` 中增加

	/**
	 * 类型枚举
	 * @return mixed
	 */
	function get_cate_id()
	{
	    $data = M('game_category')->select();
	    $list = [];
	    foreach ($data as $key => $val) {
	        $list[$key] = $val['name'];
	    }
	    return $list;
	}

最后，修改下 `/application/admin/common/function.php` 中的一个函数 `parse_field_attr`

	if(0 === strpos($string,':')){
        // 采用函数定义
		// return   eval(substr($string,1).';');
        $str = substr($string,1) . ';';
        eval("\$str = $str");
        return $str;
    }



