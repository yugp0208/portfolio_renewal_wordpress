<?php

$args = array(
  'post_type' => 'post',
  'posts_per_page' => '5',
  'post__not_in' => array($post->ID),
  'orderby' => 'rand'
);
$the_query = new WP_Query($args);

?>

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
            <?php the_field('works_detail_desc'); ?>
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

      <div class="p-works__prev__next">
        <div class="p-works__prev">
          <?php if (get_previous_post()):?>
            <?php previous_post_link('&lt; %link', 'Prev'); ?>
          <?php endif; ?>
        </div>

        <div class="p-works__next">
          <?php if (get_next_post()):?>
            <?php next_post_link('%link &gt;', 'Next'); ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="p-works__other">
        <h3 class="p-works__other__list__ttl">OTHER WORKS</h3>
        <div class="c-works__list p-works__other__list">
          <?php
            if($the_query->have_posts()):
              while($the_query->have_posts()): $the_query->the_post();
          ?>
            <div class="c-works__item js-worksListFade">
              <div class="c-works__item__img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
              <p class="c-works__item__category">
                <?php
                  $cats = get_the_category();
                  foreach($cats as $cat){
                    if($cat->parent){
                      echo $cat->cat_name;
                    }
                  }
                ?>
              </p>
              <h3 class="c-works__item__ttl"><?php the_title(); ?></h3>
            </div>
            <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>