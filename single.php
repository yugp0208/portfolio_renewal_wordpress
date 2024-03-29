<?php get_header(); ?>
<main class="l-main">
  <section class="c-section p-works">
    <div class="p-works__inner">
      <h2 class="p-works__ttl js-pageTtl">Works</h2>
      <?php if(have_posts()): the_post(); ?>
        <div class="p-works__detail">
          <div class="p-works__detail__img">
              <?php the_post_thumbnail(); ?>
          </div>
          <p class="p-works__detail__category">
              <?php
                  $cats = get_the_category();
                  foreach($cats as $cat){
                    if($cat->parent){
                      echo $cat->cat_name;
                    }
                  }
              ?>
          </p>
          <h2 class="p-works__detail__ttl"><?php the_title(); ?></h2>
          <p class="p-works__detail__skill">Planning&nbsp;/&nbsp;Design&nbsp;/&nbsp;HTML&nbsp;/&nbsp;CSS&nbsp;/</p>
          <p class="p-works__detail__desc">
            <?php
              $content = get_the_content();
              $content = wp_strip_all_tags( $content );
              $content = strip_shortcodes( $content );
              echo $content;
            ?>
          </p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>