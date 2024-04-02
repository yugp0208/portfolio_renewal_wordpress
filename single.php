<?php get_header(); ?>
<main class="l-main">
  <section class="c-section p-works">
    <div class="p-works__inner">
      <?php if(have_posts()): the_post(); ?>
        <div class="p-works__detail">
          <h2 class="p-works__detail__ttl"><?php the_title(); ?></h2>
          <p class="p-works__detail__img">
          <?php
              $worksTopImg = get_field('works_detail_img');
              if(!empty($worksTopImg)):
          ?>
                <img src="<?php echo esc_url($worksTopImg['url']); ?>" alt="<?php echo esc_attr($worksTopImg['alt']); ?>" />
          <?php endif; ?>
          </p>
          <p class="p-works__detail__desc">
            <?php
                $content = get_the_content();
                $content = wp_strip_all_tags( $content );
                $content = strip_shortcodes( $content );
                echo $content;
            ?>
          </p>
          <dl class="p-works__detail__list">
            <div class="p-works__detail__list__item">
              <dt>タイプ&ensp;:&ensp;</dt>
              <dd>
                <?php
                    $cats = get_the_category();
                    foreach($cats as $cat){
                      if($cat->parent){
                        echo $cat->cat_name;
                      }
                    }
                ?>
              </dd>
            </div>
            <div class="p-works__detail__list__item">
              <dt>リリース&ensp;:&ensp;</dt>
              <dd><?php the_field('releasedate'); ?></dd>
            </div>
            <div class="p-works__detail__list__item">
              <dt>url&ensp;:&ensp;</dt>
              <dd><a href="<?php the_field('url'); ?>" target="_blank" class="p-works__detail__list__item__url"><?php the_field('url'); ?></a></dd>
            </div>
            <div class="p-works__detail__list__item">
              <dt>役割&ensp;:&ensp;</dt>
              <dd><?php the_field('role'); ?></dd>
            </div>
            <div class="p-works__detail__list__item">
              <dt>制作期間&ensp;:&ensp;</dt>
              <dd><?php the_field('period'); ?></dd>
            </div>
            <div class="p-works__detail__list__item">
              <dt>ツール&ensp;:&ensp;</dt>
              <dd><?php the_field('tools'); ?></dd>
            </div>
          </dl>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>