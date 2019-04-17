<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"H:\WWW\inx\public/../application/user\view\index\user.html";i:1554025644;}*/ ?>
<!DOCTYPE html>
<html lang="cmn-hans">
<head>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_1040527_wzrwok8gl3.css">
  <link rel="stylesheet" href="http://inxiang.net/static/css/user.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="http://inxiang.net/static/js/user.js" defer></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>小印相 - 印记出相</title>
</head>

<body>
  <header>
    <img src="http://inxiang.net/static/img/inxiang.png"><a href="http://inxiang.net"><h1>小印相</h1></a>
    <div class="pure-menu pure-menu-horizontal menu">
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link"><i class="iconfont icon-message"></i></a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link"><i class="iconfont icon-discover"></i></a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link"><i class="iconfont icon-user"></i></a></li>
      </ul>
    </div>
  </header>

  <div class="container">
    <div class="info">
      <div class="avatar"><img src="<?php echo $avatar; ?>"></div>
      <div class="desc">
        <p>
          <span><?php echo $name; ?></span>
          <a href="account" id="edit">编辑主页</a>
          <span><a id="setting"><i class="iconfont icon-setting"></a></i></span></p>
        <p><span>15 帖子</span><span>44 粉丝</span><span><a href="user/follow">关注 49</a></span></p>
        <p><?php echo $saying; ?></p>
      </div>
    </div>

    <div class="gallery">
        <p>帖子</p>
        <?php if(is_array($gallery) || $gallery instanceof \think\Collection || $gallery instanceof \think\Paginator): $i = 0; $__LIST__ = $gallery;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
          <div class="item"><img src="<?php echo $item['path']; ?>" title="<?php echo $item['id']; ?>"></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>

  <div class="setting pure-menu">
    <ul class="pure-menu-list">
      <li class="pure-menu-heading">帐户设置</li>
      <li class="pure-menu-item"><a href="account" class="pure-menu-link">编辑主页</a></li>
      <li class="pure-menu-item"><a href="user/logout" class="pure-menu-link">退出</a></li>
      <li class="pure-menu-item"><a class="pure-menu-link cancel">取消</a></l>
  </ul>
  </div>
</body>
</html>