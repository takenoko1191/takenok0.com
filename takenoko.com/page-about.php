<?php
/**
* Template Name: Aboutページ
*/
?>
<?php get_header(); ?>
  <main class="main">
    <div class="title-wrapper">
      <h1 class="util-title">About</h1>
      <div class="title-wrapper-picture">
        <img src="<?php echo get_template_directory_uri() ?>/img/business.png" alt="about">
      </div>
    </div>
    <?php if( function_exists( 'bcn_display' ) ) : ?>
      <div class="breadcrumb inner">
        <?php bcn_display(); ?>
      </div><!-- /.breadcrumb -->
    <?php endif; ?>
    <div class="about-wrapper inner">
      <div class="about-box">
        <div class="about-picture wow fadeInLeft" data-wow-delay=".3s">
          <img src="<?php echo get_template_directory_uri() ?>/img/Web.png" alt="webサイト制作">
        </div>
        <div class="about-message wow fadeInRight" data-wow-delay=".3s">
          <p class="about-message-title">Self Introduction</p>
          <p class="about-message-text">東京都世田谷区を拠点として、Webサイト制作や『Shopify』を使用したECサイト構築を行なっております。ランディングページから『Wordpress』をしようしたCMSまで、お客様、お店のイメージに合わせたサイトを制作ならおまかせください！</p>
        </div>
      </div>
      <div class="about-box box-reverse">
        <div class="about-picture wow fadeInRight" data-wow-delay=".4s">
          <img src="<?php echo get_template_directory_uri() ?>/img/app_development.png" alt="webサイト制作">
        </div>
        <div class="about-message wow fadeInLeft" data-wow-delay=".4s">
          <p class="about-message-title">事業主：</p>
          <p class="about-message-text">竹川　陽紀　Takekawa Haruki</p>
          <p class="about-message-title">お問い合わせ：</p>
          <p class="about-message-text"> takenok0.hrk@gmail.com</p>
          <p class="about-message-title">事業内容： </p>
          <p class="about-message-text">Wordpress制作、ECサイト構築、ECサイト「Setagaya Square」運営</p>
        </div>
      </div>
      <div class="section-footer wow fadeIn" data-wow-delay=".5s">
        <p class="section-footer-text">まずは、<span>無料</span>でお気軽にご相談ください。</p>
        <a href="<?php echo get_page_link(16);?>" class="util-link">無料相談する</a>
      </div>
    </div>
  </main>
  <?php get_footer();?>