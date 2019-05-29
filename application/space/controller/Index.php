<?php
namespace app\space\controller;
use think\Controller;
use think\Request;
use app\space\model\User as U;
use app\space\model\Friend as F;
use app\space\model\Gallery as G;

class Index extends Controller {
    public function index() {
        $id = input('get.id');
        if (empty($id) || !isset($id) || !is_numeric($id)) {
            $id = U::where('nickname', cookie('name'))->value('id');
        }
        $name = U::where('id', $id)->value('nickname');
        $this -> assign('name', $name);
        $this -> assign('postNumber', G::where('author_id', $id)->count());
        $this -> assign('followed', F::where('followed', $name)->count());
        $this -> assign('follower', F::where('follower', $name)->count());
        $this -> assign('saying', U::where('id', $id)->value('saying'));
        $this -> assign('post', G::where('author_id', $id)->select());
        return view('space');
    }
}
?>
