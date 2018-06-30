<?php

function nmc_styles() {
    
    wp_enqueue_script('javascript' ,get_theme_file_uri('js/scripts-bundled.js'), null, microtime(), true);
    
    wp_enqueue_style('nmc-custom-google-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesomes','//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('bootstrap-cdn','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('nmc_main_style',get_stylesheet_uri(), null, microtime());
    wp_enqueue_style('nmc-custom-google-IBM-font','//fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i');

    wp_enqueue_script('jquery-cdn' ,'//code.jquery.com/jquery-3.3.1.js', null, 1.0, true);
    wp_enqueue_script('bootstrap-pepper-cdn' ,'//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', null, 1.0, true);
    wp_enqueue_script('bootstrap-js-cdn' ,'//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, 1.0, true);
    wp_enqueue_script('jquery-validation-cdn' ,'//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js', null, 1.0, true);
    wp_enqueue_script('javascript-custom' ,get_theme_file_uri('js/custom-script.js'), null, microtime(), true);
    
}

add_action('wp_enqueue_scripts', 'nmc_styles');

function nmc_features(){
    register_nav_menu('footermenuone','Footer Menu One');
    add_theme_support('title-tag');
}
add_action('after_setup_theme','nmc_features');

function nmc_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
        $currentDate = date('Ymd');
        $query -> set('orderby','meta_value_num');
        $query -> set('order','ASC');
        $query -> set('meta_key','event_date');
        $query -> set('meta_query', array(
            'key'=>'event_date',
            'compare'=>'>=',
            'value'=>$currentDate,
        ));
    }
}

function pixert_allow_swf($mimes) {
    if ( function_exists( 'current_user_can' ) )
        $unfiltered = $user ? user_can( $user, 'unfiltered_html' ) : current_user_can( 'unfiltered_html' );
    if ( !empty( $unfiltered ) ) {
        $mimes['swf'] = 'application/x-shockwave-flash';
    }
    return $mimes;
}
add_filter('upload_mimes','pixert_allow_swf');


add_action('pre_get_posts','nmc_adjust_queries');



function nmc_theme_comments($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>

    <!-- Comment Avatar And Description -->
        <div class="comment-author vcard">
            <div class="row">
			    <div class="col-3 col-sm-3 col-md-2 col-lg-1">
                    <?php 
                    if ( $args['avatar_size'] != 0 ) {
                        echo get_avatar( $comment, $args['avatar_size'] ); 
                    } 
                     ?>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() );

                    if ( $comment->comment_approved == '0' ) { ?>
                        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/>
                        <?php } ?>

                    <div class="comment-meta commentmetadata">
                        <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                            /* translators: 1: date, 2: time */
                            printf( 
                                __('%1$s at %2$s'), 
                                get_comment_date(),  
                                get_comment_time() 
                            ); ?>
                        </a><?php 
                        edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
                    </div>

                    <?php comment_text(); ?>
                    <div class="reply"><?php 
                                comment_reply_link( 
                                    array_merge( 
                                        $args, 
                                        array( 
                                            'add_below' => $add_below, 
                                            'depth'     => $depth, 
                                            'max_depth' => $args['max_depth'] 
                                        ) 
                                    ) 
                                ); ?>
                    </div>
            </div>
        </div>
        

        <?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}
add_action('comment_post','nmc_theme_comments',10,2);
?>