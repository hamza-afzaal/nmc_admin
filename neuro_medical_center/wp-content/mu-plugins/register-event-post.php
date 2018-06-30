<?php


function nmc_custom_posts(){
    register_post_type('event',array(
        'supports' => array(
            'title','editor','excerpt', 'comments'//'custom-fields' rather use advanced custom fields plugin
        ),
        'label' => 'Events',
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
       	'has_archive' => true,
        'rewrite' => array(
        	'slug'=>'events',
        ),
        'labels' => array(
            'name' => 'Events',
            'add_new' => 'New Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_item' => 'All Events',
        )
    ));


    register_post_type('disease',array(
        'supports' => array(
            'title','editor','excerpt', 'comments'//'custom-fields' rather use advanced custom fields plugin
        ),
        'label' => 'Diseases',
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
       	'has_archive' => true,
        'rewrite' => array(
        	'slug'=>'diseases',
        ),
        'labels' => array(
            'name' => 'Diseases',
            'add_new' => 'New Disease',
            'add_new_item' => 'Add New Disease',
            'edit_item' => 'Edit Disease',
            'all_item' => 'All Diseases',
        )
    ));
}

add_action('init', 'nmc_custom_posts');


?>