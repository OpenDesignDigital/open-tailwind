<?php

namespace Hustle\Setup;

use Hustle\Assets;




/**
 * Theme setup
 */
function setup() {

    /*
    |--------------------------------------------------
    | Title Tag Support
    |--------------------------------------------------
    */
    
    add_theme_support('title-tag');

    /*
    |--------------------------------------------------
    | Register Main Navigations
    |--------------------------------------------------
    */
    register_nav_menus(array(
        'main_navigation' => "Main Navigation",
        'mobile_navigation' => "Mobile Navigation",
        'footer_linklist_1' => "Footer Link list 1",
        'footer_linklist_2' => "Footer Link list 2",
        'footer_linklist_3' => "Footer Link list 3",
        'legal' => "Legal"
    ));

    /*
    |--------------------------------------------------
    | Add Support for Featured Images
    |--------------------------------------------------
    */

    add_theme_support('post-thumbnails');


    /*-----------------------------------------------------------------------------------*/
    /* Custom Image Sizes
    /*-----------------------------------------------------------------------------------*/
    add_image_size('post-thumbs', 1400, 1000, true);
    add_image_size('portrait', 600, 1000, true);
    add_image_size('portraitXL', 1500, 2500, true);
    add_image_size('full', 1800, 1800, true);
    add_image_size('letter', 1400, 400, true);
    add_image_size('gallery-square', 400, 400, true);
    add_image_size('gallery-landscape', 840, 400, true);
    add_image_size('post-thumbs-small', 700, 500, true);
    add_image_size('post-thumbs-smallest', 350, 250, true);


    /*-----------------------------------------------------------------------------------*/
    /* Blog Post Cards
    /*-----------------------------------------------------------------------------------*/
    include_once(get_stylesheet_directory() . '/functions/blog_post_card.php');

    /*
    |--------------------------------------------------
    | Add Support for HTML5 Features
    |--------------------------------------------------
    */

    add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));
}

add_action('after_setup_theme', __NAMESPACE__ . '\\setup');


function wp_display_popular_posts($num_posts = 5) {

  $popular = new WP_Query(array(
      'posts_per_page' => $num_posts,
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC'
  ));
 
  if ($popular->have_posts()) {
      while ($popular->have_posts()) {
          $popular->the_post();
          //To Customize the display of trending posts as needed
          echo '<h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
      }
  }
 
  wp_reset_postdata();
 }


// Numbered Pagination
function wplift_pagination()
{
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'prev_next' => false

	));
}



/*
|--------------------------------------------------
| Get Manifest File
|--------------------------------------------------
*/

function getManifest() {
    $assDir = get_template_directory_uri() . '/assets/dist/';
    $jsonString = file_get_contents($assDir . '/manifest.json');
    return json_decode($jsonString, true);
}


$manifest = getManifest();


function assets_init() {
    $manifest = getManifest();

    /*
    |--------------------------------------------------
    | Enqueue Scripts
    |--------------------------------------------------
    */
    
    wp_enqueue_script( 
        'main',
        join("/", [get_template_directory_uri(), $manifest['main.js']]),
        null,
        false,
        true
   );

   wp_enqueue_style(
       'main',
       join("/", [get_template_directory_uri(), $manifest['main.css']]),
   );


    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS

    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');

}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets_init');
    

/*
|--------------------------------------------------
| Create Widgets Here
|--------------------------------------------------
*/

function widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'footer',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}

// add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');