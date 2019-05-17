<?php
namespace app\account\controller;
use think\Hook;
use think\Controller;
use app\account\model\User as UserModel;

class Index extends Controller
{
    public function index(){
        Hook::listen('CheckLogin',$params);
        $email = UserModel::where('nickname', cookie('name'))->value('email');
        $saying = UserModel::where('nickname', cookie('name'))->value('saying');
        $phone = UserModel::where('nickname', cookie('name'))->value('phone');
        $gender = UserModel::where('nickname', cookie('name'))->value('gender');
        $this->assign('email', $email);
        $this->assign('saying', $saying);
        $this->assign('phone', $phone);
        $this->assign('gender', $gender);
        $this->assign('name', cookie('name'));
        return $this->fetch('account');
    }
}

?>
