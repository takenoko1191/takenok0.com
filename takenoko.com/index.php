<?php get_header(); ?>
  <main class="main">
    <div class="top">
      <div class="top-content inner wow fadeIn">
        <p class="top-message-title"><span class="span-white"><span class="span-purple">Web</span>サイト制作・<span class="span-purple">EC</span>サイト構築</span><br class="is-pc"><span class="span-white">を行なっています。</span></p>
        <div class="top-picture is-pc">
          <img src="<?php echo get_template_directory_uri() ?>/img/seo.png" alt="top画像">
        </div>
        <div class="top-footer">
          <p class="top-footer-text is-pc">まずは、お気軽に<span class="span-purple">無料</span>相談ください！</p>
          <a href="<?php echo get_page_link(16);?>" class="util-link">無料相談する</a>
        </div>
      </div>
    </div>
    <section class="service inner section" id="service">
      <h2 class="util-title">Service</h2>
      <div class="service-box wow fadeInUp" data-wow-delay=".3s">
        <div class="service-picture">
          <img src="<?php echo get_template_directory_uri() ?>/img/coding.png" alt="webサイト制作">
        </div>
        <div class="service-message">
          <p class="service-message-title">Webサイト制作</p>
          <p class="service-message-text"><b>「詳しくはないが、良い感じのWebサイトを作りたい」</b>という想いにお応えいたします。お客様の要望をヒアリングを通して、イメージのすり合わせを行います。また、ご要望に100％お応えするだけでなく、費用対効果の高いWebサイトをご提案させていただきます。</p>
          <ul class="service-message-list">
            <li class="service-message-item">HTML</li>
            <li class="service-message-item">SCSS（CSS）</li>
            <li class="service-message-item">jQuery</li>
            <li class="service-message-item">Wordpress</li>
            <li class="service-message-item">Photoshop</li>
            <li class="service-message-item">AdobeXD</li>
            <li class="service-message-item">20個の品質チェック（W3Cなど）</li>
          </ul>
          <?php
            $term = get_terms('genre');
            ?>
          <div class="service-message-link">
            
            <a href="<?php echo get_term_link($term[1]); ?>" class="util-link wow fadeIn" data-wow-delay="1.0s">実績を見る</a>
          </div>
        </div>
      </div>
      <div class="service-box box-reverse wow fadeInUp" data-wow-delay=".3s">
        <div class="service-picture">
          <img src="<?php echo get_template_directory_uri() ?>/img/online_shopping.png" alt="ECサイト構築">
        </div>
        <div class="service-message">
          <p class="service-message-title">ECサイト構築</p>
          <p class="service-message-text">従来では、ECサイトを構築するためには1,000万円以上は最低限必要でしたが、<b>「Shopify」</b>を利用することで、<b>比較的低価格、短期間</b>で構築することが可能になりました。自身でもECサイト運営経験があるため、初期段階での売り上げを伸ばす手順等、ご相談ください。</p>
          <ul class="service-message-list">
            <li class="service-message-item">Shopfy</li>
          </ul>
          <div class="service-message-link">
            <a href="<?php echo get_term_link($term[0]); ?>" class="util-link">実績を見る</a>
          </div>
        </div>
      </div>
      <div class="section-footer">
        <p class="section-footer-text">まずは、<span class="span-purple">無料</span>でお気軽にご相談ください。</p>
        <a href="<?php echo get_page_link(16);?>" class="util-link wow fadeIn">無料相談する</a>
      </div>
    </section>
    <!-- /.service -->
  </main>
  <?php get_footer(); ?>