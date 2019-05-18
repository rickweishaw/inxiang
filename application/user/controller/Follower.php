<?php
namespace app\user\controller;
use think\Controller;
use app\user\model\Friend as F;
use think\Db;

class Follower extends Controller
{
    public function Index() {
        $this->assign('follower', F::where('followed', cookie('name'))->column('follower'));
        return view('follower');
    }
}

?>
