<?php

  //remove_filter( 'the_excerpt', 'wpautop' );
  //custom post show korar jonno wp query er formula full
  //page show korer jonno just if thke..formula... 
  

 if(!function_exists('wpdocs_theme_name_scripts')){
  function wpdocs_theme_name_scripts(){
    //include all js file
     wp_enqueue_script('jquery');//main jquery
     wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js');
     wp_enqueue_script('bundle-js', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
     wp_enqueue_script('easing-js', get_template_directory_uri().'/assets/vendor/jquery.easing/jquery.easing.min.js');
     wp_enqueue_script('vendor-js', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js');
     wp_enqueue_script('sticky-js', get_template_directory_uri().'/assets/vendor/jquery-sticky/jquery.sticky.js');
     wp_enqueue_script('pkgd-js', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js');
     wp_enqueue_script('venobox-js', get_template_directory_uri().'/assets/vendor/venobox/venobox.min.js');
      wp_enqueue_script('carousel-js', get_template_directory_uri().'/assets/vendor/owl.carousel/owl.carousel.min.js');
    // wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js');


//css
     wp_enqueue_style( 'boot-css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
     wp_enqueue_style('venobox-css', get_template_directory_uri().'/assets/vendor/icofont/icofont.min.css');
     //wp_enqueue_style('venobox-css', get_template_directory_uri().'/assets/vendor/venobox/venobox.css');
     wp_enqueue_style('master-css', get_template_directory_uri().'/assets/css/master.css');
     wp_enqueue_style('style',  get_stylesheet_directory_uri());
    
     
  }

  add_action('wp_enqueue_scripts','wpdocs_theme_name_scripts');
}
//Note: Bootstrap template এ যদি carousel/slider এর css link OR main js file থাকে তাহলে সেটা functions.php file এ add করতে হবে না।


//Add featured images//... search google
 add_theme_support('post-thumbnails',array('post','page','slider','text'));

 set_post_thumbnail_size(200,200, true);

 add_image_size('post-image', 300,300, true);

 add_image_size('sidebar', 700,500, true);
 add_image_size('about', 700,500,true);



 
 //Menu register
 if(!function_exists('wp_top_menu')){
  function wp_top_menu(){
   register_nav_menus(array(

    'header_top_menu' => __( 'Header Menu', 'delicious' ),
    'footer_menu'  => __('Footer Menu', 'delicious' ),


   ));

}

  add_action('after_setup_theme','wp_top_menu');
}



//Remove nav li
function remove_css_id_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
} 
add_filter( 'page_css_class', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_item_id', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_css_class', 'remove_css_id_filter', 100, 1);







//Create Custom Posts
//slider er jonno oh same code...
/**
 * Register a service post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wp_service_text() {
    $labels = array(
        'name'                  => _x( 'Service', 'Post type general name', 'delicious' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'delicious' ),
        'menu_name'             => _x( 'Service', 'Admin Menu text', 'delicious' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'delicious' ),
        'add_new'               => __( 'Add New Service', 'delicious' ),
        'add_new_item'          => __( 'Add New Service', 'delicious' ),
        'new_item'              => __( 'New Service', 'delicious' ),
        'edit_item'             => __( 'Edit Service', 'delicious' ),
        'view_item'             => __( 'View Service', 'delicious' ),
        'all_items'             => __( 'All Service', 'delicious' ),
        'search_items'          => __( 'Search Service', 'delicious' ),
        'parent_item_colon'     => __( 'Parent Service:', 'delicious' ),
        'not_found'             => __( 'No Slider found.', 'delicious' ),
        'not_found_in_trash'    => __( 'No Slider found in Trash.', 'delicious' ),
        'featured_image'        => _x( 'Featered Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'delicious' ),
        'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'delicious' ),
        'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'delicious' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'delicious' ),
        'filter_items_list'     => _x( 'Filter Service list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'delicious' ),
        'items_list_navigation' => _x( 'Slider list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'delicious' ),
        'items_list'            => _x( 'Slider list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'delicious' ),
    );
 
    $args = array(
        'labels'             => $labels,
        //'description'        => __('Description','delicious'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor','excerpt','thumbnail')
    );
 
    register_post_type( 'text', $args );
}
 
add_action( 'init', 'wp_service_text' );


//Register Retaurent Catelog menu....

function wp_racipe_item() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'delicious' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'delicious' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'delicious' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'delicious' ),
        'add_new'               => __( 'Add New', 'delicious' ),
        'add_new_item'          => __( 'Add New recipe', 'delicious' ),
        'new_item'              => __( 'New recipe', 'delicious' ),
        'edit_item'             => __( 'Edit recipe', 'delicious' ),
        'view_item'             => __( 'View recipe', 'delicious' ),
        'all_items'             => __( 'All recipes', 'delicious' ),
        'search_items'          => __( 'Search recipes', 'delicious' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'delicious' ),
        'not_found'             => __( 'No recipes found.', 'delicious' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'delicious' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'delicious' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'delicious' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'delicious' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'delicious' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'delicious' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'delicious' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'delicious' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Recipe', $args );
}
add_action( 'init', 'wp_racipe_item' );


///Grid Image Item

function wp_image_item() {
    $labels = array(
        'name'                  => _x( 'Image', 'Post type general name', 'delicious' ),
        'singular_name'         => _x( 'Image', 'Post type singular name', 'delicious' ),
        'menu_name'             => _x( 'Image', 'Admin Menu text', 'delicious' ),
        'name_admin_bar'        => _x( 'Image', 'Add New on Toolbar', 'delicious' ),
        'add_new'               => __( 'Add New', 'delicious' ),
        'add_new_item'          => __( 'Add New Image', 'delicious' ),
        'new_item'              => __( 'New image', 'delicious' ),
        'edit_item'             => __( 'Edit image', 'delicious' ),
        'view_item'             => __( 'View image', 'delicious' ),
        'all_items'             => __( 'All image', 'delicious' ),
        'search_items'          => __( 'Search image', 'delicious' ),
        'parent_item_colon'     => __( 'Parent image:', 'delicious' ),
        'not_found'             => __( 'No recipes found.', 'delicious' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'delicious' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'delicious' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'delicious' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'delicious' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'delicious' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'delicious' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'delicious' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'delicious' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'delicious' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'image' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Image', $args );
}
add_action( 'init', 'wp_image_item' );








//Theme customize register: google search(https://developer.wordpress.org/reference/hooks/customize_register/)
function themename_customize_register($wp_customize){
$wp_customize->add_section('themename_color_scheme', array(
        'title'    => __('Customize Theme', 'restaurent'),
        'description' => '',
        'priority' => 120,
    ));
  
    //For short text
    $wp_customize->add_setting('theme_logo', array(
        'default'        => 'Delicious',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('theme_logo', array(
        'label'      => __('Text logo', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
// for description
    $wp_customize->add_setting('theme_logo_desc', array(
        'default'        => 'Have a nice day---',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('theme_logo_desc', array(
        'label'      => __('Text logo description', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    // for posts animation title
    $wp_customize->add_setting('theme_animation_title', array(
        'default'        => 'Why choose Our Restaurant',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('theme_animation_title', array(
        'label'      => __('Text Animation', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    // for posts animation title description
    $wp_customize->add_setting('theme_animation_title_desc', array(
        'default'        => 'Why choose Our Restaurant description',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('theme_animation_title_desc', array(
        'label'      => __('Text Animation Description', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //for Grid posts title
     $wp_customize->add_setting('theme_post_title', array(
        'default'        => 'please read our posts',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('theme_post_title', array(
        'label'      => __('Text posts title', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //for Grid posts description
     $wp_customize->add_setting('theme_post_desc', array(
        'default'        => 'Hello! Restaurent...',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('theme_post_desc', array(
        'label'      => __('Text posts description', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    //Menu Recipe items Title.........
     $wp_customize->add_setting('menu_recipe_title', array(
        'default'        => 'please rewrite your menu item.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('menu_recipe_title', array(
        'label'      => __('Text posts title', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    ////Menu Recipe items Title btn 1.........
    $wp_customize->add_setting('menu_recipe_title_btn_1', array(
        'default'        => 'please rewrite your menu btn 1.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('menu_recipe_title_btn_1', array(
        'label'      => __('Text posts title', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Menu Recipe items Title btn 2.........
     $wp_customize->add_setting('menu_recipe_title_btn_2', array(
        'default'        => 'please rewrite your menu btn 2.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('menu_recipe_title_btn_2', array(
        'label'      => __('Text posts title', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Menu Recipe items Title btn 3.........
     $wp_customize->add_setting('menu_recipe_title_btn_3', array(
        'default'        => 'please rewrite your menu btn 3.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('menu_recipe_title_btn_3', array(
        'label'      => __('Text posts title', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
     //Menu Recipe items Title btn 4.........
     $wp_customize->add_setting('menu_recipe_title_btn_4', array(
        'default'        => 'please rewrite your menu btn 4.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('menu_recipe_title_btn_4', array(
        'label'      => __('Text posts title', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Check Menu Special Side Title Part A---

    //Check Menu Special Title 1--------
     $wp_customize->add_setting('check_menu_side_title_1', array(
        'default'        => 'please rewrite your check menu 1.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_side_title_1', array(
        'label'      => __('Check Menu Side Title 1', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    //Check Menu Special Title 2--------
     $wp_customize->add_setting('check_menu_side_title_2', array(
        'default'        => 'please rewrite check menu 2.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_side_title_2', array(
        'label'      => __('Check Menu Side Title 2', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Check Menu Special Title 3--------
     $wp_customize->add_setting('check_menu_side_title_3', array(
        'default'        => 'please rewrite your check menu 3.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_side_title_3', array(
        'label'      => __('Check Menu Side Title 3', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Check Menu Special Title 4--------
     $wp_customize->add_setting('check_menu_side_title_4', array(
        'default'        => 'please rewrite your check menu 4.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_side_title_4', array(
        'label'      => __('Check Menu Side Title 4', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Check Menu Special Title 5--------
     $wp_customize->add_setting('check_menu_side_title_5', array(
        'default'        => 'please rewrite your check menu 5.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_side_title_5', array(
        'label'      => __('Check Menu Side Title 5', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    //Check Menu Special Content  Title Part B---
    //Check Menu Special Title 1--------
     $wp_customize->add_setting('check_content_main_title_1', array(
        'default'        => 'please rewrite your check menu title 1.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_content_main_title_1', array(
        'label'      => __('Check Menu Content Title 1', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    ////Check Menu Special Description 1--------
    $wp_customize->add_setting('check_menu_des_1', array(
        'default'        => 'please rewrite your check menu des 1.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_des_1', array(
        'label'      => __('Check Menu des 1', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    //Check Menu Special Title 2--------
     $wp_customize->add_setting('check_content_main_title_2', array(
        'default'        => 'please rewrite check menu title 2.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_content_main_title_2', array(
        'label'      => __('Check Menu Content Title 2', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

     ////Check Menu Special Description 2--------
    $wp_customize->add_setting('check_menu_des_2', array(
        'default'        => 'please rewrite your check menu des 2.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_des_2', array(
        'label'      => __('Check Menu des 2', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Check Menu Special Title 3--------
     $wp_customize->add_setting('check_content_main_title_3', array(
        'default'        => 'please rewrite your check menu title 3.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_content_main_title_3', array(
        'label'      => __('Check Menu Content Title 3', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    ////Check Menu Special Description 3--------
    $wp_customize->add_setting('check_menu_des_3', array(
        'default'        => 'please rewrite your check menu des 3.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_des_3', array(
        'label'      => __('Check Menu des 3', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));
    //Check Menu Special Title 4--------
     $wp_customize->add_setting('check_content_main_title_4', array(
        'default'        => 'please rewrite your check menu title 4.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_content_main_title_4', array(
        'label'      => __('Check Menu Content Title 4', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    ////Check Menu Special Description 4--------
    $wp_customize->add_setting('check_menu_des_4', array(
        'default'        => 'please rewrite your check menu des 4.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_des_4', array(
        'label'      => __('Check Menu des 4', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    //Check Menu Special Title 5--------
     $wp_customize->add_setting('check_content_main_title_5', array(
        'default'        => 'please rewrite your check menu title 5.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_content_main_title_5', array(
        'label'      => __('Check Menu Content Title 5', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));

    ////Check Menu Special Description 5--------
    $wp_customize->add_setting('check_menu_des_5', array(
        'default'        => 'please rewrite your check menu des 5.',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('check_menu_des_5', array(
        'label'      => __('Check Menu des 5', 'themename'),
        'section'    => 'themename_color_scheme',
        
    ));


    }
  
add_action('customize_register', 'themename_customize_register');


//FOR REGISTER SIDEBAR (google:wp register sidebar)
/**
 * Add a sidebar.
 */
function wp_widgets_register() {
    register_sidebar( array(
        'name'          => __( 'Footer', 'delicious' ),
        'id'            => 'footerid',
        'description'   => __( 'Widgets in this area will be shown on all social icon in footer.', 'delicious' ),
        //'before_widget' => '<li id="%1$s" class="widget %2$s">',
        //'after_widget'  => '</li>',
        //'before_title'  => '<h2 class="widgettitle">',
        //'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wp_widgets_register' );







 


/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'foo_widget', // Base ID
            'Foo_Widget', // Name
            array( 'description' => __( 'A Foo Widget', 'delicious' ), ) // Args
        );
    }
 
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
        echo __( 'Hello, World!', 'delicious' );
        echo $after_widget;
    }
 
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'delicious' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
         </p>
    <?php
    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
} 
add_action( 'widgets_init', 'register_foo' );
     
function register_foo() { 
    register_widget( 'Foo_Widget' ); 
}

///Redux Framework
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/framework/Reduxcore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/framework/Reduxcore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/framework/sample/config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/framework/sample/config.php' );
}



 
  
  
  
 




 
  
  

  
  
	

 
  
  
  
 
 

  
  


  
  
  
 