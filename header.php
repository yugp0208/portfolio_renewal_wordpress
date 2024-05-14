<?php
/*
 * Template Name: header.php
 */
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php the_title(); ?> / <?php bloginfo('name'); ?></title>
<!--meta-->
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="YUGO HAYSHI,Yugo Hayashi,林優吾,ハヤシユウゴ,ユウゴハヤシ,ホームページ,ウェブサイト,HP,Webサイト,Webサイト制作">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php the_title(); ?> / <?php bloginfo('name'); ?>" />
<meta property="og:url" content="https://yugohayashi.com/">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('img/ogp/ogp.webp')); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?php echo esc_url(get_theme_file_uri('img/ogp/ogp.webp')); ?>" />
<meta name="twitter:title" content="<?php the_title(); ?> / <?php bloginfo('name'); ?>" />
<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
<!--Materialicon-->
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!--Googlefont-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
<!--CSS-->
<link rel="stylesheet" href="https://unpkg.com/destyle.css@3.0.2/destyle.min.css">
<!--GSAP-->
<script src="https://unpkg.com/split-type"></script>

<script type="module" crossorigin src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<link rel="stylesheet" crossorigin href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

<?php wp_head(); ?>
</head>
<body id="<?php echo esc_attr( $post->post_name ); ?>">

