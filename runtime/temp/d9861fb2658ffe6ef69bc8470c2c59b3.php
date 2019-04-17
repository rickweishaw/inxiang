<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"H:\WWW\inx\public/../application/user\view\follow\follow.html";i:1553565182;}*/ ?>
<!DOCTYPE html>
<html lang="cmn-hans">
<head>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_1040527_wzrwok8gl3.css">
  <link rel="stylesheet" href="http://inxiang.net/static/css/follow.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="http://inxiang.net/static/js/follow.js" defer></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>小印相 - 印记出相</title>
</head>

<body>
  <header>
    <img src="http://inxiang.net/static/img/inxiang.png"><a href="index"><h1>小印相</h1></a>
    <div class="pure-menu pure-menu-horizontal menu">
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link"><i class="iconfont icon-message"></i></a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link"><i class="iconfont icon-discover"></i></a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link"><i class="iconfont icon-user"></i></a></li>
      </ul>
    </div>
  </header>

  <div class="container">
    <div class="pure-menu pure-menu-horizontal heading">
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">关注</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">粉丝</a></li>
      </ul>
    </div>

    <?php use app\user\model\User as U; if(is_array($followed) || $followed instanceof \think\Collection || $followed instanceof \think\Paginator): $i = 0; $__LIST__ = $followed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;$info = U::where('nickname', $item)->find(); ?>
    <div class="friend">
      <div class="avatar"><img src="<?php echo $info['avatar']; ?>"></div>
      <div><p><?php echo $info['nickname']; ?></p><p><?php echo $info['saying']; ?></p></div>
      <div class="pure-menu pure-menu-horizontal action">
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="friend?id=<?php echo $info['id']; ?>" class="pure-menu-link">已关注</a></li>
          <li class="pure-menu-item"><a href="chat?id=<?php echo $info['id']; ?>" class="pure-menu-link">私信</a></li>
        </ul>
      </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <p class="bottom">已经到底了...</p>
  </div>
</body>
</html>