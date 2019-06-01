# inxiang 小印相 图片分享网站

## 前言

以前就想将朋友圈和微博做成一块，把想法写进了网站，也是第一次独立开发的网站。呈现在大家面前的，这个年轻不懂事的网站，将会有怎样的故事呢？

## 如何使用本网站？

这个项目目前还没有发布到外网。如果觉得有兴趣看看这个网站怎么样的，可以在本地搭建 Apache+PHP+MySQL 环境（具体环境去到 [XAMPP](https://www.apachefriends.org/index.html) 进行下载安装）。

推荐最低使用 PHP5.0.4 环境，这是ThinkPHP5.0框架最低要求。再低就运行不了咯。

安装完环境就开始配置环境，把 Apache 的配置文件 http.conf （xampp\apache\conf\httpd.conf）的
```<Directory />``` 模块，改成如下形式。
```
<Directory />
    AllowOverride All
</Directory>
```

然后在 httpd-vhosts.conf 文件 （xampp\apache\conf\extra\httpd-vhosts.conf）添加虚拟主机
```
<VirtualHost *:80>
  ServerAdmin inxiang.net
  DocumentRoot "H:/WWW/inxiang/public" # 这里改成项目目录的位置
  ServerName inxiang.net
  <Directory "H:/WWW/inxiang/public"> # 这里改成项目目录的位置
    Options Indexes FollowSymLinks Includes ExecCGI
  </Directory>
</VirtualHost>
```

SQL 数据库文件在 install 文件夹里，新建 inxiang 数据库再导入即可。
最后在 host 文件 加上一行 ```127.0.0.1 inxiang.net``` 就可以在浏览器上输入 inxiang.net 访问了。


# License
Powered by RCWei

Licensed under the [GNU GPL3](LICENSE) License
