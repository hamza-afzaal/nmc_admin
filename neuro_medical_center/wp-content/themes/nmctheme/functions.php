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

add_action('pre_get_posts','nmc_adjust_queries');

?>