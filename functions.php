<?php 

/*
    @package gridresponsive

    Functions Template
*/

// Enqueue Files
function load_scripts($hook){
    wp_enqueue_style('gridresponsive_style', get_template_directory_uri() . '/css/gridresponsive.style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/a6659bdbd6.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Add Navigation Bar
function add_navbar(){
    register_nav_menus(
        array(
            'main-navbar' => __('Main Navbar')
        )
    );
}
add_action('init', 'add_navbar');

// Theme Supports
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

// Add Options to Customizer
function my_customizer_options($wp_customize){
    $wp_customize->add_section('custom_header', array(
        'title'         => __('Header Section', 'gridresponsive'),
        'description'   => sprintf(__('Customize the header section')),
        'priority'      => 220
    ));

    $wp_customize->add_setting('header_image', array(
        'default'   => get_template_directory_uri() . '/img/pic1.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'label'     => __('Header Image', 'gridresponsive'),
        'section'   => 'custom_header',
        'settings'  => 'header_image',
        'priority'  => 1
    )));

    $wp_customize->add_setting('header_heading', array(
        'default'   => _x('Your Web Presence', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('header_heading', array(
        'label'     => __('Heading', 'gridresponsive'),
        'section'   => 'custom_header',
        'priority'  => 2
    ));

    $wp_customize->add_setting('main_header_text', array(
        'default'   => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit laboriosam repellendus provident animi accusantium eveniet!', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('main_header_text', array(
        'label'     => __('Header Text', 'gridresponsive'),
        'section'   => 'custom_header',
        'priority'  => 3
    ));

    $wp_customize->add_setting('header_button_text', array(
        'default'   => _x('Read More', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('header_button_text', array(
        'label'     => __('Button Text', 'gridresponsive'),
        'section'   => 'custom_header',
        'priority'  => 4
    ));

    $wp_customize->add_setting('header_button_url', array(
        'default'   => _x('http://www.yoururl.com', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('header_button_url', array(
        'label'     => __('Button URL', 'gridresponsive'),
        'section'   => 'custom_header',
        'priority'  => 5
    ));

    // Sales Boxes
    $wp_customize->add_section('sales_boxes', array(
        'title'         => __('Sales Boxes', 'gridresponsive'),
        'description'   => sprintf(__('Create your sales boxes')),
        'priority'      => 230
    ));

    $wp_customize->add_setting('sales_box_title', array(
        'default'   => _x('Membership', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_title', array(
        'label'     => __('Sales Box Title One', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 1
    ));

    $wp_customize->add_setting('sales_box_offer', array(
        'default'   => _x('$199/mo', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_offer', array(
        'label'     => __('Sales Box Offer', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 2
    ));

    $wp_customize->add_setting('sales_box_button_text', array(
        'default'   => _x('Buy Now', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_button_text', array(
        'label'     => __('Button Text', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 3
    ));

    $wp_customize->add_setting('sales_box_button_url', array(
        'default'   => _x('http://yoururl.com', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_button_url', array(
        'label'     => __('Button URL', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 4
    ));

    $wp_customize->add_setting('sales_box_title_two', array(
        'default'   => _x('Pro Membership', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_title_two', array(
        'label'     => __('Sales Box Title Two', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 5
    ));

    $wp_customize->add_setting('sales_box_offer_two', array(
        'default'   => _x('$299/mo', 'gridpresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_offer_two', array(
        'label'     => __('Sales Box Offer Two', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 6
    ));

    $wp_customize->add_setting('sales_box_button_text_2', array(
        'default'   => _x('Buy Now', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_button_text_2', array(
        'label'     => __('Button Text 2', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 7
    ));

    $wp_customize->add_setting('sales_box_button_url_2', array(
        'default'   => _x('http://www.yoururl.com', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_box_button_url_2', array(
        'label'     => __('Button URL 2', 'gridresponsive'),
        'section'   => 'sales_boxes',
        'priority'  => 8
    ));

    // Boxes Section
    $wp_customize->add_section('boxes_section', array(
        'title'         => __('Boxes Section', 'gridresponsive'),
        'description'   => sprintf(__('Set up yor boxes')),
        'priority'      => 240
    ));

    // Box 1
    $wp_customize->add_setting('box_icon', array(
        'default'   => 'fas fa-address-book fa-4x',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'box_icon', array(
        'label'         => __('Box Icon', 'gridresponsive'),
        'description'   => __('Choose an icon'),
        'section'       => 'boxes_section',
        'priority'      => 1,
        'type'          => 'select',
        'choices'       => array(
            'default'           => 'Choose an icon',
            'fas fa-chart-pie fa-4x'        => 'Chart Pie',
            'fas fa-address-book fa-4x'     => 'Address Book',
            'fas fa-globe fa-4x'            => 'Globe',
            'fas fa-cog fa-4x'              => 'Cog',
            'fas fa-users fa-4x'            => 'Users'
        )
        )));

    // Add Box Heading
    $wp_customize->add_setting('box_heading', array(
        'default'   => _x('Analytics', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_heading', array(
        'label'     => __('Heading', 'gridresponse'),
        'section'   => 'boxes_section',
        'priority'  => 2
    ));

    // Add Box text
    $wp_customize->add_setting('box_text', array(
        'default'   => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_text', array(
        'label'     => __('Box Text', 'gridresponse'),
        'section'   => 'boxes_section',
        'type'      => 'textarea',
        'priority'  => 3
    ));    

    // Box 2
    // Add Box Icon
    $wp_customize->add_setting('box_icon_2', array(
        'default'   => 'fas fa-globe fa-4x',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'box_icon_2', array(
        'label'         => __('Box Icon Two', 'gridresponsive'),
        'description'   => __('Choose an icon for box two'),
        'section'       => 'boxes_section',
        'settings'      => 'box_icon_2',
        'priority'      => 4,
        'type'          => 'select',
        'choices'        => array(
            'default'                   => 'Choose an icon',
            'fas fa-chart-pie fa-4x'        => 'Chart Pie',
            'fas fa-address-book fa-4x'     => 'Address Book',
            'fas fa-globe fa-4x'            => 'Globe',
            'fas fa-cog fa-4x'              => 'Cog',
            'fas fa-users fa-4x'            => 'Users'
        )
        )));

    // Add Box Heading
    $wp_customize->add_setting('box_heading_2', array(
        'default'   => _x('Marketing', 'gridresponsive') ,
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_heading_2', array(
        'label'     => __('Heading for Box 2', 'gridresponsive'),
        'section'   => 'boxes_section',
        'priority'  => 5
    ));

    // Add Box Text
    $wp_customize->add_setting('box_text_2', array(
        'default'   => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_text_2', array(
        'label'     => __('Text Box 2', 'gridresponsive'),
        'section'   => 'boxes_section',
        'type'      => 'textarea',
        'priority'  => 6
    ));

    // Box 3
    // Add Box Icon
    $wp_customize->add_setting('box_icon_3', array(
        'default'   => 'fas fa-cog fa-4x',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'box_icon_3', array(
        'label'         => __('Box Icon Three', 'gridresponsive'),
        'description'   => __('Choose an icon for box three'),
        'section'       => 'boxes_section',
        'priority'      => 7,
        'type'          => 'select',
        'choices'        => array(
            'default'                       => 'Choose an icon',
            'fas fa-chart-pie fa-4x'        => 'Chart Pie',
            'fas fa-address-book fa-4x'     => 'Address Book',
            'fas fa-globe fa-4x'            => 'Globe',
            'fas fa-cog fa-4x'              => 'Cog',
            'fas fa-users fa-4x'            => 'Users'
        )
    )));

    // Add Box Heading
    $wp_customize->add_setting('box_heading_3', array(
        'default'   => _x('Development', 'gridresponse'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_heading_3', array(
        'label'     => __('Heading for Box 3', 'gridresponse'),
        'section'   => 'boxes_section',
        'priority'  => 8
    ));

    // Add Box Text
    $wp_customize->add_setting('box_text_3', array(
        'default'   => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_text_3', array(
        'label'     => __('Text Box 3', 'gridresponsive'),
        'section'   => 'boxes_section',
        'type'      => 'textarea',
        'priority'  => 9
    ));

    // Box 4
    // Add Box Icon
    $wp_customize->add_setting('box_icon_4', array(
        'default'   => 'fas fa-users fa-4x',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'box_icon_4', array(
        'label'         => __('Box Icon Four', 'gridresponsive'),
        'description'   => __('Choose an icon for box four'),
        'section'       => 'boxes_section',
        'priority'      => 10,
        'type'          => 'select',
        'choices'        => array(
            'default'                       => 'Choose an icon',
            'fas fa-chart-pie fa-4x'        => 'Chart Pie',
            'fas fa-address-book fa-4x'     => 'Address Book',
            'fas fa-globe fa-4x'            => 'Globe',
            'fas fa-cog fa-4x'              => 'Cog',
            'fas fa-users fa-4x'            => 'Users'
        )
    )));

    // Add Box Heading
    $wp_customize->add_setting('box_heading_4', array(
        'default'   => _x('Support', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_heading_4', array(
        'label'     => __('Heading for Box 4', 'gridresponsive'),
        'section'   => 'boxes_section',
        'priority'  => 11
    ));

    // Add Box Text
    $wp_customize->add_setting('box_text_4', array(
        'default'   => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eum.', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('box_text_4', array(
        'label'     => __('Text Box 4', 'gridresponsive'),
        'section'   => 'boxes_section',
        'type'      => 'textarea',
        'priority'  => 12
    ));

    // About Us Section
    $wp_customize->add_section('pages', array(
        'title'         => __('Add Pages', 'gridresponsive'),
        'description'   => sprintf(__('Chose a page to display here')),
        'priority'      => 250
    ));

    $wp_customize->add_setting('single_page', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('single_page', array(
        'label'     => __('Select Page', 'gridresponsive'),
        'section'   => 'pages',
        'type'      => 'dropdown-pages',
        'priority'  => 1
    ));

    // Page CTA
    $wp_customize->add_setting('single_page_button_text', array(
        'default'   => _x('Read More', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('single_page_button_text', array(
        'label'     => __('Button Text', 'gridresponsive'),
        'section'   => 'pages',
        'priority'  => 2
    ));

    $wp_customize->add_setting('single_page_button_url', array(
        'default'   => _x('http://www.yoururl.com', 'gridresponsive'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('single_page_button_url', array(
        'label'     => __('Button URL', 'gridresponsive'),
        'section'   => 'pages',
        'priority'  => 3
    ));
}
add_action('customize_register', 'my_customizer_options');

// Add Widgets
function gridresponsive_widgets_init(){
    register_sidebar(array(
        'name'          => esc_html__('Gallery', 'gridresponsive'),
        'id'            => 'gallery',
        'description'   => 'A Gallery Section',
        'before_widget' => '<section class="portfolio">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="gallery">',
        'after_title'   => '</h2>'
    ));
}
add_action('widgets_init', 'gridresponsive_widgets_init');