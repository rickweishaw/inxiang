<?php
namespace app\user\controller;
use think\Controller;
use think\Session;

class Logout extends Controller
{
    public function index(){
        cookie('name', null);
        Session::delete('email');
        Session::delete('num');
        return $this->success('成功退出登录','http://inxiang.net');
    }
}

?>
