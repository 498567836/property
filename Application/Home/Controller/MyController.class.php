<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/11
 * Time: 18:01
 */

namespace Home\Controller;


class MyController extends HomeController
{
    public function index(){
        $this->login();
        //$a=session('user');
        //var_dump(session());exit;
        $this->assign('user',session('user_auth'));// 赋值数据集
        $this->display('index'); // 输出模板
    }
    public function repair(){
        $user=session('user_auth')["username"];
        //var_dump($user);exit;
        $list =  M('repair')->where(['name'=>$user])->order('create_time DESC')->limit(3)->select();
        //var_dump(session());exit;
        $this->assign('list',$list);// 赋值数据集
        $this->display('repair'); // 输出模板
    }

}