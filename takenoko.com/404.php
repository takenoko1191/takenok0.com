<?php get_header(); ?>
  <main class="main">
    <?php if( function_exists( 'bcn_display' ) ) : ?>
      <div class="breadcrumb inner">
        <?php bcn_display(); ?>
      </div><!-- /.breadcrumb -->
    <?php endif; ?>
    <div class="page-404">
      <p class="page-404-title">404 NOT FOUND</p>
      <p class="page-404-text">お探しのページは見つかりませんでした。</p>
      <div class="page-404-picture">
        <img src="<?php echo get_template_directory_uri() ?>/img/error_404.png" alt="404ページ">
      </div>
      <div class="page-404-button">
        <a href="<?php echo home_url( '/' );?>" class="util-link">Homeへ戻る</a>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>