<div id="respond" class="comment-respond mb-lg-0">
    <h3 id="reply-title" class="comment-reply-title title-border">
        Leave a Comment
        <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel
                reply</a></small>
    </h3>
    <div class="add-comment">
        <form action="<?php echo esc_url(site_url('/wp-comments-post.php')); ?>" method="post" id="commentform"
            class="comment-form">
            <?php if (is_user_logged_in()): ?>
                <p class="logged-in-as mb-3">
                    Logged in as <?php echo wp_get_current_user()->display_name; ?>.
                    <a href="<?php echo esc_url(get_edit_user_link()); ?>">Edit your profile</a>.
                    <a href="<?php echo wp_logout_url(); ?>">Log out?</a>
                    <span class="required-field-message">Required fields are marked <span class="required">*</span></span>
                </p>
            <?php else: ?>

                <input id="author" name="author" type="text" value="" placeholder="Name" required>


                <input id="email" name="email" type="text" value="" placeholder="Email" required>


                <input id="url" name="url" type="text" value="" placeholder="Subject">

            <?php endif; ?>

            <textarea id="comment" name="comment" rows="5" placeholder="Type Here Your Comment" required></textarea>

            <p class="form-submit">
                <button type="submit" class="lab-btn"><span>Send Comment</span></button>
                <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent"
                    value="<?php echo isset($_GET['replytocom']) ? absint($_GET['replytocom']) : 0; ?>">
            </p>
            <?php comment_id_fields(); ?>
            <?php do_action('comment_form', get_the_ID()); ?>
        </form>
    </div>
</div>