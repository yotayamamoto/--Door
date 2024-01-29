<?php get_header('row');?>
    <main>
        <?php get_template_part('breadcrumb');?>
        <section class="contact">
            <h2>Contact</h2>
            <div class="contact_form">
                <?php echo the_content();?>
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