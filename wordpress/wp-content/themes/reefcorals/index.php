<?php get_header(); ?>
    <section class="content px-3 py-5 p-md-5 content-posts">
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'archive');
                }
            }
        ?>
        <?php
            the_posts_pagination(array(
                'screen_reader_text' => ' ', 
                'type' => 'list',
                'prev_text' => 'Anterior',
                'next_text' => 'Siguiente'
            ));
        ?>
    </section>
<?php get_footer(); ?>