<?php wp_body_open();?>
<header class="l-header js-header">
    <div class="l-header__inner">
    <h1 class="l-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <svg id="" data-name="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.32 144.75">
              <g id="" data-name="">
                <?php
                    if (is_page('about')) {
                        echo '<path class="cls-1" d="m.37,59.69l1.1-7.17c.37-2.45,1.02-4.45,1.96-6.01.94-1.55,2.58-3.26,4.93-5.12,2.35-1.86,6-4.5,10.94-7.94,11.89-8.29,21.14-12.44,27.76-12.44,2,0,3.42.41,4.26,1.23.84.82,1.26,2.25,1.26,4.29,0,1.43-.54,3.39-1.62,5.88-1.08,2.49-3.06,6.44-5.94,11.83-2.88,5.39-5.42,10.23-7.63,14.52-1.8,3.51-3.84,7.24-6.13,11.18-2.29,3.94-3.82,6.65-4.6,8.12-.78,1.47-1.16,2.57-1.16,3.31,0,.82.26,1.52.8,2.11.53.59,1.18.89,1.96.89,1.06,0,2.26-.57,3.58-1.72,1.33-1.14,3.93-3.62,7.81-7.42,1.88-1.88,3.89-4.11,6.04-6.68,2.14-2.57,4.81-5.88,8-9.93,3.19-4.04,6.13-7.8,8.82-11.28,1.67-2.17,3.19-4.11,4.54-5.82,1.35-1.72,2.5-3.03,3.46-3.95s1.73-1.38,2.3-1.38c.49,0,1.29.61,2.39,1.84l1.47,1.9c1.1,1.55,1.65,2.68,1.65,3.37,0,.82-1.52,3.81-4.57,8.98-3.04,5.17-5.63,9.64-7.75,13.42-2.12,3.78-4.87,9.23-8.24,16.36-3.37,7.13-6.61,15.05-9.71,23.75,8.29-6.25,13.97-10.43,17.04-12.53s5.29-3.16,6.68-3.16c.94,0,1.41.39,1.41,1.16,0,.86-.45,1.97-1.35,3.34-.9,1.37-2.1,2.88-3.62,4.54-1.51,1.65-3.79,4.04-6.83,7.17-3.04,3.12-6.36,6.5-9.96,10.14-2.21,2.25-4.35,4.86-6.44,7.84-2.08,2.98-3.7,5.29-4.84,6.93-1.14,1.63-2.19,2.57-3.13,2.82-1.39.41-2.66.1-3.8-.92-1.14-1.02-1.72-2.63-1.72-4.84,0-1.55.79-4.76,2.36-9.62,1.57-4.86,3.95-10.91,7.14-18.14,1.88-4.33,3.8-8.43,5.76-12.29s4.22-8.11,6.77-12.75c2.55-4.64,5.06-9.04,7.51-13.21,2.45-4.17,4.54-7.72,6.25-10.66-4.09,5.35-8.14,10.55-12.17,15.6-4.02,5.05-8.52,10.36-13.48,15.93-4.96,5.58-9.98,10.8-15.05,15.66-2.21,2.08-3.79,3.5-4.75,4.26-.96.76-2.22,1.13-3.77,1.13-.98,0-1.93-.34-2.85-1.01-.92-.67-1.69-1.55-2.3-2.64-.61-1.08-.92-2.13-.92-3.16,0-1.72.25-3.23.77-4.54.51-1.31,1.4-3.27,2.67-5.88,5.56-11.24,9.6-18.94,12.13-23.1,9.07-14.54,13.6-22.7,13.6-24.45,0-.57-.2-1.03-.61-1.38-.41-.35-.92-.52-1.53-.52-1.14,0-2.51.5-4.11,1.5-1.59,1-3.6,2.48-6.01,4.44-2.41,1.96-5.34,4.31-8.79,7.05-3.45,2.74-7.08,5.35-10.88,7.84-1.51.98-3.22,2.15-5.12,3.49-1.9,1.35-2.99,2.02-3.28,2.02-.57,0-.86-.29-.86-.86,0-.53.12-1.65.37-3.37Z" fill="#FFFFFF" />';
                    } else {
                        echo '<path class="cls-1" d="m.37,59.69l1.1-7.17c.37-2.45,1.02-4.45,1.96-6.01.94-1.55,2.58-3.26,4.93-5.12,2.35-1.86,6-4.5,10.94-7.94,11.89-8.29,21.14-12.44,27.76-12.44,2,0,3.42.41,4.26,1.23.84.82,1.26,2.25,1.26,4.29,0,1.43-.54,3.39-1.62,5.88-1.08,2.49-3.06,6.44-5.94,11.83-2.88,5.39-5.42,10.23-7.63,14.52-1.8,3.51-3.84,7.24-6.13,11.18-2.29,3.94-3.82,6.65-4.6,8.12-.78,1.47-1.16,2.57-1.16,3.31,0,.82.26,1.52.8,2.11.53.59,1.18.89,1.96.89,1.06,0,2.26-.57,3.58-1.72,1.33-1.14,3.93-3.62,7.81-7.42,1.88-1.88,3.89-4.11,6.04-6.68,2.14-2.57,4.81-5.88,8-9.93,3.19-4.04,6.13-7.8,8.82-11.28,1.67-2.17,3.19-4.11,4.54-5.82,1.35-1.72,2.5-3.03,3.46-3.95s1.73-1.38,2.3-1.38c.49,0,1.29.61,2.39,1.84l1.47,1.9c1.1,1.55,1.65,2.68,1.65,3.37,0,.82-1.52,3.81-4.57,8.98-3.04,5.17-5.63,9.64-7.75,13.42-2.12,3.78-4.87,9.23-8.24,16.36-3.37,7.13-6.61,15.05-9.71,23.75,8.29-6.25,13.97-10.43,17.04-12.53s5.29-3.16,6.68-3.16c.94,0,1.41.39,1.41,1.16,0,.86-.45,1.97-1.35,3.34-.9,1.37-2.1,2.88-3.62,4.54-1.51,1.65-3.79,4.04-6.83,7.17-3.04,3.12-6.36,6.5-9.96,10.14-2.21,2.25-4.35,4.86-6.44,7.84-2.08,2.98-3.7,5.29-4.84,6.93-1.14,1.63-2.19,2.57-3.13,2.82-1.39.41-2.66.1-3.8-.92-1.14-1.02-1.72-2.63-1.72-4.84,0-1.55.79-4.76,2.36-9.62,1.57-4.86,3.95-10.91,7.14-18.14,1.88-4.33,3.8-8.43,5.76-12.29s4.22-8.11,6.77-12.75c2.55-4.64,5.06-9.04,7.51-13.21,2.45-4.17,4.54-7.72,6.25-10.66-4.09,5.35-8.14,10.55-12.17,15.6-4.02,5.05-8.52,10.36-13.48,15.93-4.96,5.58-9.98,10.8-15.05,15.66-2.21,2.08-3.79,3.5-4.75,4.26-.96.76-2.22,1.13-3.77,1.13-.98,0-1.93-.34-2.85-1.01-.92-.67-1.69-1.55-2.3-2.64-.61-1.08-.92-2.13-.92-3.16,0-1.72.25-3.23.77-4.54.51-1.31,1.4-3.27,2.67-5.88,5.56-11.24,9.6-18.94,12.13-23.1,9.07-14.54,13.6-22.7,13.6-24.45,0-.57-.2-1.03-.61-1.38-.41-.35-.92-.52-1.53-.52-1.14,0-2.51.5-4.11,1.5-1.59,1-3.6,2.48-6.01,4.44-2.41,1.96-5.34,4.31-8.79,7.05-3.45,2.74-7.08,5.35-10.88,7.84-1.51.98-3.22,2.15-5.12,3.49-1.9,1.35-2.99,2.02-3.28,2.02-.57,0-.86-.29-.86-.86,0-.53.12-1.65.37-3.37Z" fill="#323333" />';
                    }
                ?>
              </g>
            </svg>
        </a>
    </h1>
    <div class="l-header__nav">
        <nav>
        <ul class="l-header__list">
            <li class="l-header__list__item"><a class="l-header__list__item__link top" href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
            <li class="l-header__list__item"><a class="l-header__list__item__link about" href="<?php echo esc_url(home_url('/')); ?>about/">About</a></li>
            <li class="l-header__list__item"><a class="l-header__list__item__link works" href="<?php echo esc_url(home_url('/')); ?>works/">Works</a></li>
        </ul>
        </nav>
        <div class="l-header__mail"><a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="material-symbols-outlined">mail</span></a></div>
    </div>
    </div>
    <button type="button" id="js-hamburger" class="c-hamburger" aria-controls="global-nav" aria-expanded="true">
    <span class="c-hamburger__line">
        <span class="u-visuallyHidden">
        メニューを開閉する
        </span>
    </span>
    </button><!--c-hamburger-->
    <div class="c-hamburger__drawer" id="js-hamburgerDrawer">
        <div class="c-hamburger__drawer__inner">
            <nav class="c-hamburger__drawer__nav">
            <ul class="c-hamburger__drawer__nav__list">
                <li class="c-hamburger__drawer__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
                <li class="c-hamburger__drawer__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>about/">About</a></li>
                <li class="c-hamburger__drawer__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>works/">Works</a></li>
                <li class="c-hamburger__drawer__nav__item"><a href="<?php echo esc_url(home_url('/')); ?>contact/">Contact Us</a></li>
            </ul>
            </nav>
        </div>
    </div><!--c-hamburger__drawer-->
</header><!--header-->