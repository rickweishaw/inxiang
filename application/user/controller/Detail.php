<?php
namespace app\user\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\user\model\User as U;
use app\user\model\Gallery as G;

class Detail extends Controller
{
    public function index(){
        $id = input('id');
        $item = G::where('id', $id)->find();
        $name = cookie('name');
        $this->assign('name', $name);
        $this->assign('item', $item);
        return view('detail');
    }

    public function del(){
        $id = input('id');
        $path = G::where('id', $id)->value('path');
        if (strtoupper(substr(PHP_OS,0,3))==='WIN') {
            // in windows
            $path = str_replace('/', '\\', str_replace('http://inxiang.net/', ROOT_PATH.DS.'public'.DS, $path)); 
            if (db('gallery')->where('id', $id)->delete()) {
                unlink($path);
                echo "<script>alert('删除成功');
                    window.opener=null;
                    window.open('','_self');window.close();
                    </script>";
                return $this->redirect('http://inxiang.net/user');
            } else {
                echo "<script>alert('删除失败'); history.back();</script>";
            }
        } else {
            // in linux
            if (db('gallery')->where('id', $id)->delete()) {
                unlink(str_replace('http://inxiang.net/', ROOT_PATH.DS.'public'.DS, $path)); 
                echo "<script>alert('删除成功');
                    window.opener=null;
                    window.open('','_self');window.close();
                    </script>";
                return $this->redirect('http://inxiang.net/user');
            } else {
                echo "<script>alert('删除失败'); history.back();</script>";
            }
        }
    }

    public function down() {
        header('Content-Type:application/octet-stream;');
        $id = input('id');
        $path = G::where('id', $id)->value('path');
        if (strtoupper(substr(PHP_OS,0,3))==='WIN') {
            // in windows
            $path = str_replace('/', '\\', str_replace('http://inxiang.net/', ROOT_PATH.DS.'public'.DS, $path));
            $name = uniqid().rand(1,1024).'.jpg';
            $fs = filesize($path);
            $fp = fopen($path, 'r');
            header("Content-Disposition:attachment; filename=$name");
            $buffer = 1024;
            $i = 0;

            while (!feof($fp) && ($fs - $i > 0)) {
                $data = fread($fp, $buffer);
                $i += $buffer;
                echo $data;
            }
            fclose($fp);
        } else {
            // in linux
            $path = str_replace('http://inxiang.net/', ROOT_PATH.DS.'public'.DS, $path);
            $name = uniqid().rand(1,1024).'.jpg';
            $fs = filesize($path);
            $fp = fopen($path, 'r');
            header("Content-Disposition:attachment; filename=$name");
            $buffer = 1024;
            $i = 0;

            while (!feof($fp) && ($fs - $i > 0)) {
                $data = fread($fp, $buffer);
                $i += $buffer;
                echo $data;
            }
            fclose($fp);
        }
    }
}
?>
