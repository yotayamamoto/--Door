<?php get_header();?>
    <main>
        <div id="about">
            <div class="about_text">
                <p class="appearFade">重いドアを開ければそこに広がる</p>
                <p class="appearFade">あなただけの憩いの空間</p>
                <p class="appearFade">静かなひと時を誰にも邪魔されることなく</p>
                <p class="appearFade">すごせる時間をお過ごしいただけます。</p>
                <p class="appearFade">ひとり時間を最高の贅沢にするために</p>
                <p class="appearFade">どうぞ、Doorをお開けください。</p>
            </div>
        </div>
        <section id="gallery">
            <h2 class="eachTextAnime">Gallery</h2>
            <p class="gallery_bg">Gallery</p>
            <div class="gallery_slider">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images_door/slider_1.jpg" alt="Doorの魅力">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images_door/slider_4.jpg" alt="Doorの魅力">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images_door/slider_3.jpg" alt="Doorの魅力">
                </div>
            </div>
        </section>
        <section id="bartender">
            <p class="bartender_bg">Bartender</p>
            <div class="bartender_flex">
                <?php
                    $my_query = new WP_Query(
                        array(
                            'post_type'=> 'bartender',
                            'order' => 'ASK',
                            'posts_per_page' => 1
                        )
                    );
                ?>
                <?php if ( $my_query->have_posts() ) : ?>
                    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <div class="bartender_flex__right">
                        <h2 class="bartender_flex__right__h2 eachTextAnime">Bartender</h2>
                        <div class="bartender_flex__right__image">
                            <img src="<?php echo get_field('image');?>" alt="Doorのマスター">
                        </div>
                    </div>
                    <div class="bartender_flex__left">
                        <p>
                            <?php echo the_content();?>
                        </p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
        <section id="cocktail">
            <p class="cocktail_bg">Cocktail</p>
            <div class="cocktail_flex">
                <?php                                      
                    $args = array(
                    'tax_query' => array(
                            array(
                                'taxonomy' => 'original_cocktail',
                                'field' => 'slug',
                                'terms' => 'my_cocktail'
                            ),
                        ),
                    'post_type' => 'blog',
                    'order' => 'DESK',
                    'posts_per_page'=> 1
                    );
                    $my_query = new wp_query($args)
                ?>
                <?php if($my_query->have_posts()):?>
                    <?php while($my_query->have_posts()):$my_query->the_post();?>
                    <div class="cocktail_flex__left">
                        <h2 class="cocktail_flex__left__h2 eachTextAnime">Cocktail</h2>
                        <div class="cocktail_flex__left__image">
                            <img src="<?php echo get_field('image');?>" alt="Doorのオリジナルカクテル">
                            <dl class="sp_dl">
                                <dt>ベース</dt>
                                <dd><?php echo get_field('base');?></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="cocktail_flex__right">
                        <dl class="cocktail_flex__right__dl">
                            <dt class="cocktail_title"><?php echo the_title();?></dt>
                            <dd><?php echo the_content();?></dd>
                            <dt class="Commitment">こだわり</dt>
                            <dd><?php echo get_field('feeling');?></dd>
                            <dt class="bace">ベース</dt>
                            <dd class="bace"><?php echo get_field('base');?></dd>
                        </dl>
                        <div class="btn_cocktail">
                            <a href="#cocktail.html" class="btn eizi">more cocktail</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
        <section id="menu">
            <h2>Menu</h2>
            <div class="menu_list">
                <div class="menu_list__drink">
                    <h3>-Drink</h3>
                    <?php
                        $args = array(
                        'post_type' => 'drink',
                        'meta_query' => array(
                            array(
                            'key'   => 'top_page',
                            'value' => 'on',
                            'compare' => 'LIKE'
                            )
                        )
                        );
                        $my_query = new WP_Query( $args );
                    ?>
                    <ul>
                    <?php if ($my_query->have_posts()): ?>
                        <?php while($my_query->have_posts()): $my_query->the_post(); ?>
                        <li class="list_item">
                            <p><?php echo the_title();?></p>
                            <p>￥<?php echo get_field('price');?><span style="font-size: 10px;">(<?php echo get_field('tax');?>)</span></p>
                        </li>
                        <?php endwhile;?>
                    <?php  endif; ?>
                    <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="menu_list__food">
                    <h3>-Food</h3>
                    <?php
                        $args = array(
                        'post_type' => 'food',
                        'meta_query' => array(
                            array(
                            'key'   => 'top_page',
                            'value' => 'on',
                            'compare' => 'LIKE'
                            )
                        )
                        );
                        $my_query = new WP_Query( $args );
                    ?>
                    <ul>
                    <?php if ($my_query->have_posts()): ?>
                        <?php while($my_query->have_posts()): $my_query->the_post(); ?>
                        <li class="list_item">
                            <p><?php echo the_title();?></p>
                            <p>￥<?php echo get_field('price');?><span style="font-size: 10px;">(<?php echo get_field('tax');?>)</span></p>
                        </li>
                        <?php endwhile;?>
                    <?php  endif; ?>
                    <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
            <div class="btn_menu eizi">
                <a href="#menu.html" class="btn">more menu</a>
            </div>
            
        </section>
        <?php get_template_part('location');?>
    </main>
    <?php get_footer();?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/app.js"></script>
</body>
</html>