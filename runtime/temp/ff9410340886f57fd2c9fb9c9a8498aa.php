<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"H:\WWW\inx\public/../application/account\view\index\account.html";i:1554083089;}*/ ?>
<!DOCTYPE html>
<html lang="cmn-hans">
<head>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_1040527_wzrwok8gl3.css">
  <link rel="stylesheet" href="http://inxiang.net/static/css/account.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="http://inxiang.net/static/js/account.js" defer></script>
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
    <aside class="left-nav pure-u-1-5 pure-menu">
      <ul class="pure-menu-list">
        <li class="pure-menu-item active"><a id="showEdit" class="pure-menu-link">编辑主页</a></li>
        <li class="pure-menu-item"><a id="showPwd" class="pure-menu-link">更改密码</a></li>
        <li class="pure-menu-item"><a id="showEmail" class="pure-menu-link">更改邮箱</a></li>
        <li class="pure-menu-item"><a class="pure-menu-link showAvatar">更改头像</a></li>
      </ul>
    </aside>

    <div class="main edit pure-u-4-5">
      <div class="profile">
        <div class="avatar"><img src="<?php echo $avatar; ?>"></div>
        <div class="info">
          <span><?php echo $name; ?></span>
          <span><a class="showAvatar">更改头像</a></span>
        </div>
      </div>

      <form action="account/update" class="pure-form pure-form-aligned" method="POST" autocomplete="off">
        <fieldset>
          <div class="pure-control-group">
            <label for="name">昵称</label>
            <input class="pure-input-1-2" name="nickname" id="name" type="text" value="<?php echo $name; ?>">
          </div>

          <div class="pure-control-group">
            <label for="saying">个性签名</label>
            <input class="pure-input-1-2" name="saying" id="saying" type="text" value="<?php echo $saying; ?>">
          </div>

          <div class="pure-control-group">
            <label for="phone">电话号码</label>
            <input class="pure-input-1-2" name="phone" id="phone" type="tel" value="<?php echo $phone; ?>">
          </div>

          <div class="pure-control-group">
            <label>性别</label>
            <?php switch($gender): case "0": ?>
                <input type="radio" name="gender" value="0" checked>男&emsp;
                <input type="radio" name="gender" value="1">女
              <?php break; case "1": ?>
                <input type="radio" name="gender" value="0">男&emsp;
                <input type="radio" name="gender" value="1" checked>女
              <?php break; endswitch; ?>
          </div>

          <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">提交更改</button>
          </div>
        </fieldset>
      </form>
    </div>

    <div class="main password pure-u-4-5">
      <form action="account/password" class="pure-form pure-form-aligned" method="post" autocomplete="off">
        <fieldset>
          <div class="pure-control-group">
            <label for="email">当前邮箱</label><input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
          </div>

          <div class="pure-control-group">
            <label for="captcha">验证码</label>
            <input type="text" name="captcha" title="输入前请点击 “获取验证码” 按钮" required>
          </div>

          <div class="pure-control-group"><a href="account/captcha" class="pure-button btn-2nd">获取验证码</a></div>

          <div class="pure-control-group">
            <label for="password">新密码</label>
            <input type="password" name="password" id="password" required>
            <span class="show">显示</span>
          </div>

          <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">更改密码</button>
          </div>
      </fieldset>
      </form>
    </div>

    <div class="main email pure-u-4-5">
      <form action="account/email" class="pure-form pure-form-aligned" method="post" autocomplete="off">
        <fieldset>
          <div class="pure-control-group">
            <label for="old">当前邮箱</label><input type="email" id="old" name="email" value="<?php echo $email; ?>" disabled>
          </div>

          <div class="pure-control-group">
            <label for="new">新邮箱地址</label>
            <input id="new" type="email" name="new" title="输入新的邮箱地址" required>
          </div>

          <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">更改邮箱</button>
          </div>
      </fieldset>
      </form>
    </div>

    <div class="main c-avatar pure-u-4-5">
      <form action="account/avatar" class="pure-from pure-g" method="post">
        <input type="hidden" name="base64" id="base64" value="">
        <div class="pure-u-12-24">
          <img src="http://inxiang.net/static/img/upload.png">
          <input id="upload" type="file" name="avatar" accept="image/jpeg, image/png">
          <p>上传头像</p>
        </div>
        <div class="display pure-u-12-24" style="position:relative;bottom:18px;">
          <img id="avatar" src="<?php echo $avatar; ?>">
          <p>头像预览</p>
        </div>
        <div class="pure-u-24-24">
          <p>允许上传 2M 以内的 .jpg 或 .png 格式的图像文件</p>
          <input type="submit" value="更改" class="pure-button pure-button-primary">
        </div>
      </form>
    </div>
  </div>
</body>
