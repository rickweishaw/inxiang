<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"H:\WWW\inx\public/../application/index\view\index\index.html";i:1554083436;}*/ ?>
<!DOCTYPE html>
<html lang="cmn-hans">
<head>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_1040527_wzrwok8gl3.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="http://inxiang.net/static/js/index.js" defer></script>
  <link rel="stylesheet" href="http://inxiang.net/static/css/index.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>小印相 - 印记出相</title>
</head>
<body>
  <header>
    <a href="index"><img src="http://inxiang.net/static/img/inxiang.png"><h1>小印相</h1></a>
    <div class="pure-menu pure-menu-horizontal menu">
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" title="消息" class="pure-menu-link"><i class="iconfont icon-message"></i></a></li>
        <li class="pure-menu-item"><a href="#" title="发现" class="pure-menu-link"><i class="iconfont icon-discover"></i></a></li>
        <li class="pure-menu-item"><a href="user" title="用户" class="pure-menu-link"><i class="iconfont icon-user"></i></a></li>
      </ul>
    </div>
  </header>

  <div class="container pure-g">
    <div class="pure-u-15-24 post">
      <?php use app\index\model\User as U; if(is_array($work) || $work instanceof \think\Collection || $work instanceof \think\Paginator): $i = 0; $__LIST__ = $work;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
      <div class="work"> <!-- work begin -->
        <img src="<?php echo U::where('nickname', 'rcwei28')->value('avatar') ?>" class="avatar">
        <div class="user"><?php echo $item['author']; ?></div>
        <div class="pic">
          <img src="<?php echo $item['path']; ?>" alt="<?php echo $item['id']; ?>" title="点击图片查看详情">
        </div>
        <div class="pure-menu pure-menu-horizontal action">
          <ul class="pure-menu-list">
            <li class="pure-menu-item">
              <a href="#" title="点赞" class="pure-menu-link"><i class="iconfont icon-like"></i> 42</a>
            </li>
            <li class="pure-menu-item">
              <a href="#" title="评论" class="pure-menu-link"><i class="iconfont icon-comment"></i> 42</a>
            </li>
            <li class="pure-menu-item">
              <a href="#" title="转发" class="pure-menu-link"><i class="iconfont icon-forward"></i> 42</a>
            </li>
          </ul>
        </div>
        <div class="info-box">
          <p class="title"><span><?php echo $item['author']; ?></span><span style="display:inline-block;"><?php echo $item['desc']; ?></span></p>
          <p class="date-time"><?php echo $item['upload_time']; ?> 发布</p>
          <p class="comment"><span>xzx28</span><span>评论内容</span></p>
          <p class="more">加载更多评论</p>
          <hr>
          <form action="comment" method="post" class="pure-form comment">
            <img src="<?php echo $user['avatar']; ?>"> <input type="text" name="com_cnt" placeholder="添加评论...">
            <input type="submit" value="评论">
          </form>
        </div>
      </div> <!-- work end -->
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <aside class="pure-u-6-24">
      <a href="user" style="display: block;">
        <img class="avatar" src="<?php echo $user['avatar']; ?>">
        <div class="user"><?php echo $user['nickname']; ?></div><div class="bio"><?php echo $user['saying']; ?></div>
      </a>
      <div class="out-box">
        <p style="color: #2c83c4">有什么新鲜事想告诉大家?</p>
        <form action="index/post" method="post" class="pure-form">
          <input type="hidden" id="base64" name="base64" value="">
          <textarea name="content" id="content" placeholder="这一刻的想法..." title='按 "N" 输入内容'></textarea>
          <div class="up-img">
            <div><h4>图片上传</h4><span class="iconfont icon-no" title="返回"></span></div>
            <div><img id="img" src="http://inxiang.net/static/img/image.jpg"></div>
            <div><input type="file" id="i-upload" name="pics" accept="image/jpeg, image/png"></div>
          </div>

          <div class="pure-menu pure-menu-horizontal post-act">
            <ul class="pure-menu-list">
              <li class="pure-menu-item"><a href="#" title="表情，Win10可以按 [win+.] 调出Emoji面板"><i class="iconfont icon-face pure-menu-link"></i></a></li>
              <li class="pure-menu-item"><a id="showImg" title="图片"><i class="iconfont icon-pics pure-menu-link"></i></a></li>
              <li class="pure-menu-item"><a href="#" title="视频"><i class="iconfont icon-video pure-menu-link"></i></a></li>
              <li class="pure-menu-item"><a href="#" title="话题"><i class="iconfont icon-tag pure-menu-link"></i></a></li>
              <li class="pure-menu-item"><input type="submit" value="发布" class="pure-button pure-button-primary"></li>
            </ul>
          </div>
        </form>
      </div>
      <footer>
        <p>Copyright &copy; <a target="__blank" href="https://github.com/rcwei44">RCWei</a></p>
      </footer>
    </aside>
  </div>
</body>
</html>