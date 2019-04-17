<?php
namespace app\register\controller;
use think\Controller;
use think\Request;
use app\register\model\User as UserModel;

class CheckNum extends Controller
{
    public function index(){
        $request = Request::instance();
        $num = $request -> param('num');
        if ($num == session('num')) {
            UserModel::where('nickname', cookie('name')) -> update(['is_active' => 1]);
            return $this->success('邮箱验证成功','http://inxiang.net/login');
        } else {
            return $this->error('邮箱验证失败，请重试');
        }
    }
}
?>