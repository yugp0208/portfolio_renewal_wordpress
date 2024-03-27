<footer class="l-footer js-footer">
      <div class="l-footer__contact">
        <a class="l-footer__contact__inner" href="<?php echo esc_url(home_url('/')); ?>contact/">
          <p class="l-footer__contact__ttl">Contact Us</p>
          <span class="material-symbols-outlined l-footer__contact__arrow">
            east
          </span>
        </a>
      </div>
      <div class="l-footer__nav">
        <div class="l-footer__nav__inner">
          <ul class="l-footer__nav__list">
            <li class="l-footer__nav__item"><a class="l-footer__nav__item__link top" href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
            <li class="l-footer__nav__item"><a class="l-footer__nav__item__link about" href="<?php echo esc_url(home_url('/')); ?>about/">About</a></li>
            <li class="l-footer__nav__item"><a class="l-footer__nav__item__link works" href="<?php echo esc_url(home_url('/')); ?>works/">Works</a></li>
          </ul>
        </div>
      </div>
      <div class="l-footer__copy">
        <div class="l-footer__copy__inner">
          <small class="l-footer__copy__txt">© 2024 YUGO HAYASHI</small>
        </div>
      </div>
    </footer><!--footer-->
    <?php wp_footer(); ?>
  </body>
</html>