<?php


   
    function profotech_solutions_scripts(){
        // CSS Files

        wp_enqueue_style('bootstrap.min',get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome',get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');

        wp_enqueue_style('main_style', get_stylesheet_uri()); //eita holo amar style.css 
        wp_enqueue_style('style_file',get_template_directory_uri().'/css/style.css');
        wp_enqueue_style('fonts',get_template_directory_uri().'/fonts/antonio-exotic/stylesheet.css');
        wp_enqueue_style('lightbox',get_template_directory_uri().'/css/lightbox.min.css');
        wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css');

        // javascripts
        wp_enqueue_script('jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0', true);
        wp_enqueue_script('js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true);
        wp_enqueue_script('lightbox-plus-jquery', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array(), '1.0', true);
        wp_enqueue_script('instafeed-jquery', get_template_directory_uri() . '/js/instafeed.min.js', array(), '1.0', true);
        wp_enqueue_script('custom.js', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true);
    
        // fontawesome add  just this cod emplyment
        //wp_enqueue_script('fontawesome','https://kit.fontawesome.com/1807844b84.js', array(), '1.1', true);
    }
    // attach with action hook
    add_action("wp_enqueue_scripts","profotech_solutions_scripts");



    function image_register(){
        add_theme_support("post-thumbnails");
        add_image_size("small-size",100,80,true)/** small-size ei value ti hobe ..the_post_thumbnail("small-size") jeikhane image show korate hobe oi khane */;
        add_image_size("big-size",400,200,true);
        // post formats
        add_theme_support("post-formats",array("aside","gallery","link"));
    }
    add_action("after_setup_theme","image_register");




    //register custom post type 
    function register_my_custom_post(){
        register_post_type ('custom', array(
        'labels'=>array(
            'name'=>('our project'),
            'singular_name' =>('custom'),
        ),
        'public'=>true,
        "show_in_nav_menus"=>true,
        'has_archive'=>false,
        'supports'=>array('title','editor','excerpt','author','comments')
        ) );
    }

    add_action("init","register_my_custom_post");




        // menu rejister functions.php file e likhte hobe eita
        register_nav_menus( array(
            "primary" => "top menu",
            "footer"  => "bottom menu",
        ) );
    
        
         //register sidebar
function profotech_register_sidebar(){

    register_sidebar(array(
       'name' => __ ('primary sidebar','theme_name'),
       'id' => 'sidebar-1',
       'before_widget' => '<aside id="%1$s" cass="widget %2$s">',
       'before_title' => '<i class="widget_title">',
       'after_title' => '</i>',
    ));
 
    register_sidebar(array(
       'name' => __ ('primary sidebar 2','theme_name'),
       'id' => 'sidebar-2',
       'before_widget' => '<aside id="%1$s" cass="widget %2$s">',
       'before_title' => '<h1 class="widget_title">',
       'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => __ ('primary sidebar 3','theme_name'),
        'id' => 'sidebar-3',
        'before_widget' => '<aside id="%1$s" cass="widget %2$s">',
        'before_title' => '<h1 class="widget_title">',
        'after_title' => '</h1>',
     ));
 }
    add_action("widgets_init","profotech_register_sidebar");




  

  //theme customize pnale
  function themename_customize_register($wp_customize){
    $wp_customize->add_section('theme_customize_pnale_register_name', array(
        'title'    => 'footer',
        'description' => 'footer section edit',
        'priority' => 50,
    ));
  
    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('theme_customize_setting', array(
        'default'        => ' &copy; 2017 All right reserved. Designed by',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('theme_customize_control', array(
        'label'      => 'copy right box',
        'section'    => 'theme_customize_pnale_register_name',
        'settings'   => 'theme_customize_setting',
    ));

    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('footer_copyright_link_setting', array(
        'default'        => 'ThemeVault.',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('footer_copyright_link_control', array(
        'label'      => 'COPY RIGHT LINK',
        'section'    => 'theme_customize_pnale_register_name',
        'settings'   => 'footer_copyright_link_setting',
    ));


//  =============================
//  = Page Dropdown             =
//  =============================
$wp_customize->add_setting('copyright_pag_link_setting', array(
    'capability'     => 'edit_theme_options',
    'type'           => 'option',

));

$wp_customize->add_control('copyright_pag_link_control', array(
    'label'      => 'copy right link pag',
    'section'    => 'theme_customize_pnale_register_name',
    'type'    => 'dropdown-pages',
    'settings'   => 'copyright_pag_link_setting',
));


    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('get_touch_setting', array(
        'default'        => 'GET IN TOUCH.',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('get_touch_control', array(
        'label'      => 'get in touch',
        'section'    => 'theme_customize_pnale_register_name',
        'settings'   => 'get_touch_setting',
    ));



//  =============================
//  = Image Upload              =
//  =============================
$wp_customize->add_setting('sk_theme_image', array(
    'default'           => get_bloginfo('template_url')."/images/category4.png" ,
    'capability'        => 'edit_theme_options',
    'type'           => 'option',

));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
    'label'    => 'Upload Image',
    'section'  => 'theme_customize_pnale_register_name',
    'settings' => 'sk_theme_image',
)));


//  =============================
//  = Color Picker              =
//  =============================
$wp_customize->add_setting('sk_theme_colorpicker', array(
    'default'           => '#000',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',

));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
    'label'    => 'Chose Color',
    'section'  => 'theme_customize_pnale_register_name',
    'settings' => 'sk_theme_colorpicker',
)));


    

    }

    
    add_action('customize_register', 'themename_customize_register');
    



    function theme_custom_me($wp_customize){
     
        $wp_customize->add_section('my_new_section', array(
            'title'    => 'sk_theme_option',
            'description' => '',
            'priority' => 120,
        ));


        //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('on_gelary', array(
        'default'        => 'value',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('themename_text_test', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'my_new_section',
        'settings'   => 'on_gelary      ',
    ));






    }
  
    add_action('customize_register', 'theme_custom_me');

        
?>