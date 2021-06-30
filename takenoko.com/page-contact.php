<?php
/**
* Template Name: Contactページ
*/
?>
<?php get_header(); ?>
  <main class="main">
    <div class="title-wrapper">
      <h1 class="util-title">Contact</h1>
      <div class="title-wrapper-picture">
        <img src="<?php echo get_template_directory_uri() ?>/img/email.png" alt="about">
      </div>
    </div>
    <?php if( function_exists( 'bcn_display' ) ) : ?>
      <div class="breadcrumb inner">
        <?php bcn_display(); ?>
      </div><!-- /.breadcrumb -->
    <?php endif; ?>
    <div class="contact-wrapper inner">
      <p class="contact-top wow fadeIn" data-wow-delay=".3s">こちらは、Webサイト制作・ECサイト構築の<br class="is-pc">ご相談、ご依頼の窓口となります。</p>
      <form id="form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSczGu9P_7JtzTbq9rB3ho9JRaqP0mrmdEAuCjNHPhUg7OYplA/formResponse" class="contact-form wow fadeIn" data-wow-delay=".3s" method="post">
        <dl class="contact-list">
          <div class="contact-item">
            <dt class="contact-item-title">
              <p class="contact-item-title-left">お名前</p>
            </dt>
            <dd class="contact-item-input">
              <input type="text" name="entry.963543399" required>
            </dd>
          </div>
          <div class="contact-item">
            <dt class="contact-item-title">
              <p class="contact-item-title-left">メールアドレス</p>
            </dt>
            <dd class="contact-item-input">
              <input type="email" name="emailAddress" required>
            </dd>
          </div>
          <div class="contact-item">
            <dt class="contact-item-title">
              <p class="contact-item-title-left">お問い合わせ内容</p>
            </dt>
            <dd class="contact-item-input">
              <textarea name="entry.93600595" required></textarea>
            </dd>
          </div>
        </dl>
        <div class="contact-footer">
          <div class="contact-footer-submit">
            <button class="util-link -submit" type="submit">送信する</button>
          </div>
        </div>
      </form>
      <div class="end-message">
        <p id="js-success">お問い合わせありがとうございました!</p>
        <a href="#" class="util-link">TOPに戻る</a>
      </div>
      
      <p id="js-error" class="false-message -error">送信に失敗しました。</p>
    </div>
  </main>
  <?php get_footer(); ?>