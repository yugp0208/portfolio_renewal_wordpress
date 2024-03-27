<?php
/*
 * Template Name: works
 */
?>
<?php get_header(); ?>
<main class="l-main">
  <section class="c-section p-works">
    <div class="c-section__inner p-works__inner">
      <h2 class="p-works__ttl js-pageTtl">Works</h2>
      <div class="c-works__list js-worksListTrigger">
        <div class="c-works__item js-worksListFade">
          <div class="c-works__item__img">
            <a href="works/tokyosauna-ooo.html">
              <img src="<?php echo get_template_directory_uri(); ?>/img/work_04.webp" alt="SAUNA GOODS OOO" width="312" height="208">
            </a>
          </div>
          <p class="c-works__item__category">website</p>
          <h3 class="c-works__item__ttl">SAUNA GOODS OOO</h3>
        </div>
        <div class="c-works__item js-worksListFade">
          <div class="c-works__item__img">
            <a href="works/yugohayashi.html">
              <img src="<?php echo get_template_directory_uri(); ?>/img/work_03.webp" alt="Yugo Hayashi Portfolio" width="312" height="208">
            </a>
          </div>
          <p class="c-works__item__category">website</p>
          <h3 class="c-works__item__ttl">Yugo Hayashi Portfolio</h3>
        </div>
        <div class="c-works__item js-worksListFade">
          <div class="c-works__item__img">
            <a href="works/tokyocamp-fenic.html">
              <img src="<?php echo get_template_directory_uri(); ?>/img/work_02.webp" alt="TokyoCamp FENIC" width="312" height="208">
            </a>
          </div>
          <p class="c-works__item__category">webpage</p>
          <h3 class="c-works__item__ttl">TokyoCamp FENIC</h3>
        </div>
        <div class="c-works__item js-worksListFade">
          <div class="c-works__item__img">
            <a href="works/masahiko-ozumi.html">
              <img src="<?php echo get_template_directory_uri(); ?>/img/work_01.webp" alt="Masahiko Ozumi Paris" width="312" height="208">
            </a>
          </div>
          <p class="c-works__item__category">website</p>
          <h3 class="c-works__item__ttl">Masahiko Ozumi Paris</h3>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>