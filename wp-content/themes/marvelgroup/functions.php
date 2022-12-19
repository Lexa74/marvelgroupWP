<?php


function marvelgroup_assets() {

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/main.css' );

    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/images/style.css' );
    
    wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/bundle.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'marvelgroup_assets' );

show_admin_bar(false);