<?php
namespace app\user\controller;
use think\Hook;
use think\Controller;
use app\user\model\User as UserModel;
use app\user\model\Gallery as GalleryModel;
use app\user\model\Friend as FriendModel;

class Index extends Controller
{
    public function index() {
        Hook::listen('CheckLogin', $params);
        $saying = UserModel::where('nickname', cookie('name'))->value('saying');
        $gallery = GalleryModel::where('author', cookie('name'))->order('upload_time', 'desc')->select();
        $postNum = GalleryModel::where('author', cookie('name'))->count();
        $follower = FriendModel::where('followed', cookie('name'))->count();
        $followed = FriendModel::where('follower', cookie('name'))->count();
        $this->assign('post', $postNum);
        $this->assign('follower', $follower);
        $this->assign('followed', $followed);
        $this->assign('saying', $saying);
        $this->assign('name', cookie('name'));
        $this->assign('gallery', $gallery);
        return view('user');
    }
}

?>
