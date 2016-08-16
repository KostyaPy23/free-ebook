<?php

define( 'TEMPLATE_DIR_URL', get_template_directory_uri() );

function getPostsList() {
    $args = array(
        'orderby' => 'id',
        'order' => 'ASC',
        'post_type' => 'post',
        'post_status' => 'publish'
    );
    $postsArr = get_posts($args);
    return $postsArr;
}


function getCustomPostTypes() {
    $arguments = array(
        'ID' => 'freebook'
//        'post_status' => 'publish'
    );
    $postArguments = get_post_meta($arguments);
    return $postArguments;
}


add_action('wp_enqueue_scripts', function () {
//    wp_enqueue_script( 'classie', TEMPLATE_DIR_URL . '/js/vendor/classie.js', ['jquery'], false, true );
//    wp_enqueue_script( 'select-fx', TEMPLATE_DIR_URL . '/js/vendor/selectFx.js', ['jquery'], false, true );


    wp_enqueue_script( 'jquery-validate', 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'validation', TEMPLATE_DIR_URL . '/js/validation.js', ['jquery', 'jquery-validate'], false, true );
    
    wp_enqueue_script( 'vk-api', 'https://vk.com/js/api/openapi.js', ['jquery'], false, true );
    wp_enqueue_script( 'google-api', 'https://apis.google.com/js/platform.js', ['jquery'], false, true );
    wp_enqueue_script( 'google-api-client', 'https://apis.google.com/js/client:plusone.js', ['jquery'], false, true );    
   

    wp_enqueue_script( 'facebook', TEMPLATE_DIR_URL . '/js/vendor/fb.js', ['jquery'], false, true );
    wp_enqueue_script( 'g-plus', TEMPLATE_DIR_URL . '/js/vendor/gplus.js', ['jquery'], false, true );
    wp_enqueue_script( 'vk', TEMPLATE_DIR_URL . '/js/vendor/vk.js', ['jquery'], false, true );
   
   
    wp_enqueue_script( 'front', TEMPLATE_DIR_URL . '/js/script.js', ['jquery'], false, true );

    
    
    wp_enqueue_style( 'font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,900,500,300,700', [], false );
    wp_enqueue_style( 'font-roboto-slab', 'https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,900,700,300%7CRoboto+Slab:400,700', [], false );
    wp_enqueue_style( 'normalize', TEMPLATE_DIR_URL . '/css/normalize.css', [], false );
    wp_enqueue_style( 'reset', TEMPLATE_DIR_URL . '/css/reset.css', [], false );
});