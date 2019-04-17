<?php
namespace app\behavior;
use think\Controller;

class CheckLogin extends Controller
{
    public function run(&$params){
        $cookie = cookie('name');
        if (!isset($cookie)) {
            $cookie = '';
        }

        if ($cookie == '' || $cookie == null) {
            // return $this->error('请登录','http://inxiang.net/register');
            return $this->redirect('http://inxiang.net/register');
        }
    }
}

?>