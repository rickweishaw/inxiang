<?php
namespace app\user\controller;
use think\Hook;
use think\Controller;
use app\user\model\User as UserModel;
use app\user\model\Gallery as GalleryModel;

class Index extends Controller
{
    public function index() {
        Hook::listen('CheckLogin', $params);
        $saying = UserModel::where('nickname', cookie('name'))->value('saying');
        $gallery = GalleryModel::where('author', cookie('name'))->order('upload_time', 'desc')->select();
        $this->assign('saying', $saying);
        $this->assign('name', cookie('name'));
        $this->assign('gallery', $gallery);
        return view('user');
    }
}

?>
