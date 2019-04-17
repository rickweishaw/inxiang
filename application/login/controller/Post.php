<?php
namespace app\login\controller;
use think\Controller;
use think\Request;
use think\Cookie;
use app\login\model\User as UserModel;

class Post extends Controller
{
    public function index(){
        $user = array();
        $user['email'] = input('email');
        $user['password'] = sha1(input('password'));

        if (UserModel::where('email', $user['email'])->value('is_active') == 0)  {
            return $this->error('该帐号没有激活，请检查邮件是否已发送');
        }

        if (input('remember') == 'true') {
             Cookie::forever('name', UserModel::where('email', $user['email'])->value('nickname'));
        } else {
            cookie('name', UserModel::where('email', $user['email'])->value('nickname'));
        }

        if (UserModel::where('email', $user['email'])->value('password') == $user['password']) {
            session('email', $user['email']);
            return $this->success('登录成功', 'http://inxiang.net');
        } else {
            return $this->error('登录失败，请重试');
        }
    }
}

?>