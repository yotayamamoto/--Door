<?php

    function my_init() {
        wp_enqueue_script("jquery");
    }
    add_action("init", "my_init");

    function change_post_tag_to_checkbox() {
        $args = get_taxonomy('post_tag');
        $args -> hierarchical = true;//Gutenberg用
        $args -> meta_box_cb = 'post_categories_meta_box';//Classicエディタ用
        register_taxonomy( 'post_tag', 'blog', $args);
    }
    add_action( 'init', 'change_post_tag_to_checkbox'999 );


?>

