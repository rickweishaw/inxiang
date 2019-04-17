<?php
namespace app\index\controller;
use think\Controller;
use think\Hook;
use think\Db;
use app\index\model\User as U;
use app\index\model\Gallery as G;

class Index extends Controller
{
    public function index() {
        Hook::listen('CheckLogin',$params);
        $this->assign('user', U::where('nickname', cookie('name'))->find());
        $this->assign('work', G::order('upload_time', 'desc')->select());
        return view('index');
    }
}
