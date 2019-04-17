<?php
namespace app\login\controller;
use think\Controller;
use think\Request;
use app\login\model\User as UserModel;

class Forgot extends Controller
{
    public function index(){
        $forgot = array();
        $forgot['email'] = input('email');
        $forgot['nickname'] = input('nickname');
        $forgot['password'] = sha1(input('password'));

        if (UserModel::where('email', $forgot['email'])->value('nickname') == $forgot['nickname']) {
            UserModel::where('nickname', $forgot['nickname']) -> update(['password' => $forgot['password']]);
            return $this->success('密码修改成功，请牢记该密码', 'http://inxiang.net/login');
        } else {
            return $this->error('邮箱或昵称不正确，请检查重试');
        }
    }
}

?>