<?php
namespace app\user\controller;
use think\Controller;
use app\user\model\Friend as F;
use think\Db;

class Follow extends Controller
{
    public function Index() {
        //TODO: We need to get the followed people's infomation in the table
        $this->assign('followed', F::where('follower', cookie('name'))->column('followed'));
        return view('follow');
    }
}

?>