<?php
/*
 * Template Name: works
 */
$args = array(
  "post_type' => 'post",
);
$query = new WP_Query( $args );

?>
<?php get_header(); ?>
<main class="l-main">
  <section class="c-section p-works">
    <div class="c-section__inner p-works__inner">
      <h2 class="p-works__ttl js-pageTtl">Works</h2>
      <div class="c-works__list js-worksListTrigger">
        <?php if( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>