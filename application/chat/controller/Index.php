<?php
namespace app\chat\controller;
use think\Controller;

class Index extends Controller
{
    public function Index() {
        return view('chat');
    }
}
?>