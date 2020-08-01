<!-- Comments template (theme) -->
<section class="comments" id="comments">
    <div class="comments-inner">
        <?php
            wp_list_comments(
                array(
                    'avatar_size' => 120,
                    'style' => 'div'
                )
            );
        ?>
    </div>
</section>
<hr class="" aria-hidden="true">
<?php
    if (comments_open()) {
        comment_form(
            array(
                'class_form' => '',
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h2>'
            )
        );
    }
?>
