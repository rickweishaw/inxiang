<?php
namespace app\search\controller;
use think\Controller;
use think\Request;
use app\search\model\User as U;

class Index extends Controller
{
    public function Index(){
        return view('search');
    }
}
?>
