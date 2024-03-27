<?php
/*
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<main>
  <section class="c-section p-contact">
      <div class="c-section__inner p-contact__inner">
        <h2 class="p-contact__ttl js-pageTtl">Contact</h2>
        <p class="p-contact__ttl__desc">制作の依頼・ご相談などお気軽にお問い合わせください。<br>
        下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。</p>
        <?php echo apply_filters('the_content', '[contact-form-7 id="2019ae2" title="Contact - お問い合わせフォーム"]'); ?>
      </div>
  </section>
</main>
<?php get_footer(); ?>