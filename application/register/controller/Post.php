<?php
namespace app\register\controller;
use \think\Controller;
use \think\Request;

class Post extends Controller
{
    public function index() {
        $user = array();
        $user['email'] = input('email');
        $user['nickname'] = input('nickname');
        $user['password'] = sha1(input('password'));

        if (db('user')->value('email') == $user['email']) return $this -> error('该邮箱已经注册过小印相了，请检查重试');

        if (db('user')->value('nickname') == $user['nickname']) return $this -> error('用户名已存在，请检查重试');

        if(db('user')->data(['email'=>$user['email'],'nickname'=>$user['nickname'],'password'=>$user['password']])->insert()) {
            cookie('name', $user['nickname']);
            cookie('email', $user['email']);
            return $this->success('注册成功，即将跳转激活', 'http://inxiang.net/register/activation');
        } else {
            return $this->error('注册失败，请刷新重试');
        }
    }
}

?>