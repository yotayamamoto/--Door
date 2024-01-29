<?php get_header('row');?>
    <main>
    <?php get_template_part('breadcrumb');?>
        <section class="news">
            <p class="heading">News/Blog</p>
            <h2><span class="eizi">Bar Door</span>の新着情報/ブログ</h2>
            <div class="blog_wrapper">
                <div class="blog_wrapper__left">
                    <ul>
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
                            <li class="blog_card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image">
                                        <?php if(get_field('image')): ?>
                                            <img src="<?php echo get_field('image');?>" alt="ブログのサムネイル">
                                        <?php else:?>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images_door/door_bg.jpg" alt="bar Door">
                                        <?php endif;?>
                                    </div>
                                    <div class="text_box">
                                        <div class="text_box__inner">
                                            <p class="category"><?php echo get_field('Genre');?></p>
                                            <h3><?php echo the_title(); ?></h3>
                                            <div class="content"><?php echo the_content();?></div>
                                            <div class="opution">
                                                <a href="#tag" class="tag"></a>
                                                <time datetime="<?php echo get_field('date');?>"><?php echo get_field('date');?></time>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                            <?php else: ?>
                            <?php echo '記事はありません'; ?>
                        <?php endif; ?>
                        
                    </ul>
                    <div class="page_nation">
                        <?php get_template_part('pager');?>
                    </div>
                </div>
                <div class="blog_wrapper__right">
                    <div class="blog_wrapper__right__heading">
                        <h3>Search</h3>
                        <span>-探す-</span>
                    </div>
                    <div class="blog_wrapper__right__pick_up">
                        <div class="heading">
                            <h4>pick up</h4>
                            <span>-ピックアップ-</span>
                        </div>
                        <?php
                            $args = array(
                            'post_type' => 'blog',
                            'order' => 'ASK',
                            'posts_per_page' => 3,
                            'meta_query' => array(
                                array(
                                'key'   => 'pick_up',
                                'value' => 'on',
                                'compare' => 'LIKE'
                                )
                            )
                            );
                            $my_query = new WP_Query( $args );
                        ?>
                        <ul>
                        <?php if ( $my_query->have_posts() ) : ?>
                             <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            
                                <li class="blog_card">
                                    <a href="<?php echo the_permalink();?>">
                                        <div class="image">
                                        <?php if(get_field('image')): ?>
                                            <img src="<?php echo get_field('image');?>" alt="ブログのサムネイル">
                                        <?php else:?>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images_door/door_bg.jpg" alt="bar Door">
                                        <?php endif;?>
                                        </div>
                                        <div class="text_box">
                                            <h3><?php echo the_title();?></h3>
                                            <div class="content"><?php echo the_content();?></div>
                                            <div class="opution">
                                                <a href="#tag" class="tag"></a>
                                                <time datetime="<?php echo get_field('date');?>"><?php echo get_field('date');?></time>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <div class="blog_wrapper__right__keyword">
                        <div class="heading">
                            <h4>keyword</h4>
                            <span>-キーワード-</span>
                        </div>
                        <div class="tag_area">
                        <ul>
                        <?php 
                        $blogtag = get_tags();    //全てのタグ取得
                        if($blogtag):
                        foreach($blogtag as $tag):
                        ?>
                            <li>
                                <a class="tag" href="<?php echo get_tag_link($tag->term_id); ?>">
                                <?php echo $tag->name; ?>
                                </a>
                            </li>
                        <?php endforeach; endif;?>
                        </ul>
                        </div>
                    </div>
                </div>
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