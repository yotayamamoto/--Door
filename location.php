<section id="location">
    <h2>Location</h2>
    <div class="location_flex">
        <div class="location_flex__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25828.93653638113!2d139.71035182883725!3d35.980786477556606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018b93754d00f37%3A0x4aafcba1b02bdc0d!2z44CSMzQ0LTAwNjEg5Z-8546J55yM5pil5pel6YOo5biC57KV5aOB!5e0!3m2!1sja!2sjp!4v1705582795237!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php
            $my_query = new WP_Query(
                array(
                    'post_type'=> 'post'
                )
            );
        ?>
        <div class="location_flex__text">
            <dl class="location_flex__text__dl">
            <?php if ( $my_query->have_posts() ) : ?>
                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <dt class="eizi">Access</dt>
                <dd><?php echo get_field('access');?></dd>
                <dt class="eizi">Adress</dt>
                <dd>埼玉県春日部市粕壁東1-11-1</dd>
                <div class="location_flex__text__dl__info">
                    <div class="hour">
                        <dt class="eizi">Hours</dt>
                        <dd><?php echo get_field('hour');?></dd>
                    </div>
                    <div class="holiday">
                        <dt class="eizi">Holiday</dt>
                        <dd><?php echo get_field('holiday');?></dd>
                    </div>
                </div>
                <?php endwhile;?>
            <?php endif;?>
            </dl>
        </div>
    </div>
</section>