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
    <?php wp_head();?>
</head>
<body class="row">
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
                    <li><a href="<?php echo home_url();?>#about">About</a></li>
                    <li><a href="<?php echo home_url();?>/blog">News/Blog</a></li>
                    <li><a href="<?php echo home_url();?>#gallery">Gallery</a></li>
                    <li><a href="<?php echo home_url();?>#bartender">Bartender</a></li>
                    <li><a href="<?php echo home_url();?>#cocktail">Cocktail</a></li>
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
                <li><a class="sp_menu" href="<?php echo home_url();?>#about">About</a></li>
                <li><a class="sp_menu" href="<?php echo home_url();?>/blog">News/Blog</a></li>
                <li><a class="sp_menu" href="<?php echo home_url();?>#gallery">Gallery</a></li>
                <li><a class="sp_menu" href="<?php echo home_url();?>#bartender">Bartender</a></li>
                <li><a class="sp_menu" href="<?php echo home_url();?>#cocktail">Cocktail</a></li>
                <li><a class="sp_menu" href="manu.php">Menu</a></li>
                <li><a class="sp_menu" href="#location">Location</a></li>
            </ul>
        </nav>
        <!-- スマホのメニュー画面 -->
        <div class="contact_area" id="contact">
            <a class="online" href="<?php echo home_url();?>/contact">オンライン予約・お問い合わせ</a>
            <a href="tel:04812345678" class="tel">048-1234-5678</a>
        </div>
    </header>