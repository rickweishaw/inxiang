<?php
namespace app\user\controller;
use think\Controller;

class Logout extends Controller
{
    public function index(){
        cookie('name', null);
        session('num', null);
        session('email', null);
        return $this->success('成功退出登录','http://inxiang.net');
    }
}

?>