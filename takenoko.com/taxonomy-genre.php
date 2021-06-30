<?php get_header(); ?>
  <main class="main">
    <div class="title-wrapper">
      <h1 class="util-title">Works</h1>
      <div class="title-wrapper-picture">
        <img src="<?php echo get_template_directory_uri() ?>/img/workspace.png" alt="about">
      </div>
    </div>
    <?php if( function_exists( 'bcn_display' ) ) : ?>
      <div class="breadcrumb inner">
        <?php bcn_display(); ?>
      </div><!-- /.breadcrumb -->
    <?php endif; ?>
    <div class="work-wrapper inner">
      <ul class="work-cat-list wow fadeInLeft">
          <li class="work-item">
            <a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>" class="work-item-link is-active">すべて</a>
          </li>
          <?php
          $genre_terms = get_terms( 'genre', array( 'hide_empty' => false ) );
          foreach ( $genre_terms as $genre_term ) :
          ?>
          <li class="work-item">
            <a href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>" class="work-item-link"><?php echo esc_html( $genre_term->name ); ?></a>
          </li>
          <?php
            endforeach;
          ?>
        </ul>
      <div class="work-title wow fadeIn" data-wow-delay=".4s">
      <?php 
        $my_terms = get_queried_object();
        echo $my_terms->name; 
      ?></div>

      <?php
        if ( have_posts() ) :
      ?>
      <div class="work-list">
      <?php
        while ( have_posts() ) :
          the_post();
      ?>
          <article class="work-box wow fadeInUp" data-wow-delay=".4s">
            <div class="work-box-wrapper">
              <div class="work-picture">
                <img src="<?php the_field( 'img' ); ?>" alt="webサイト制作">
              </div>
              <div class="work-message">
                <p class="work-message-title"><?php the_field( 'name' ); ?></p>
                <p class="work-message-text"><?php the_field( 'description' ); ?></p>
                <p class="work-message-title">使用技術</p>
                <p class="work-message-text"><?php the_field( 'skills' ); ?></p>
                <div class="work-button">
                  <a href="<?php the_field( 'url' ); ?>" class="util-link work-button">このサイトを見る</a>
                </div>
              </div>
            </div>
          </article>
          <?php
          endwhile;
          ?>
          
      </div>
      <?php get_template_part('template-parts/pagination'); ?>
      <?php endif; ?>
    </div>
    <div class="section-footer">
      <p class="section-footer-text">まずは、<span class="span-purple">無料</span>でお気軽にご相談ください。</p>
      <a href="<?php echo get_page_link(16);?>" class="util-link">無料相談する</a>
    </div>
  </main>
  <?php get_footer(); ?>