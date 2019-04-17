<?php
namespace app\account\controller;
use think\Controller;
use think\Request;
use app\account\model\User as UserModel;

class Update extends Controller
{
    public function index(){
        $update = array();
        $update['nickname'] = input('nickname');
        $update['saying'] = input('saying');
        $update['phone'] = input('phone');
        $update['gender'] = input('gender');

        if (UserModel::where('nickname', $update['nickname']) ->
            update(['nickname'=>$update['nickname'], 'saying'=>$update['saying'],
            'phone'=>$update['phone'],'gender'=>$update['gender'],])) {
            return $this->success('修改成功');
        } else {
            return $this->error('修改失败');
        }
    }
}

?>