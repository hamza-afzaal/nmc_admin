	
<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>



    <?php 
        $commentsFormArgs = array(
            'title_reply'=>__( '<h2>Leave a Reply</h2>', 'textdomain' ),
            'id_form' => 'comment-form',
            'class_form' => 'form-horizontal',
            'class_submit'=>'btn btn-outline-success theme--btn-outline',
            'comment_field' => '<div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="comment-text">'
                        ._x( 'Comment', 'noun' ) .
                    '</label>
                    <textarea type="text" name="comment-text" class="form-control" rows="8" required></textarea>
                </div>
            </div>',
                'fields' => apply_filters( 'comment_form_default_fields', array(


                'author' =>
                '<div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="comment-name-text">'
                        . __( 'Name', 'domainreference' ) .
                        '</label>'.
                        ( $req ? '<span class="required">*</span>' : '' ) .'
                        <input type="text" value="'. esc_attr( $commenter['comment_author'] ) .'"           " size="30" '. $aria_req .' name="comment-name-text" class="form-control" required/>
                    </div>
                </div>',


                'email' =>
                '<div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="comment-email-text">
                            '. __( 'Email', 'domainreference' ) .'
                        </label>'.
                        ( $req ? '<span class="required">*</span>' : '' ) .'
                        <input type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" name="comment-email-text" " size="30"' . $aria_req . ' class="form-control"  required/>
                    </div>
                </div>',

                'url' =>
                '<div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="comment-website-text">
                        '.__( 'Website', 'domainreference' ) . '
                        </label>
                        <input type="text" name="comment-website-text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .
                        '" size="30"/>
                    </div>
                </div></div>',
                'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" style="margin-right:5px;" ' . $consent . ' />' .
                '<label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.' ) . '</label></p>',
)
        ));
        
        
    ?>
    <div class="container-fluid" style="background-color:#f2f2f2;">
		<div class="container" >
			<div class="col-12 col-sm-10 col-md-8 col-lg-8 comment-box">
				<!-- <h2>Leave a Reply</h2>
                <p>Your email address will not be published. Required fields are marked *</p> -->
                <?php comment_form($commentsFormArgs);  ?>
            </div>
        </div>
    </div>



 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <i class="fas fa-comments"></i>
            <?php
                printf( _nx( 'Commnent(1) on "%2$s"', 'Comments(%1$s) on \'%2$s\'', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
 
        <div class="container">
        <ul class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'avatar_size' => 64,
                    'callback'=>'nmc_theme_comments'
                ) );
            ?>
        </ul><!-- .comment-list -->
        </div>
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
 
</div><!-- #comments -->