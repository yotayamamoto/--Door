<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <title>door</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="mainvisual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images_door/mainvisual.jpg" alt="春日部のオーセンティックバー">
        </div>
        <div class="header_top">
            <h1>
            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images_door/logo.png" alt="春日部のオーセンティックバー | Door"></a>
            </h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="<?php echo home_url();?>/blog">News/Blog</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#bartender">Bartender</a></li>
                    <li><a href="#cocktail">Cocktail</a></li>
                    <li><a href="manu.php">Menu</a></li>
                    <li><a href="#location">Location</a></li>
                </ul>
            </nav>
            <!-- スマホのハンバーガー -->
            <div class="humburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- スマホのハンバーガー -->
        </div>

        <!-- スマホのメニュー画面 -->
        <nav class="sp_nav">
            <ul>
                <li><a class="sp_menu" href="#about">About</a></li>
                <li><a class="sp_menu" href="<?php echo home_url();?>/blog">News/Blog</a></li>
                <li><a class="sp_menu" href="#gallery">Gallery</a></li>
                <li><a class="sp_menu" href="#bartender">Bartender</a></li>
                <li><a class="sp_menu" href="#cocktail">Cocktail</a></li>
                <li><a class="sp_menu" href="#manu.php">Menu</a></li>
                <li><a class="sp_menu" href="#location">Location</a></li>
            </ul>
        </nav>
        <!-- スマホのメニュー画面 -->

        <h2 class="catch_copy">
            <p class="eachTextAnime">Best place</p>
            <p class="eachTextAnime">For you</p>
            <p class="eachTextAnime">To relax</p>
        </h2>
        <div class="contact_area" id="contact">
            <a class="online" href="<?php echo home_url();?>/contact">オンライン予約・お問い合わせ</a>
            <a href="tel:04812345678" class="tel">048-1234-5678</a>
        </div>
        <a href="<?php echo home_url();?>/blog" class="news">
            <div class="news__heading">
                <h3>News/Blog</h3>
                <p>view archive</p>
            </div>

            <?php
                $my_query = new WP_Query(
                    array(
                        'post_type'=> 'blog',
                        'order' => 'DESC',
                        'posts_per_page' => 3
                    )
                );
            ?>

            <dl class="news__dl">
            <?php if ( $my_query->have_posts() ) : ?>
                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="news_list">
                    <dt class="news_list__date"><?php echo get_field('date');?></dt>
                    <dd class="news_list__title"><?php echo the_title();?></dd>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </dl>
        </a>
    </header>