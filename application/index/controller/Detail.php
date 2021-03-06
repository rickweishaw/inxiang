<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\index\model\User as U;
use app\index\model\Gallery as G;
use app\index\model\Friend as F;

class Detail extends Controller
{
    public function Index(){
        $id = input('id');
        $item = G::where('id', $id)->find();
        $name = cookie('name');
        $this->assign('name', $name);
        $this->assign('item', $item);
        $this->assign('aid', G::where('id', $id)->value('author_id'));
        return view('detail');
    }

    public function Del(){
        $id = input('id');
        if ( U::where('nickname', cookie('name'))->value('id') == G::where('id', $id)->value('author_id')) {
            $path = G::where('id', $id)->value('path');
            if (strtoupper(substr(PHP_OS,0,3))==='WIN') {
                // in windows
                echo $path = str_replace('/', '\\', str_replace('http://inxiang.net/', ROOT_PATH.'public'.DS, $path));
                if (db('gallery')->where('id', $id)->delete()) {
                    unlink($path);
                    echo "<script>alert('删除成功');window.opener.location.href = window.opener.location.href;
                    window.open('','_self');window.close();</script>";
                } else {
                    echo "<script>alert('删除失败'); history.back();</script>";
                }
            } else {
                // in linux
                if (db('gallery')->where('id', $id)->delete()) {
                    unlink(str_replace('http://inxiang.net/', ROOT_PATH.'public'.DS, $path));
                    echo "<script>alert('删除成功');window.opener.location.href = window.opener.location.href;
                    window.open('','_self');window.close();</script>";
                } else {
                    echo "<script>alert('删除失败'); history.back();</script>";
                }
            }
        } else { echo '<script>alert("删除操作仅限作者使用");history.go(-1)</script>'; }
    }

    public function Friend() {
        if (U::where('nickname', cookie('name'))->value('id') != input('id')) {
            $followed = U::where('id', input('id'))->value('nickname'); // 被关注者
            $follower = cookie('name'); // 关注者
            $time = date("Y-m-d H:i:s");
            if (db('friend') -> data(['followed'=>$followed, 'follower'=>$follower, 'fo_time'=>$time]) -> insert()) {
                echo "<script>alert('关注成功');history.go(-1)</script>";
            } else {
                echo "<script>alert('关注失败');history.go(-1)</script>";
            }
        } else {
            echo '<script>alert("不能关注自己");history.go(-1)</script>';
        }
    }
}
?>
