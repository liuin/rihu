<!DOCTYPE html>
<html lang="zh-CN">
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="description" content="">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <title><?php if(isset($title)){echo $title;} ?></title>
</head>
<body class="yh <?php if(isset($pageClass)){echo 'page-'.$pageClass;} ?>">
  <noscript>
    <strong>你的浏览器似乎禁用了 JavaScript。</strong><br />您必须在浏览器中启用JavaScript才能使用本网站的功能。
  </noscript>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">广州领翔入户咨询 </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li <?php if(isset($title) && $title=='首页' ){ echo 'class="active"';}?> ><a href="index.php">首页</a></li>
          <li  class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">入户条件<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php#xl">学历入户</a></li>
              <li><a href="index.php#jn">技能入户</a></li>
              <li><a href="index.php#jf">积分入户</a></li>
            </ul>
          </li>
          <li <?php if(isset($title) && $title=='入户信息' ){ echo 'class="active"';}?>><a href="news.php">入户信息</a></li>
          <li <?php if(isset($title) && $title=='关于我们' ){ echo 'class="active"';}?>><a href="aboutus.php">关于我们</a></li>          

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><span class="tel">咨询电话：<span class="sp1">15915729856</span></span></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>