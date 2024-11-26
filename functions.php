<?php

function fileTheme() {

    wp_enqueue_style( 'sstyle', get_template_directory_uri().'/css/index.css' );
    wp_enqueue_style( 'sstylecss', get_template_directory_uri().'/css/style.css' );

	
	//wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js' ),NULL,"1.0",true;
    wp_enqueue_script('jjs',get_theme_file_uri('./js/script.js'),NULL,"1.0",true);
    wp_enqueue_script( 'mjs' ,get_theme_file_uri('./js/menu.js') ,NULL,"1.0",true  );

}
add_action( 'wp_enqueue_scripts', 'fileTheme' );



function hemesupport()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'hemesupport' );
?>