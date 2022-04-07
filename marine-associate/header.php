<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header-inner">
      <a href="<?php bloginfo('url'); ?>/">
        <div class="p-header-titleBox">
          <div href="#" class="l-header-title p-header-title c-header-title">
            <span>MARINE</span>
            <span>ACTIVITY</span>
            <span>ASSOCIATION</span>
          </div><!-- /p-header-title -->
          <div class="p-header-subtitle u-hidden-sp">
            <p>一般社団法人<span>渋川マリンアクティビティ協会</span></p>
          </div><!-- /p-header-subtitle -->
        </div><!-- /p-header-titleBox -->
      </a>
      <div class="p-header__box js-drawer-menu u-hidden-sp ">
        <ul class="p-header-menu__items">
          <li class="l-header-menu__item p-header-menu__item">
            <a href="<?php bloginfo('url'); ?>/about">ABOUT<span>私たちの想い</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-header-menu__item p-header-menu__item">
            <a href="<?php bloginfo('url'); ?>/works">WORKS<span>活動実績</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-header-menu__item p-header-menu__item">
            <a href="<?php bloginfo('url'); ?>/projects">PROJECT<span>実施事業</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-header-menu__item p-header-menu__item">
            <a href="<?php bloginfo('url'); ?>/sponser">SPONSER<span>スポンサー</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-header-menu__item p-header-menu__item">
            <a href="<?php bloginfo('url'); ?>/news">NEWS<span>新着情報</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-header-menu__item p-header-menu__item">
            <a href="<?php bloginfo('url'); ?>/access">ACCESS<span>アクセス</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-header-menu__item p-header-menu__contact">
            <a href="<?php bloginfo('url'); ?>/contact">CONTACT<span>お問い合わせ</span></a>
          </li><!-- /p-drawer-menu__item -->
        </ul><!-- /p-drawer-menu__items -->
      </div>
      <div class="p-header__overlay js-overlay"></div><!-- /p-header__overlay -->
      <div class="p-hamburger c-hamburger js-hamburger u-hidden-pc">
        <div class="c-hamburger-line">
          <span></span>
          <span></span>
          <span></span>
        </div><!-- /c-hamburger-line -->
      </div><!-- /p-hamburger -->
      <div class="p-header__menu p-drawer__menu js-drawer-menu">
        <ul class="p-drawer-menu__items">
          <li class="l-drawer-menu__item p-drawer-menu__item">
            <a href="<?php bloginfo('url'); ?>/about">ABOUT<span>私たちの想い</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-drawer-menu__item p-drawer-menu__item">
            <a href="<?php bloginfo('url'); ?>/works">WORKS<span>活動実績</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-drawer-menu__item p-drawer-menu__item">
            <a href="<?php bloginfo('url'); ?>/projects">PROJECT<span>実施事業</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-drawer-menu__item p-drawer-menu__item">
            <a href="<?php bloginfo('url'); ?>/sponser">SPONSER<span>スポンサー</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-drawer-menu__item p-drawer-menu__item">
            <a href="<?php bloginfo('url'); ?>/news">NEWS<span>新着情報</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-drawer-menu__item p-drawer-menu__item">
            <a href="<?php bloginfo('url'); ?>/access">ACCESS<span>アクセス</span></a>
          </li><!-- /p-drawer-menu__item -->
          <li class="l-drawer-menu__item p-drawer-menu__item">
            <a href="<?php bloginfo('url'); ?>/contact">CONTACT<span>お問い合わせ</span></a>
          </li><!-- /p-drawer-menu__item -->
        </ul><!-- /p-drawer-menu__items -->
      </div><!-- /p-header__menu -->
    </div><!-- /p-header__inner -->
  </header>


  