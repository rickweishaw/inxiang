<?php
namespace app\account\controller;
use think\Controller;
use think\Request;
use app\register\model\User as UserModel;

class CheckNum extends Controller
{
    public function index(){
        $request = Request::instance();
        $num = $request -> param('num');
        $email = $request -> param('email');
        if ($num == session('num')) {
            UserModel::where('nickname', cookie('name')) -> update(['email' => $email]);
            return $this->success('邮箱验证成功','http://inxiang.net');
        } else {
            return $this->error('邮箱验证失败，请重试');
        }
    }
}
?>