<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"H:\WWW\inx\public/../application/chat\view\index\chat.html";i:1554164935;}*/ ?>
<!DOCTYPE html>
<html lang="cmn-hans">
<head>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_1040527_wzrwok8gl3.css">
  <link rel="stylesheet" href="http://inxiang.net/static/css/mkChatBox.css">
  <link rel="stylesheet" href="http://inxiang.net/static/css/chat.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="http://inxiang.net/static/js/chat.js" defer></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>小印相 - 印记出相</title>
</head>
<body>
  <div class="container">
    <div class="chat-user">RCWei28</div> 
    <i class="iconfont icon-no" id="exit" title="返回上一页面"></i>
    <div class="mk-chat-box">
      <div class="left msg">
        <div class="avatar"></div>
        <span class="name">路人甲</span>
        <span class="content">什么是孟坤聊天气泡框架？</span>
      </div>
    
      <div class="right msg">
        <div class="avatar"></div>
        <span class="name">孤帆远影</span>
        <span class="content">孟坤聊天气泡框架是一个简洁、直观、强悍的聊天界面前端开发框架，它能让html聊天界面的开发更迅速、简单。</span>
      </div>
    
      <div class="left msg">
        <div class="avatar"></div>
        <span class="name">路人甲</span>
        <span class="content">它都兼容哪些浏览器呢？</span>
      </div>
      
      <div class="right msg">
        <div class="avatar"></div>
        <span class="name">孤帆远影</span>
        <span class="content">理论上兼容所有浏览器！</span>
      </div>
    </div>
    <div class="btm-box">
      <form action="#" method="post" class="pure-form">
        <textarea name="content" id="editor" autofocus></textarea>
        <div class="pure-menu pure-menu-horizontal btns">
          <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="#" class="pure-menu-link" title="表情"><i class="iconfont icon-face"></i></a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link" title="图片"><i class="iconfont icon-pics"></i></a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link" title="更多"><i class="iconfont icon-more"></i></a></li>
          </ul>

          <button type="submit" class="pure-button pure-button-primary">发送</button>
          <p class="tips">按下 Enter 换行，Ctrl+Enter 发送</p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>