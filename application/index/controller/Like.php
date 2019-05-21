<?php
namespace app\index\Controller;
use think\Controller;
use think\Request;
use app\index\model\Gallery as G;

class Like extends Controller
{
    public function Index() {
        G::where('id', input('get.id'))->setInc('likes');
        return '<script>window.location.href="http://inxiang.net";</script>';
    }
}
?>
