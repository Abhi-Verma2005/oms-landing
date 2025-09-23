<?php
/**
 * The template for displaying comments
 *
 * @package Stellar
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// If the current post is protected by a password and the visitor doesn't have the password, return early
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area mt-12">

    <?php if (have_comments()) : ?>
        <h3 class="comments-title text-2xl font-bold text-slate-100 mb-8">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    esc_html__('One thought on &ldquo;%1$s&rdquo;', 'stellar'),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf(
                    esc_html(_n(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comment_count,
                        'stellar'
                    )),
                    number_format_i18n($comment_count),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h3>

        <ol class="comment-list space-y-6">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 48,
                'callback'   => 'stellar_comment_callback',
            ));
            ?>
        </ol>

        <?php
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="comment-navigation flex justify-between items-center mt-8 pt-8 border-t border-slate-700">
                <div class="nav-previous">
                    <?php previous_comments_link(__('← Older Comments', 'stellar')); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link(__('Newer Comments →', 'stellar')); ?>
                </div>
            </nav>
        <?php endif; // Check for comment navigation ?>

    <?php endif; // Check for comments ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
        <p class="no-comments text-slate-400 text-center py-8">
            <?php esc_html_e('Comments are closed.', 'stellar'); ?>
        </p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply'          => __('Leave a Comment', 'stellar'),
        'title_reply_to'       => __('Leave a Reply to %s', 'stellar'),
        'cancel_reply_link'    => __('Cancel Reply', 'stellar'),
        'label_submit'         => __('Post Comment', 'stellar'),
        'comment_notes_before' => '<p class="comment-notes text-slate-400 mb-6">' .
            __('Your email address will not be published. Required fields are marked *', 'stellar') . '</p>',
        'comment_notes_after'  => '',
        'comment_field'        => '<p class="comment-form-comment mb-6">
            <label for="comment" class="block text-sm font-medium text-slate-300 mb-2">' . __('Comment', 'stellar') . ' <span class="text-red-500">*</span></label>
            <textarea id="comment" name="comment" cols="45" rows="8" class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" required></textarea>
        </p>',
        'fields'               => array(
            'author' => '<p class="comment-form-author mb-4">
                <label for="author" class="block text-sm font-medium text-slate-300 mb-2">' . __('Name', 'stellar') . ' <span class="text-red-500">*</span></label>
                <input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" required />
            </p>',
            'email'  => '<p class="comment-form-email mb-4">
                <label for="email" class="block text-sm font-medium text-slate-300 mb-2">' . __('Email', 'stellar') . ' <span class="text-red-500">*</span></label>
                <input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" required />
            </p>',
            'url'    => '<p class="comment-form-url mb-6">
                <label for="url" class="block text-sm font-medium text-slate-300 mb-2">' . __('Website', 'stellar') . '</label>
                <input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" />
            </p>',
        ),
        'submit_button'        => '<button type="submit" id="submit" class="submit btn bg-purple-600 hover:bg-purple-700 text-white font-medium px-8 py-3 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-purple-500">' . __('Post Comment', 'stellar') . '</button>',
        'class_form'           => 'comment-form bg-slate-800 border border-slate-700 rounded-lg p-8',
        'class_submit'         => 'submit',
    ));
    ?>

</div>

<?php
/**
 * Custom comment callback function
 */
function stellar_comment_callback($comment, $args, $depth) {
    $tag = ('div' === $args['style']) ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class('comment bg-slate-700 border border-slate-600 rounded-lg p-6', $comment); ?>>
        
        <div class="comment-body">
            
            <!-- Comment Avatar -->
            <div class="comment-author-avatar float-left mr-4">
                <?php
                if (0 != $args['avatar_size']) {
                    echo get_avatar($comment, $args['avatar_size'], '', '', array('class' => 'rounded-full'));
                }
                ?>
            </div>
            
            <!-- Comment Content -->
            <div class="comment-content">
                
                <!-- Comment Header -->
                <div class="comment-header flex items-center justify-between mb-4">
                    <div class="comment-author">
                        <h4 class="comment-author-name font-semibold text-slate-100">
                            <?php
                            printf(
                                '<cite class="fn">%s</cite>',
                                get_comment_author_link($comment)
                            );
                            ?>
                        </h4>
                        <div class="comment-meta text-sm text-slate-400">
                            <time datetime="<?php comment_time('c'); ?>" class="comment-time">
                                <?php
                                printf(
                                    esc_html__('%1$s at %2$s', 'stellar'),
                                    get_comment_date('', $comment),
                                    get_comment_time()
                                );
                                ?>
                            </time>
                        </div>
                    </div>
                    
                    <div class="comment-actions">
                        <?php
                        edit_comment_link(
                            __('Edit', 'stellar'),
                            '<span class="edit-link text-sm text-purple-500 hover:text-purple-400 transition-colors">',
                            '</span>'
                        );
                        ?>
                    </div>
                </div>
                
                <!-- Comment Text -->
                <div class="comment-text prose prose-slate prose-invert max-w-none">
                    <?php
                    if ('0' == $comment->comment_approved) :
                    ?>
                        <p class="comment-awaiting-moderation text-yellow-500 text-sm">
                            <?php esc_html_e('Your comment is awaiting moderation.', 'stellar'); ?>
                        </p>
                    <?php
                    endif;
                    
                    comment_text($comment);
                    ?>
                </div>
                
                <!-- Comment Reply -->
                <div class="comment-reply mt-4">
                    <?php
                    comment_reply_link(array_merge($args, array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'class'     => 'text-sm text-purple-500 hover:text-purple-400 transition-colors',
                    )));
                    ?>
                </div>
                
            </div>
            
        </div>
        
    <?php
}
?>
