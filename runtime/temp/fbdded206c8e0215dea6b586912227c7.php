<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"H:\WWW\inx\public/../application/index\view\detail\detail.html";i:1554025644;}*/ ?>
<!DOCTYPE html>
<html lang="cmn-hans">
<head>
  <link rel="shortcut icon" href="http://inxiang.net/favicon.ico" type="image/x-icon">
  <link href="https://cdn.bootcss.com/pure/1.0.0/pure-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://at.alicdn.com/t/font_1040527_wzrwok8gl3.css">
  <link rel="stylesheet" href="http://inxiang.net/static/css/detail.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="http://inxiang.net/static/js/detail.js" defer></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>小印相 - 印记出相</title>
</head>
<body>
    <div class="pure-g container">
      <div class="pure-u-16-24 display"><img src="<?php echo $item['path']; ?>"></div>
      <aside class="pure-u-8-24">
        <div class="user">
          <img src="<?php echo $avatar; ?>"><span><?php echo $item['author']; ?></span>
          <span>上传于 <?php echo $item['upload_time']; ?></span>
        </div>
        <p><?php echo $item['desc']; ?></p>


        <div class="pure-menu pure-menu-horizontal action">
            <ul class="pure-menu-list">
              <li class="pure-menu-item"><a href="detail/friend?id=<?php echo $aid; ?>" class="pure-menu-link">加关注</a></li>
              <li class="pure-menu-item"><a href="detail/down?id=<?php echo $item['id']; ?>" class="pure-menu-link">另存为</a></li>
              <li class="pure-menu-item"><a href="detail/del?id=<?php echo $item['id']; ?>" class="pure-menu-link">删除</a></li>

            </ul>
        </div>
      </aside>
    </div>
</body>
</html>