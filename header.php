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
    <h1 class="l-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/common/logo.svg')); ?>" alt="" width="60" height="60"></a></h1>
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