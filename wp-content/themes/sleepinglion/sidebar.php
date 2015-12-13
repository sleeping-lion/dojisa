<aside class="col-lg-3 visible-lg">
  <div id="current_post">
    <h3>최신글</h3>
    <?php $query = new WP_Query(array('posts_per_page' => 5) ); ?>
    <?php if ( $query->have_posts()): ?>
    <ul>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php get_template_part('side_content'); ?>
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>
    <?php else: ?>
    <p>
      <?php __('No Article','sleepinglion') ?>
    </p>
    <?php endif ?>
  </div>
  <div id="menu_link">
    <h3>홍보배너</h3>
    <?php require ABSPATH.'wp-content'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'aside_menu.html' ?>
  </div>
  <div id="side_banner">
    <p> <a href="http://27.101.100.158/propose" title="도지사에게 바란다"> <img src="/wp-content/themes/sleepinglion/images/banner_propose.jpg" width="262" height="260" alt="" class="img-responsive" /> </a></p>
    <p><a href="http://www.gg.go.kr/vilage_making" title="새창으로 열림(따복 공동체)" target="_blank"> <img src="/wp-content/themes/sleepinglion/images/banner_vilage.jpg" width="262" height="260" alt="" class="img-responsive" /> </a></p>
    <p><a href="http://invest.gg.go.kr" title="새창으로 열림(투자유치)"  target="_blank"> <img src="/wp-content/themes/sleepinglion/images/banner_invest.jpg" width="262" height="260" alt="" class="img-responsive" /></a> </p>
  </div>
</aside>
