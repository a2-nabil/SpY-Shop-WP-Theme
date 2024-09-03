<?php
if (post_password_required()) {
    return;
}
?>

<?php if (have_comments()): ?>
    <div id="comments" class="comments">
        <h4 class="title-border"><?php echo get_comments_number(); ?> Comment</h4>
        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                // 'callback' => 'my_custom_comments',
                'style' => 'ul',
            ));
            ?>
        </ul>


    </div>

<?php endif; 
?>



<?php include get_template_directory() . '/comments-custom.php'; ?>

