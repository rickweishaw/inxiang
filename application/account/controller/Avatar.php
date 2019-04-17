<?php
namespace app\account\controller;
use think\Hook;
use think\File;
use think\Controller;
use think\Request;
use app\account\model\User as UserModel;

class avatar extends Controller
{
    public function index(){
        Hook::listen('CheckLogin',$params);
        $filePath = ROOT_PATH . 'public' . DS . 'upload' . DS . 'avatar';
        $dbPath = 'http://inxiang.net/upload/avatar';

        if (!file_exists($filePath)) mkdir($filePath, '0777', true);

        $base64 = str_replace('', '+', input('post.base64'));

        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64, $result)) {
            ($result[2] == 'jpeg') ? $name = uniqid().'.jpg' : $name = uniqid().'.'.$result[2];
            $file = $filePath.DS.$name;
            $paths = $dbPath.'/'.$name;

            if (file_put_contents($file, base64_decode(str_replace($result[1], '', $base64)))){
                UserModel::where('nickname', cookie('name'))->update(['avatar'=>$paths]);
                return $this->success('头像修改成功', 'http://inxiang.net/account');
            } else {
                return $this->error('头像修改失败');
            }
        } else {
            return $this->error('头像上传时出错');
        }
    }
}
?>