<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
<body class="drawer drawer--right">
<div id="splash">
    <div id="splash_text"></div>
    <div class="loader_cover loader_cover-up"></div>
    <div class="loader_cover loader_cover-down"></div>
  </div>
  <header class="header">
    <div class="header-inner inner">
      <div class="header-logo">
        <?php if (is_home() || is_front_page() ) : //トップページではロゴをh1に、それ以外のページではdivに。 ?>
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/takenoko-logo.png" alt="takenoko.com"></a></h1><!-- /header-logo -->
        <?php else : ?>
        <div><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/takenoko-logo.png" alt="takenoko.com"></a></div><!-- /header-logo -->
        <?php endif; ?>
      </div>
      <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button>
      <nav class="drawer-nav header-nav">
        <ul class="drawer-menu header-nav-list">
          <li class="header-nav-item">
            <a class="header-nav-item-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-item-link" href="<?php echo esc_url( home_url( '/' ) ); ?>#service">Service</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-item-link" href="<?php echo get_page_link(14);?>">About</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-item-link" href="<?php echo get_post_type_archive_link( 'works' ); ?>">Works</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-item-link" href="<?php echo get_page_link(16);?>"><div class="header-nav-contact">Contact</div></a>
          </li>
        </ul>
      </nav>
    </div>
  </header>