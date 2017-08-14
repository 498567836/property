<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/11
 * Time: 18:01
 */

namespace Home\Controller;


class NoticeController extends HomeController
{
    public function index(){
        $Notice = M('Document'); // 实例化Repair对象
// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $Notice->where('status=1')->order('create_time DESC')->limit(3)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->meta_title = '物业管理首页';
        //var_dump($list);exit;
        $picture =$Notice->table('document document,picture picture')->field('document.cover_id as path_id,picture.path as path')->where('document.cover_id=picture.id')->select();
//        $picture = $Notice->join('RIGHT JOIN picture ON document.cover_id = picture.id' );
        $picture = array_column($picture, 'path','path_id');
        $this->assign('picture',$picture);// 赋值数据集
        //var_dump($picture);exit;
        $this->display('list'); // 输出模板

    }
}