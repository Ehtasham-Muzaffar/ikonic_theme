<?php

if(!function_exists("my_theme_register_menus")){
    function my_theme_register_menus(){
        register_nav_menus(
            array(
                'primary_menu'=> __("Primary Menu",'text domain')
            )
            );
    }
}

add_action('after_setup_theme',"my_theme_register_menus");


function custom_style_css(){

  wp_enqueue_style(
    'custom_style',
    get_template_directory_uri() ."/asstes/css/style.css",
  );

wp_enqueue_style(
  'home_style',
  get_template_directory_uri() ."/asstes/css/home.css",
);
wp_enqueue_script(
  "swiper js", get_template_directory_uri() ."/asstes/js/swiper.js",
);
wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], null, true);


}

add_action("wp_enqueue_scripts","custom_style_css");





//create website custom post type

function website_custom_post_type(){
 register_post_type('website', array(
  'labels' => array(
    'name' => __("Website"),
    'singular_name' => __("Website Item")
  ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array("slug" => 'website'),
  'supports' => array("title", "editor", "thumbnail", "custom-fields"),
  'menu_icon' => "dashicons-portfolio",
  'show_in_rest' => true
));
}

add_action('init',"website_custom_post_type");
add_theme_support("post-thumbnails");
?>