<?php get_header(); ?>
<!-- NEWS ==========================
====================================== -->
<section id="menu-news" class="news-wrapper">
  <div class="news-inner">
    <div class="news">
      <h2>NEWS</h2>
      <div class="news-box">
        <dl class="new">
        <?php
          $args = array(
            'category_name' => 'news', /* 投稿タイプを指定 */
            'paged' => $paged,
            'posts_per_page' => 3
            ); ?>
            <?php query_posts( $args ); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); 
            /* ループ開始 */ ?>
              <dt><?php the_time("Y/m/j"); ?></dt>
              <dd><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dd>
            <?php endwhile; ?>     
            <?php else : ?>
            <p>記事がありません</p>
            <?php endif; ?>
        </dl>
      </div>
      <div class="news-more"><p>Read more...</p></div>
    </div>
  </div>
</section>
<!-- CONCEPT==========================
====================================== -->
<section  id="menu-concept" class="concept-wrapper">
  <img class="concept-image" src="<?php echo get_template_directory_uri(); ?>/img/nathan-dumlao-j9ypmx-D7ek-unsplash.png" alt="茶葉の画像">
  <h2 class="concept-title">CONCEPT</h2>
  <p>まるいタピオカがそばにあるだけで、<span>ともだちとの会話がはずむ。</span><br>いつもあなたの手元に。</p>
  <p>最高級の茶葉を使ったミルクティーと、<span>出来立てもちもちのタピオカ。</span><br>こだわりの1杯を提供します。</p>
</section>
<!-- MENU==========================
====================================== -->
<section  id="menu-menu" class="menu-wrapper">
  <div class="menu-inner">
    <div class="menu-title-wrap">
      <h2 class="menu-title">MENU</h2>
    </div>
    <div class="menus-box">
      <?php $menus_post = array(
        'post_type' => 'shopmenu'
      ); ?>
      <?php $my_query = new WP_Query( $menus_post ); ?>
      <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class="menus">
          <img src="<?php echo get_field('tapioka_img');?>" alt="" class="menu-image">
            <div class="menu-descriptions">
                <h3><?php echo get_field('tapioka_name');?></h3>
                <p><?php echo get_field('tapioka_name_en');?></p>
                <p><?php echo get_field('tapioka_description');?></p>
            </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<!-- SHOP==========================
====================================== -->
<section  id="menu-shop" class="shop-wrapper">
  <div class="shop-inner">
    <h2 class="shop">SHOP</h2>
    <div class="shops-box">
      <div class="shop">
        <img src="<?php echo get_template_directory_uri(); ?>/img/dotcafe-akiba-map-1.png" alt="住所" class="shop-map">
        <div class="footer-description">
          <h3>秋葉原店</h3>
          <p>〒110-0016<br>
              東京都台東区台東1−27−11<br>
              佐藤第二ビル 1F<br>
              OPEN 13:00-19:00</p>
        </div>
      </div>
      <div class="shop">
        <img src="<?php echo get_template_directory_uri(); ?>/img/dotcafe-akiba-map-1.png" alt="住所" class="shop-map">
        <div class="footer-description">
        <h3>秋葉原店</h3>
        <p>〒110-0016<br>
            東京都台東区台東1−27−11<br>
            佐藤第二ビル 1F<br>
            OPEN 13:00-19:00</p>
        </div>
      </div>
      <div class="shop">
          <img src="<?php echo get_template_directory_uri(); ?>/img/dotcafe-akiba-map-1.png" alt="住所" class="shop-map">
        <div class="footer-description">
        <h3>秋葉原店</h3>
        <p>〒110-0016<br>
            東京都台東区台東1−27−11<br>
            佐藤第二ビル 1F<br>
            OPEN 13:00-19:00</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer==========================
====================================== -->
<?php get_footer(); ?>
<script>
</script>
<?php wp_footer(); ?>
</body>
</html>