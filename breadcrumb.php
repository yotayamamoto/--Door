

<div class="breadcrumb">
    <ul>
        <li><a href="<?php echo home_url();?>">ホーム　＞</a></li>

        <?php if(is_post_type_archive('blog')):?>
            <li class="eizi">News/Blog</li>

        <?php elseif(is_page('contact')):?>
            <li class="eizi">contact</li>
        <?php endif;?>
    </ul>
</div>