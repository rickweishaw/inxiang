<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Image;
use app\index\model\User as UserModel;
use app\index\model\Gallery as GalleryModel;

class Post extends Controller
{
    public function index() {
        $upload = array();
        $upload['author'] = cookie('name');
        $upload['desc'] = input('content');
        $upload['path'] = self::Upload(input('base64'));
        $upload['curTime'] = date('Y-m-d H:i:s');
        $id = UserModel::where('nickname', cookie('name'))->value('id');

        if (db('gallery')->data(['author'=>$upload['author'],'author_id'=>$id,'path'=>$upload['path'],
            'desc'=>$upload['desc'],'upload_time'=>$upload['curTime']])->insert()) {
            return $this->success('上传成功', 'http://inxiang.net');
        } else { return $this->error('上传失败'); }
    }

    public function Upload($img) {
        $filePath = ROOT_PATH . 'public' . DS . 'upload' . DS . 'gallery';
        $dbPath = 'http://inxiang.net/upload/gallery';
        if (!file_exists($filePath)) mkdir($filePath, '0777', true);
        $base64 = str_replace('', '+', $img);
        // Judge the upload file is base64 or not
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64, $result)) {
            ($result[2] == 'jpeg') ? $name = uniqid().'.jpg' : $name = uniqid().'.'.$result[2];
            $file = $filePath.DS.$name;
            $paths = $dbPath.'/'.$name;

            if (file_put_contents($file, base64_decode(str_replace($result[1], '', $base64)))){
                // When it uploaded and not square, just crop it!!
                $crop = Image::open($file);
                if ($crop->width() != $crop->height()) {
                    $cName = uniqid().'.'.$result[2];
                    $cFile = $filePath.DS.$cName;
                    $dbCFile = $dbPath.'/'.$cName;
                    $crop->thumb(420, 420, Image::THUMB_CENTER) -> save($cFile);
                    unlink($file);
                    return $dbCFile;
                } else {
                    $cName = uniqid().'.'.$result[2];
                    $cFile = $filePath.DS.$cName;
                    $dbCFile = $dbPath.'/'.$cName;
                    $crop->thumb(420, 420)->save($cFile);
                    unlink($file);
                    return $dbCFile;
                }
            } else { return $this->error('文件保存时出错'); }

        } else { return $this->error('base64编码出错，或者没有上传图片'); }
    }
}
?>