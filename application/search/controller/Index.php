<?php
namespace app\search\controller;
use think\Controller;
use think\Request;
use app\search\model\User as U;

class Index extends Controller {
    public function Index() {
        $string = input('get.keyword');
        $result = U::where('nickname', 'LIKE', '%'.$string.'%')->select();
        $this -> assign('count', count($result));
        $this -> assign('result', $result);
        return view('search');
    }
}
?>
