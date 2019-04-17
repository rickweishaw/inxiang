<?php
namespace app\account\controller;
use think\Controller;
use think\Request;
use app\account\model\User as UserModel;

class Password extends Controller
{
    public function index(){
        if (input('captcha') == '') {
            return $this->error('你没有输入验证码');
        }

        if (input('captcha') == session('cpt')) {
            UserModel::where('nickname', cookie('name'))->update(['password' => sha1(input('password'))]);
            return $this->success('密码修改成功，将退出登录以便重新认证', 'http://inxiang.net/user/logout');
        } else {
            return $this->error('验证码不正确，请检查重试');
        }

    }
}

?>