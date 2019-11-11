<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body>
<header>
    <!-- スマホ用ハンバーガーメニュー -->
    <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
          <!-- メニューの中身 -->
          <div class="sm-menu-wrapper">
            <div class="sm-menus">
              <div class="sm-menu"><a href="#menu-news">NEWS</a></div>
              <div class="sm-menu"><a href="#menu-concept">CONCEPT</a></div>
              <div class="sm-menu"><a href="#menu-menu">MENU</a></div>
              <div class="sm-menu"><a href="#menu-shop">SHOP</a></div>
            </div>
          </div>
        </div>
    </div>

  <div class="header-images">
    <div class="header-inner">
      <div class="main-image-wrap">
        <h1><img class="main-image" src="<?php echo get_template_directory_uri(); ?>/img/header-main-img.png" alt="dotCafe" ></h1>
        <p>2019/9/20<span>秋葉原にOPEN!!</span></p>
      </div>
      <img class="header-main-tapioka" src="<?php echo get_template_directory_uri(); ?>/img/dotcafe-タピオカ.png" alt="タピオカ">
      <div class="nav-wrapper">
          <div class="header-logo"><img class="header-logo-img" src="<?php echo get_template_directory_uri(); ?>/img/dotcafe_logo-1.png" alt="dotCafe"></div>
          <div class="nav-bar">
            <div class="nav">NEWS</div>
            <div class="nav">CONCEPT</div>
            <div class="nav">MENU</div>
            <div class="nav">SHOP</div>
          </div>
      </div>
    </div>
  </div>
</header>