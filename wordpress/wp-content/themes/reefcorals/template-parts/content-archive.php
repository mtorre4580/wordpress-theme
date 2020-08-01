<article class="container">
    <div class="post mb-5">
        <div class="media">
            <a class="media__link" href="<?php the_permalink(); ?>">
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex rounded-circle" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
            </a>
            <div class="media-body">
                <h2 class="title mb-1">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="meta mb-1">
                    <span class="date"><?php the_time( 'l, j \d\e F \d\e Y' ); ?></span>
                    <span class="comment">
                        <?php comments_number(); ?>
                    </span>
                </div>
                <div class="intro">
                    <?php the_excerpt();?>
                </div>
                <a class="more-link" href="<?php the_permalink(); ?>">Ver más</a>
            </div>
        </div>
    </div>
</article>