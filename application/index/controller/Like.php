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

//TODO: 判断是否重复点赞
// if (in_like 表中有 cookie('name') 的行) {
//     提醒不能重复点赞
// } else {
//     向表中添加一行
// }
?>
