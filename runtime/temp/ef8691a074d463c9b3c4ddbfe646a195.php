<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"H:\WWW\inx\public/../application/register\view\index\reg.html";i:1554025644;}*/ ?>
<!DOCTYPE html>
<html lang="cmn-hans">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://inxiang.net/static/css/reglogin.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="http://inxiang.net/static/js/common.js" defer></script>
  <script src="http://inxiang.net/static/js/register.js" defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>小印相 - 印记出相</title>
</head>
<body>
  <div class="container">
    <header>
      <img src="http://inxiang.net/static/img/inxiang.png"><h1>小印相</h1>
    </header>
    <form action="register/post" method="post" autocomplete="off">
      <dl>
        <dt>注册小印相，分享新视界</dt>
        <dd><input type="email" name="email" placeholder="电子邮箱" required></dd>
        <dd><input type="text" id="name" name="nickname" title="昵称允许最长8个字符, 最短2个字符。" placeholder="昵称" required></dd>
        <dd>
          <input type="password" id="pwd" name="password" title="密码允许最长12个字符，最短6个字符。" placeholder="密码" required>
          <span class="display">显示</span></dd>
        <dd><input type="submit" value="注册"></dd>
        <dd>注册即表示你同意我们的 <a href="#">条款</a> 、 <a href="#">数据使用政策 </a> 和 <a href="#">Cookie 政策</a>。</dd>
      </dl>
    </form>
  </div>

  <div class="switcher">已有帐号？&nbsp;<a href="login">登录</a></div>
</body>
</html>