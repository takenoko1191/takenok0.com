<footer class="footer">
      <a href="#" class="footer-top">
        <div class="footer-top-arrow"><i class="fas fa-arrow-alt-circle-up"></i></div>
        <p class="footer-top-text">Back to Top</p>
      </a>
    <ul class="footer-nav-list inner">
      <li class="footer-nav-item">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-nav-link">Home</a>
      </li>
      <li class="footer-nav-item">
        <a class="footer-nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>#service">Service</a>
      </li>
      <li class="footer-nav-item">
        <a class="footer-nav-link" href="<?php echo get_page_link(14);?>">About</a>
      </li>
      <li class="footer-nav-item">
        <a class="footer-nav-link" href="<?php echo get_post_type_archive_link( 'works' ); ?>">Works</a>
      </li>
      <li class="footer-nav-item">
        <a class="footer-nav-link" href="<?php echo get_page_link(16);?>">Contact</a>
      </li>
    </ul>
    <p class="footer-copyrights"><small>takenoko.com All rights reserved.</small></p>
  </footer>
  <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>