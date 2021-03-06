<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}

//enqueue Google Fonts: Source Sans Pro and PT Serif
add_action( 'wp_enqueue_scripts', 'my_google_fonts' );
function my_google_fonts() {
    wp_enqueue_style( 'my-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,400,500,600,800', false );
}

function obscure_login_errors(){
  return "Staahhhp... I coulda dropped my crossaint.";
}
add_filter( 'login_errors', 'obscure_login_errors' );

// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


