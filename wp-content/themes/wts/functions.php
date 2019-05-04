

<!-- hide the wordpress admin using wordpress function -->

<?php 

   add_filter('show_admin_bar', '__return_false');

?>

<!--link the css files using wordpress function -->

<?php

function additional_custom_styles() {
 	
   

    wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css' ); 

    wp_enqueue_style( 'line-icons_css', get_template_directory_uri() . '/fonts/line-icons.css' ); 

    wp_enqueue_style( 'nivo-lightbox-css', get_template_directory_uri() . '/css/nivo-lightbox.css' ); 

    wp_enqueue_style( 'owl-carousel-min-css', get_template_directory_uri() . '/css/owl.carousel.min.css' );

    wp_enqueue_style( 'owl-theme-css', get_template_directory_uri() . '/css/owl.theme.css' ); 
    
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css' ); 

    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css' ); 

    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css' ); 

    wp_enqueue_style( 'slicknav-css', get_template_directory_uri() . '/css/slicknav.css' );

    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );

 }

    add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

 ?>

 <!--link the js files using wordpress function -->

 <?php
 function wpt_theme_js() {

 



	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'contact-form-script-min-js', get_template_directory_uri() . '/js/contact-form-script.min.js', array('$'), '', true );		

    wp_enqueue_script( 'form-validator-min-js', get_template_directory_uri() . '/js/form-validator.min.js', array('jquery'), '', true );	

    //  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-min.js');

    wp_enqueue_script( 'jquery_easing_min_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '', true );	

	wp_enqueue_script( 'jquery_nav_js', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery'), '', true );	

	wp_enqueue_script( 'jquery_slicknav_js', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '', true );

    wp_enqueue_script( 'map_js', get_template_directory_uri() . '/js/map.js', array('jquery'), '', true );	

	wp_enqueue_script( 'owl_carousel_min_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'popper_min_js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );	

    wp_enqueue_script( 'scrolling-nav_js', get_template_directory_uri() . '/js/scrolling-nav.js', array('$'), '', true );	

	wp_enqueue_script( 'slick_min_js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/js/wow.js', array('jquery'), '', true );

    wp_enqueue_script( 'googlemap', '//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM' );

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );    

 }


    add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );



 ?>









