<?php
/*
 * Template Name: About
 */
?>
<?php get_header(); ?>
<main>
  <section class="p-about__kv">
    <div class="p-about__kv__top">
      <h2 class="p-about__kv__ttl js-pageTtl">About</h2>
      <section class="p-about__kv__loop">
        <ul class="p-about__kv__loop__loop">
          <li class="p-about__kv__loop__txt">YUGOHAYASHI</li>
          <li class="p-about__kv__loop__txt">YUGOHAYASHI</li>
          <li class="p-about__kv__loop__txt">YUGOHAYASHI</li>
        </ul>
        <div class="p-about__kv__img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/kv.webp" class="js-pageTtl" alt="" width="330" height="346"></div>
      </section><!--loop-->
    </div>
    <div class="p-about__kv__bottom">
      <div class="p-about__kv__bottom__inner">
        <p class="p-about__kv__bottom__ttl">林優吾 - Yugo Hayashi</p>
        <p class="p-about__kv__bottom__ttl__desc">
          2000年2月、福井県出身。<br>
          高校生の頃、業界の第一線で働くWebデザイナーの方をインターネットで拝見し、Web業界を志す。<br>
          大阪のIT専門学校で2年間デザインとプログラミングを学び、2020年に就職して上京。その後4年間、Webコーダーとして、Webデザイン制作・Webサイト制作・運用に従事。<br>
          旅行、音楽、野球が好き。好奇心旺盛な性格、素直さを武器に、日々新たなWeb技術のをキャッチアップし、魅力的なクリエイティブを作っていきたい。
        </p>
        <ul class="c-snslist">
          <li class="c-snslist__item">
            <a href="https://www.instagram.com/yugohayashi_web/" target="_blank">
              <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16Z" fill="#FFFFFF"/>
                <g clip-path="url(#clip0_120_281)">
                  <path d="M12.6866 8.05632C11.8354 8.09648 11.2542 8.23232 10.746 8.432C10.2201 8.63696 9.77432 8.912 9.3308 9.35712C8.88728 9.80224 8.61416 10.2483 8.41064 10.775C8.21368 11.2843 8.08024 11.8661 8.04264 12.7178C8.00504 13.5694 7.99672 13.8432 8.00088 16.0157C8.00504 18.1882 8.01464 18.4605 8.05592 19.3139C8.09656 20.165 8.23192 20.7461 8.4316 21.2544C8.63688 21.7803 8.9116 22.2259 9.35688 22.6696C9.80216 23.1133 10.2479 23.3858 10.7759 23.5896C11.2847 23.7862 11.8666 23.9203 12.7182 23.9576C13.5697 23.9949 13.8438 24.0035 16.0156 23.9994C18.1874 23.9952 18.4609 23.9856 19.3142 23.9451C20.1674 23.9046 20.7455 23.7683 21.254 23.5696C21.7799 23.3638 22.2258 23.0896 22.6692 22.6442C23.1126 22.1987 23.3855 21.7523 23.5889 21.2253C23.786 20.7165 23.9199 20.1346 23.9569 19.2837C23.9942 18.4298 24.003 18.1571 23.9988 15.985C23.9946 13.8128 23.9849 13.5405 23.9444 12.6874C23.9039 11.8342 23.7684 11.2549 23.5689 10.7462C23.3633 10.2203 23.0889 9.77504 22.6438 9.33104C22.1986 8.88704 21.7519 8.61424 21.225 8.41136C20.7159 8.2144 20.1343 8.08016 19.2828 8.04336C18.4313 8.00656 18.1572 7.99712 15.9846 8.00128C13.8119 8.00544 13.5399 8.01472 12.6866 8.05632ZM12.7801 22.5184C12.0001 22.4845 11.5766 22.3549 11.2943 22.2464C10.9206 22.1024 10.6543 21.9283 10.373 21.6498C10.0918 21.3712 9.91896 21.104 9.77304 20.731C9.66344 20.4488 9.53144 20.0258 9.49496 19.2458C9.45528 18.4027 9.44696 18.1496 9.44232 16.0138C9.43768 13.8779 9.44584 13.6251 9.4828 12.7818C9.51608 12.0024 9.64648 11.5784 9.7548 11.2963C9.8988 10.9221 10.0722 10.6563 10.3514 10.3752C10.6306 10.0941 10.897 9.92096 11.2703 9.77504C11.5522 9.66496 11.9753 9.53408 12.755 9.49696C13.5986 9.45696 13.8514 9.44896 15.987 9.44432C18.1225 9.43968 18.3759 9.44768 19.2199 9.4848C19.9993 9.51872 20.4234 9.64784 20.7052 9.7568C21.0791 9.9008 21.3452 10.0738 21.6263 10.3534C21.9074 10.6331 22.0807 10.8986 22.2266 11.2726C22.3369 11.5538 22.4678 11.9766 22.5046 12.7568C22.5447 13.6005 22.5538 13.8534 22.5577 15.9888C22.5615 18.1242 22.554 18.3778 22.517 19.2208C22.483 20.0008 22.3537 20.4245 22.245 20.707C22.101 21.0806 21.9274 21.347 21.6481 21.628C21.3687 21.909 21.1026 22.0821 20.7292 22.228C20.4476 22.3379 20.0241 22.4691 19.245 22.5062C18.4014 22.5459 18.1486 22.5542 16.0122 22.5589C13.8759 22.5635 13.6239 22.5549 12.7802 22.5184M19.3018 11.7246C19.3022 11.9145 19.3588 12.1 19.4645 12.2577C19.5703 12.4154 19.7205 12.5382 19.896 12.6106C20.0716 12.683 20.2646 12.7016 20.4508 12.6643C20.637 12.6269 20.8079 12.5351 20.9419 12.4006C21.0759 12.2661 21.167 12.0949 21.2037 11.9086C21.2404 11.7223 21.2211 11.5292 21.1481 11.354C21.0751 11.1787 20.9517 11.029 20.7936 10.9238C20.6355 10.8186 20.4498 10.7627 20.2599 10.763C20.0054 10.7635 19.7614 10.8651 19.5818 11.0455C19.4021 11.2258 19.3014 11.4701 19.3018 11.7246ZM11.8922 16.0083C11.8967 18.2771 13.7393 20.1122 16.0076 20.1078C18.2759 20.1035 20.1122 18.2611 20.1079 15.9923C20.1036 13.7235 18.2606 11.888 15.9919 11.8925C13.7233 11.897 11.8879 13.7398 11.8922 16.0083ZM13.3332 16.0054C13.3322 15.478 13.4875 14.9621 13.7797 14.523C14.0718 14.0839 14.4877 13.7413 14.9745 13.5385C15.4614 13.3357 15.9975 13.2818 16.515 13.3837C17.0325 13.4855 17.5081 13.7386 17.8818 14.1108C18.2555 14.483 18.5104 14.9576 18.6144 15.4747C18.7183 15.9918 18.6665 16.5281 18.4657 17.0158C18.2648 17.5035 17.9238 17.9206 17.4859 18.2145C17.0479 18.5084 16.5326 18.6658 16.0052 18.6669C15.655 18.6676 15.3081 18.5994 14.9842 18.466C14.6604 18.3326 14.366 18.1368 14.1179 17.8896C13.8698 17.6425 13.6728 17.3489 13.5381 17.0256C13.4035 16.7023 13.3339 16.3556 13.3332 16.0054Z" fill="#1D1D1D"/>
                </g>
                <defs>
                <clipPath id="clip0_120_281">
                  <rect width="16" height="16" fill="#1D1D1D" transform="translate(8 8)"/>
                </clipPath>
                </defs>
              </svg>
            </a>
          </li>
          <li class="c-snslist__item">
            <a href="https://github.com/yugp0208?tab=overview" target="_blank">
              <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="16" fill="#FFFFFF"/>
                <g clip-path="url(#clip0_120_280)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9732 7C11.0112 7 7 11.125 7 16.2282C7 20.3074 9.57014 23.7604 13.1356 24.9826C13.5814 25.0744 13.7447 24.784 13.7447 24.5397C13.7447 24.3258 13.73 23.5924 13.73 22.8284C11.2339 23.3785 10.7141 21.7283 10.7141 21.7283C10.3129 20.6588 9.71855 20.3839 9.71855 20.3839C8.90157 19.8186 9.77806 19.8186 9.77806 19.8186C10.6843 19.8797 11.1598 20.7659 11.1598 20.7659C11.9619 22.1714 13.2544 21.7742 13.7744 21.5297C13.8486 20.9339 14.0865 20.5214 14.339 20.2922C12.3482 20.0783 10.2536 19.2839 10.2536 15.7392C10.2536 14.7308 10.6099 13.9058 11.1745 13.2642C11.0854 13.0351 10.7734 12.0876 11.2638 10.8196C11.2638 10.8196 12.0214 10.5751 13.7298 11.7668C14.4612 11.5648 15.2155 11.4621 15.9732 11.4612C16.7308 11.4612 17.5032 11.5683 18.2164 11.7668C19.9249 10.5751 20.6826 10.8196 20.6826 10.8196C21.173 12.0876 20.8607 13.0351 20.7717 13.2642C21.3511 13.9058 21.6928 14.7308 21.6928 15.7392C21.6928 19.2839 19.5982 20.0629 17.5924 20.2922C17.9194 20.5825 18.2015 21.1324 18.2015 22.0034C18.2015 23.2409 18.1868 24.2341 18.1868 24.5395C18.1868 24.784 18.3503 25.0744 18.7959 24.9827C22.3613 23.7603 24.9315 20.3074 24.9315 16.2282C24.9462 11.125 20.9202 7 15.9732 7Z" fill="#1D1D1D"/>
                </g>
                <defs>
                <clipPath id="clip0_120_280">
                <rect width="18" height="18" fill="#1D1D1D" transform="translate(7 7)"/>
                </clipPath>
                </defs>
              </svg>
            </a>
          </li>
          <li class="c-snslist__item">
            <a href="https://zenn.dev/884_0208" target="_blank">
              <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="16" fill="#FFFFFF"/>
                <path d="M7.79501 23.9808H11.2605C11.4439 23.9808 11.607 23.8788 11.7089 23.7361L21.2491 8.06004C21.3715 7.85619 21.2288 7.61157 20.9841 7.61157H17.7021C17.5391 7.61157 17.3964 7.69311 17.3148 7.83581L7.63193 23.6954C7.57078 23.8177 7.65232 23.9808 7.79501 23.9808Z" fill="#1D1D1D"/>
                <path d="M19.7407 23.7361L24.2458 16.4994C24.3884 16.2752 24.2254 15.9898 23.9604 15.9898H20.6988C20.5764 15.9898 20.4541 16.051 20.393 16.1529L15.7656 23.5527C15.6433 23.7361 15.786 23.9807 16.0102 23.9807H19.333C19.496 23.9807 19.6591 23.8992 19.7407 23.7361Z" fill="#1D1D1D"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <div class="timeline-container" id="timeline-1">
    <div class="timeline">
      <div class="timeline-item" data-text="0歳">
        <div class="timeline__content"><img class="timeline__img" src="<?php echo get_template_directory_uri(); ?>/img/about/about_01.webp" />
          <h2 class="timeline__content-title">2000</h2>
          <p class="timeline__content-desc">2000年、福井県で出生。<br>幼少期は何にでも興味を示す好奇心旺盛な子供だった。</p>
        </div>
      </div>
      <div class="timeline-item" data-text="14歳">
        <div class="timeline__content"><img class="timeline__img" src="<?php echo get_template_directory_uri(); ?>/img/about/about_02.webp" />
          <h2 class="timeline__content-title">2014</h2>
          <p class="timeline__content-desc">中学生まで野球部に所属しており、何かを突き詰める事の難しさ、責任感の重要さを学ぶ。</p>
        </div>
      </div>
      <div class="timeline-item" data-text="17歳">
        <div class="timeline__content"><img class="timeline__img" src="<?php echo get_template_directory_uri(); ?>/img/about/about_03.webp" />
          <h2 class="timeline__content-title">2017</h2>
          <p class="timeline__content-desc">高校生後半の時期に、web業界の特集番組をテレビで見て、webデザイナー・エンジニアという職を知り、webサイト、webサービスを作る事に興味がわく。</p>
        </div>
      </div>
      <div class="timeline-item" data-text="18歳">
        <div class="timeline__content"><img class="timeline__img" src="<?php echo get_template_directory_uri(); ?>/img/about/about_04.webp" />
          <h2 class="timeline__content-title">2018</h2>
          <p class="timeline__content-desc">HAL大阪専門学校に入学し、2年間、Web領域について幅広く学習する。HALのイベントである未来創造展で優勝を経験。</p>
        </div>
      </div>
      <div class="timeline-item" data-text="20歳">
        <div class="timeline__content"><img class="timeline__img" src="<?php echo get_template_directory_uri(); ?>/img/about/img_05.webp" />
          <h2 class="timeline__content-title">2020</h2>
          <p class="timeline__content-desc">20年に上京。Webコーダー・フロントエンドエンジニアとして就職。Webサイト制作・運用・デザイン業務に従事する。</p>
        </div>
      </div>
      <div class="timeline-item" data-text="24歳">
        <div class="timeline__content"><img class="timeline__img" src="<?php echo get_template_directory_uri(); ?>/img/about/img_06.webp" />
          <h2 class="timeline__content-title">2024</h2>
          <p class="timeline__content-desc">2024年現在、フロントエンドエンジニアとして更にレベルアップする為に、常に学習し、スキルの領域を広げていきたい。</p>
        </div>
      </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>