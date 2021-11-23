<?php
/**
**  activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'wisdom-blog', get_template_directory_uri() . '/style.css' );
   
}

// prise en compte du dossier de traduction du theme enfant à la place du parent
function my_child_theme_setup() {
 load_child_theme_textdomain( 'wisdom-blog', get_stylesheet_directory() . '/languages' ); // languages étant le chemin du dossier dans lequel se trouvent vos fichiers .po et .mo
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );
