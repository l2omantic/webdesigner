<?php
if ( ! function_exists( 'salaman_setup' ) ) :

function salaman_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'salaman', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu'),
        'menu-bar'  => __( 'Hamberger Menu'),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // salaman_setup

add_action( 'after_setup_theme', 'salaman_setup' );


if ( ! function_exists( 'salaman_init' ) ) :

function salaman_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // salaman_setup

add_action( 'init', 'salaman_init' );


if ( ! function_exists( 'salaman_widgets_init' ) ) :

function salaman_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Contact 3 Form', 'salaman' ),
        'id' => 'blocks_contact_3_form',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'salaman_widgets_init' );
endif;// salaman_widgets_init

/*---------------------------- Start Menu Customize -----------------------------------*/

if ( ! function_exists( 'salaman_customize_register' ) ) :

function salaman_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    require_once "inc/blocks/wp_blocks_customizer_controls.php";

    $wp_customize->add_section( 'blocks_header_1', array(
        'title' => __( 'Logo Header', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_section( 'block_home', array(
        'title' => __( 'block home', 'salaman' )
    ));

    $wp_customize->add_setting( 'block_home_title', array(
        'type' => 'theme_mod',
        'default' => 'สินค้า'
    ));

    $wp_customize->add_control( 'block_home_title', array(
        'label' => __( 'title', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_img', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_home_img', array(
        'label' => __( 'image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'block_home'
    ) ) );

    $wp_customize->add_setting( 'block_home_des', array(
        'type' => 'theme_mod',
        'default' => 'ช้อปเลย'
    ));

    $wp_customize->add_control( 'block_home_des', array(
        'label' => __( 'Description', 'salaman' ),
        'type' => 'textarea',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_link', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_textlink', array(
        'type' => 'theme_mod',
        'default' => 'กดไป &gt;'
    ));

    $wp_customize->add_control( 'block_home_textlink', array(
        'label' => __( 'Text link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_section( 'block_home', array(
        'title' => __( 'block home', 'salaman' )
    ));

    $wp_customize->add_setting( 'block_home_title2', array(
        'type' => 'theme_mod',
        'default' => 'สินค้า'
    ));

    $wp_customize->add_control( 'block_home_title2', array(
        'label' => __( 'title', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_img2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_home_img2', array(
        'label' => __( 'image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'block_home'
    ) ) );

    $wp_customize->add_setting( 'block_home_des2', array(
        'type' => 'theme_mod',
        'default' => 'ช้อปเลย'
    ));

    $wp_customize->add_control( 'block_home_des2', array(
        'label' => __( 'Description', 'salaman' ),
        'type' => 'textarea',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_link2', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link2', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_textlink2', array(
        'type' => 'theme_mod',
        'default' => 'กดไป &gt;'
    ));

    $wp_customize->add_control( 'block_home_textlink2', array(
        'label' => __( 'Text link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_section( 'block_home', array(
        'title' => __( 'block home', 'salaman' )
    ));

    $wp_customize->add_setting( 'block_home_title3', array(
        'type' => 'theme_mod',
        'default' => 'สินค้า'
    ));

    $wp_customize->add_control( 'block_home_title3', array(
        'label' => __( 'title', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_img3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_home_img3', array(
        'label' => __( 'image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'block_home'
    ) ) );

    $wp_customize->add_setting( 'block_home_des3', array(
        'type' => 'theme_mod',
        'default' => 'ช้อปเลย'
    ));

    $wp_customize->add_control( 'block_home_des3', array(
        'label' => __( 'Description', 'salaman' ),
        'type' => 'textarea',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_link3', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link3', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_textlink3', array(
        'type' => 'theme_mod',
        'default' => 'กดไป &gt;'
    ));

    $wp_customize->add_control( 'block_home_textlink3', array(
        'label' => __( 'Text link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_section( 'blocks_pricing_2', array(
        'title' => __( 'Pricing 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'block_home_link4', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link4', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_img4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_home_img4', array(
        'label' => __( 'image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'block_home'
    ) ) );

    $wp_customize->add_setting( 'block_home_link5', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link5', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));
    
    $wp_customize->add_setting( 'block_home_link6', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link6', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));
    
    $wp_customize->add_setting( 'block_home_textlink6', array(
        'type' => 'theme_mod',
        'default' => 'กดไป &gt;'
    ));

    $wp_customize->add_control( 'block_home_textlink6', array(
        'label' => __( 'Text link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));
    
    $wp_customize->add_setting( 'block_home_link7', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link7', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));
    
    $wp_customize->add_setting( 'block_home_textlink7', array(
        'type' => 'theme_mod',
        'default' => 'กดไป &gt;'
    ));

    $wp_customize->add_control( 'block_home_textlink7', array(
        'label' => __( 'Text link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));
    
    $wp_customize->add_setting( 'block_home_link8', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'block_home_link8', array(
        'label' => __( 'Link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));
    
    $wp_customize->add_setting( 'block_home_textlink8', array(
        'type' => 'theme_mod',
        'default' => 'กดไป &gt;'
    ));

    $wp_customize->add_control( 'block_home_textlink8', array(
        'label' => __( 'Text link', 'salaman' ),
        'type' => 'text',
        'section' => 'block_home'
    ));

    $wp_customize->add_setting( 'block_home_img5', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'block_home_img5', array(
        'label' => __( 'image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'block_home'
    ) ) );

    $wp_customize->add_section( 'blocks_footer_1_3-1', array(
        'title' => __( 'Footer 1', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3-1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-1_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-2', array(
        'title' => __( 'Footer 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_section( 'blocks_socials', array(
        'title' => __( 'Footer Socials', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'SOCIALS'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'facebook link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_section( 'blocks_our', array(
        'title' => __( 'Footer Our stand', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_our_title', array(
        'type' => 'theme_mod',
        'default' => 'sdfasdfdsf<br>'
    ));

    $wp_customize->add_control( 'blocks_our_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_our'
    ));

    $wp_customize->add_setting( 'blocks_our_1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_1', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_4', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'COPY RIGHT 2015 @ WWW.SALAMANDERJEWELRY.CO.TH'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_bottom_text', array(
        'label' => __( 'Bottom Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_header_1', array(
        'title' => __( 'Logo Header', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_section( 'blocks_footer_1_3-1', array(
        'title' => __( 'Footer 1', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3-1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-1_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-2', array(
        'title' => __( 'Footer 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_section( 'blocks_socials', array(
        'title' => __( 'Footer Socials', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'SOCIALS'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'facebook link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_section( 'blocks_our', array(
        'title' => __( 'Footer Our stand', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_our_title', array(
        'type' => 'theme_mod',
        'default' => 'sdfasdfdsf<br>'
    ));

    $wp_customize->add_control( 'blocks_our_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_our'
    ));

    $wp_customize->add_setting( 'blocks_our_1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_1', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_4', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'COPY RIGHT 2015 @ WWW.SALAMANDERJEWELRY.CO.TH'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_bottom_text', array(
        'label' => __( 'Bottom Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_header_1', array(
        'title' => __( 'Logo Header', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_section( 'blocks_team_blog', array(
        'title' => __( 'บล็อก', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_team_blog_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_blog_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_blog'
    ));

    $wp_customize->add_setting( 'blocks_team_blog_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_blog_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_blog'
    ));

    $wp_customize->add_setting( 'blocks_team_blog_title2', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_blog_title2', array(
        'label' => __( 'Title2', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_blog'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-1', array(
        'title' => __( 'Footer 1', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3-1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-1_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-2', array(
        'title' => __( 'Footer 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_section( 'blocks_socials', array(
        'title' => __( 'Footer Socials', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'SOCIALS'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'facebook link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_section( 'blocks_our', array(
        'title' => __( 'Footer Our stand', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_our_title', array(
        'type' => 'theme_mod',
        'default' => 'sdfasdfdsf<br>'
    ));

    $wp_customize->add_control( 'blocks_our_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_our'
    ));

    $wp_customize->add_setting( 'blocks_our_1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_1', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_4', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'COPY RIGHT 2015 @ WWW.SALAMANDERJEWELRY.CO.TH'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_bottom_text', array(
        'label' => __( 'Bottom Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_header_1', array(
        'title' => __( 'Logo Header', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_section( 'blocks_team_1_2', array(
        'title' => __( 'กิจกรรม', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_team_1_2_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_2_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_2_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_2_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_2_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    
    $wp_customize->add_section( 'blocks_team_1_2', array(
        'title' => __( 'กิจกรรม', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_team_1_33_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_33_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_33_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_33_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_33_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_33_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    
    $wp_customize->add_setting( 'blocks_team_1_34_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_34_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_34_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_34_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_34_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_34_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    
    $wp_customize->add_setting( 'blocks_team_1_35_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_35_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_35_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_35_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_35_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_35_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    
     $wp_customize->add_setting( 'blocks_team_1_36_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_36_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_36_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_36_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_36_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_36_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    
    $wp_customize->add_setting( 'blocks_team_1_37_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_37_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_37_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_37_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_37_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_37_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    
    
    
    $wp_customize->add_setting( 'blocks_team_1_38_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_38_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_38_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_38_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_38_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_38_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));


    $wp_customize->add_setting( 'blocks_team_1_39_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_39_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_39_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_39_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_39_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_39_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    
     $wp_customize->add_setting( 'blocks_team_1_40_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_40_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_40_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_40_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_40_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_40_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    /*---------------blocks_team_1_41--------------------*/
    $wp_customize->add_setting( 'blocks_team_1_41_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_41_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_41_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_41_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_41_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_41_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    /*---------------blocks_team_1_42--------------------*/
    $wp_customize->add_setting( 'blocks_team_1_42_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_42_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_42_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_42_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_42_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_42_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));
    /*----------------------blocks_team_1_43--------------------*/
    $wp_customize->add_setting( 'blocks_team_1_43_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_43_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_43_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_43_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_43_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_43_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    /*----------------------blocks_team_1_44--------------------*/
    $wp_customize->add_setting( 'blocks_team_1_44_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_1_44_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_44_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_1_44_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));

    $wp_customize->add_setting( 'blocks_team_1_44_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_1_44_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_1_2'
    ));






    $wp_customize->add_section( 'blocks_history', array(
        'title' => __( 'ประวัติ', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_history_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_history_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_history'
    ));
    
    $wp_customize->add_section( 'blocks_team_job', array(
        'title' => __( 'สมัครงานกับเรา', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_team_job_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_team_job_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_team_job'
    ));

    $wp_customize->add_setting( 'blocks_team_job_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_team_job_title', array(
        'label' => __( 'Title job', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_job'
    ));

    $wp_customize->add_setting( 'blocks_team_job_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_team_job_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_team_job'
    ));
    
    $wp_customize->add_section( 'blocks_content_iso', array(
        'title' => __( 'นโยบายและมาตรฐาน', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_content_iso_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_iso_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_content_iso_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_content_iso_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_link1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_iso_link1', array(
        'label' => __( 'ลิงค์นโยบาย', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_img1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_iso_img1', array(
        'label' => __( 'รูปนโยบาย', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_iso'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_iso_title1', array(
        'type' => 'theme_mod',
        'default' => 'Digital Design'
    ));

    $wp_customize->add_control( 'blocks_content_iso_title1', array(
        'label' => __( 'นโยบาย', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_text1', array(
        'type' => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.'
    ));

    $wp_customize->add_control( 'blocks_content_iso_text1', array(
        'label' => __( 'นโยบายข้อความ', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));
    
    $wp_customize->add_setting( 'blocks_content_iso_link2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_iso_link2', array(
        'label' => __( 'ลิงค์มาตรฐาน', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_img2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_iso_img2', array(
        'label' => __( 'รูปมาตรฐาน', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_iso'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_iso_title2', array(
        'type' => 'theme_mod',
        'default' => 'Digital Design'
    ));

    $wp_customize->add_control( 'blocks_content_iso_title2', array(
        'label' => __( 'มาตรฐาน', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_text2', array(
        'type' => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.'
    ));

    $wp_customize->add_control( 'blocks_content_iso_text2', array(
        'label' => __( 'มาตรฐาน', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));
      
    $wp_customize->add_setting( 'blocks_content_iso_link3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_iso_link3', array(
        'label' => __( 'ลิงค์ระบบ', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_img3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_iso_img3', array(
        'label' => __( 'รูประบบ', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_iso'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_iso_title3', array(
        'type' => 'theme_mod',
        'default' => 'Digital Design'
    ));

    $wp_customize->add_control( 'blocks_content_iso_title3', array(
        'label' => __( 'ระบบ', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));

    $wp_customize->add_setting( 'blocks_content_iso_text3', array(
        'type' => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.'
    ));

    $wp_customize->add_control( 'blocks_content_iso_text3', array(
        'label' => __( 'ระบบข้อความ', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_iso'
    ));


    $wp_customize->add_section( 'blocks_footer_1_3-1', array(
        'title' => __( 'Footer 1', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3-1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-1_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-2', array(
        'title' => __( 'Footer 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_section( 'blocks_socials', array(
        'title' => __( 'Footer Socials', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'SOCIALS'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'facebook link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_section( 'blocks_our', array(
        'title' => __( 'Footer Our stand', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_our_title', array(
        'type' => 'theme_mod',
        'default' => 'sdfasdfdsf<br>'
    ));

    $wp_customize->add_control( 'blocks_our_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_our'
    ));

    $wp_customize->add_setting( 'blocks_our_1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_1', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_4', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'COPY RIGHT 2015 @ WWW.SALAMANDERJEWELRY.CO.TH'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_bottom_text', array(
        'label' => __( 'Bottom Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_header_1', array(
        'title' => __( 'Logo Header', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_section( 'blocks_content_3_4', array(
        'title' => __( 'Content 3-4', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_content_3_4_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_3_4_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_content_3_4'
    ));

    $wp_customize->add_setting( 'blocks_content_3_4_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_3_4_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_3_4'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_3_4_title', array(
        'type' => 'theme_mod',
        'default' => 'Young Photographer of the Year'
    ));

    $wp_customize->add_control( 'blocks_content_3_4_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_3_4'
    ));

    $wp_customize->add_setting( 'blocks_content_3_4_text', array(
        'type' => 'theme_mod',
        'default' => 'Magnis modipsae que lib voloratati andigen daepedor quiate ut reporemni aut labor. Laceaque quiae sitiorem ut restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent accullignis lomnus.'
    ));

    $wp_customize->add_control( 'blocks_content_3_4_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_3_4'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-1', array(
        'title' => __( 'Footer 1', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3-1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-1_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-2', array(
        'title' => __( 'Footer 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_section( 'blocks_socials', array(
        'title' => __( 'Footer Socials', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'SOCIALS'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'facebook link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_section( 'blocks_our', array(
        'title' => __( 'Footer Our stand', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_our_title', array(
        'type' => 'theme_mod',
        'default' => 'sdfasdfdsf<br>'
    ));

    $wp_customize->add_control( 'blocks_our_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_our'
    ));

    $wp_customize->add_setting( 'blocks_our_1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_1', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_4', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'COPY RIGHT 2015 @ WWW.SALAMANDERJEWELRY.CO.TH'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_bottom_text', array(
        'label' => __( 'Bottom Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_header_1', array(
        'title' => __( 'Logo Header', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_section( 'blocks_footer_1_3-1', array(
        'title' => __( 'Footer 1', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3-1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-1_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-2', array(
        'title' => __( 'Footer 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_section( 'blocks_socials', array(
        'title' => __( 'Footer Socials', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'SOCIALS'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'facebook link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_section( 'blocks_our', array(
        'title' => __( 'Footer Our stand', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_our_title', array(
        'type' => 'theme_mod',
        'default' => 'sdfasdfdsf<br>'
    ));

    $wp_customize->add_control( 'blocks_our_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_our'
    ));

    $wp_customize->add_setting( 'blocks_our_1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_1', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_4', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'COPY RIGHT 2015 @ WWW.SALAMANDERJEWELRY.CO.TH'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_bottom_text', array(
        'label' => __( 'Bottom Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_header_1', array(
        'title' => __( 'Logo Header', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_section( 'blocks_contact_3', array(
        'title' => __( 'Contact 3', 'salaman' )
    ));

    $wp_customize->add_section( 'blocks_contact_3', array(
        'title' => __( 'Contact', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_contact_3_title', array(
        'type' => 'theme_mod',
        'default' => 'How to find us'
    ));

    $wp_customize->add_control( 'blocks_contact_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_contact_3'
    ));

    $wp_customize->add_setting( 'blocks_contact_3_text', array(
        'type' => 'theme_mod',
        'default' => 'We are easy to find in the heart of London\'s business district, just a short walk from several Tube Stations.'
    ));

    $wp_customize->add_control( 'blocks_contact_3_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_contact_3'
    ));

    $wp_customize->add_setting( 'blocks_contact_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_contact_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_contact_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_contact_3_title_map', array(
        'type' => 'theme_mod',
        'default' => '<h3 class="text-center">How to find us</h3>'
    ));

    $wp_customize->add_control( 'blocks_contact_3_title_map', array(
        'label' => __( 'Title-map', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_contact_3'
    ));

    $wp_customize->add_section( 'blocks_map', array(
        'title' => __( 'Map', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_map_lat', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_map_lat', array(
        'label' => __( 'Latitude', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '51.5111507'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_long', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_map_long', array(
        'label' => __( 'Longitude', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '-0.123'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_zoom', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_map_zoom', array(
        'label' => __( 'Zoom', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '15'
            )
    ));

    $wp_customize->add_setting( 'blocks_contact_3_title_map2', array(
        'type' => 'theme_mod',
        'default' => '<h3 class="text-center">How to find us</h3>'
    ));

    $wp_customize->add_control( 'blocks_contact_3_title_map2', array(
        'label' => __( 'Title-map2', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_contact_3'
    ));

    $wp_customize->add_section( 'blocks_map', array(
        'title' => __( 'Map', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_map_lat2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_map_lat2', array(
        'label' => __( 'Latitude2', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '51.5111507'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_long2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_map_long2', array(
        'label' => __( 'Longitude2', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '-0.123'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_zoom2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_map_zoom2', array(
        'label' => __( 'Zoom', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '15'
            )
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-1', array(
        'title' => __( 'Footer 1', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3-1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-1_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

    $wp_customize->add_section( 'blocks_footer_1_3-2', array(
        'title' => __( 'Footer 2', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_title', array(
        'type' => 'theme_mod',
        'default' => 'CONTACT US'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3-2_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-2_text', array(
        'label' => __( 'Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-2'
    ));

    $wp_customize->add_section( 'blocks_socials', array(
        'title' => __( 'Footer Socials', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'SOCIALS'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'facebook link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_socials'
    ));

    $wp_customize->add_section( 'blocks_our', array(
        'title' => __( 'Footer Our stand', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_our_title', array(
        'type' => 'theme_mod',
        'default' => 'sdfasdfdsf<br>'
    ));

    $wp_customize->add_control( 'blocks_our_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_our'
    ));

    $wp_customize->add_setting( 'blocks_our_1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_1', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_3', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_our_4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_our_4', array(
        'label' => __( 'Image', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_our'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3-1_bottom_text', array(
        'type' => 'theme_mod',
        'default' => 'COPY RIGHT 2015 @ WWW.SALAMANDERJEWELRY.CO.TH'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3-1_bottom_text', array(
        'label' => __( 'Bottom Text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3-1'
    ));

/*----------------------------Services----------------------------------------*/
    $wp_customize->add_section( 'blocks_content_ser', array(
        'title' => __( 'การบริการ', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_content_ser_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_content_ser_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_content_ser_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_link1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_link1', array(
        'label' => __( 'ลิงค์การขึ้นรูปด้วยการหล่อ', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_img1', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_ser_img1', array(
        'label' => __( 'รูปการขึ้นรูปด้วยการหล่อ', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_ser'
    ) ) );


    $wp_customize->add_setting( 'blocks_content_ser_link2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_link2', array(
        'label' => __( 'ลิงค์การขึ้นรูปด้วยการกลึง', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_img2', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_ser_img2', array(
        'label' => __( 'รูปการขึ้นรูปด้วยการกลึง', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_ser'
    ) ) );


    $wp_customize->add_setting( 'blocks_content_ser_link3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_link3', array(
        'label' => __( 'ลิงค์การขึ้นรูปด้วยการฉีดพลาสติก', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_img3', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_ser_img3', array(
        'label' => __( 'รูปการขึ้นรูปด้วยการฉีดพลาสติก', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_ser'
    )));

    $wp_customize->add_setting( 'blocks_content_ser_link4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_link4', array(
        'label' => __( 'ลิงค์การเคลือบผิว', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_img4', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_ser_img4', array(
        'label' => __( 'รูปการเคลือบผิว', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_ser'
    )));

    $wp_customize->add_setting( 'blocks_content_ser_link5', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_link5', array(
        'label' => __( 'ลิงค์', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_img5', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_ser_img5', array(
        'label' => __( 'รูป', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_ser'
    )));

    $wp_customize->add_setting( 'blocks_content_ser_link6', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_link6', array(
        'label' => __( 'ลิงค์', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_img6', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_ser_img6', array(
        'label' => __( 'รูป', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_ser'
    )));

    $wp_customize->add_setting( 'blocks_content_ser_link7', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_ser_link7', array(
        'label' => __( 'ลิงค์', 'salaman' ),
        'type' => 'text',
        'section' => 'blocks_content_ser'
    ));

    $wp_customize->add_setting( 'blocks_content_ser_img7', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_ser_img7', array(
        'label' => __( 'รูป', 'salaman' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_ser'
    )));

/*--------------------------TITLE-HEADER--------------------------------------*/
    $wp_customize->add_section( 'blocks_content_heading', array(
        'title' => __( 'หัวเรื่อง', 'salaman' )
    ));

    $wp_customize->add_setting( 'blocks_content_heading_source', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'blocks_content_heading_source', array(
        'label' => __( 'Content source', 'salaman' ),
        'type' => 'dropdown-pages',
        'section' => 'blocks_content_heading'
    ));

    $wp_customize->add_setting( 'blocks_content_heading_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_content_heading_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_heading'
    ));

    $wp_customize->add_setting( 'blocks_content_heading_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_content_heading_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_heading'
    ));

    $wp_customize->add_setting( 'blocks_content_heading_PR_title', array(
        'type' => 'theme_mod',
        'default' => 'Say hello to the team'
    ));

    $wp_customize->add_control( 'blocks_content_heading_PR_title', array(
        'label' => __( 'Title', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_heading'
    ));

    $wp_customize->add_setting( 'blocks_content_heading_PR_text', array(
        'type' => 'theme_mod',
        'default' => 'Heading 2'
    ));

    $wp_customize->add_control( 'blocks_content_heading_PR_text', array(
        'label' => __( 'text', 'salaman' ),
        'type' => 'textarea',
        'section' => 'blocks_content_heading'
    ));

/*---------------------------- End Menu Customize -----------------------------------*/
/* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'salaman_customize_register' );
endif;// salaman_customize_register


/* ------------- INCLUDE ALL CSS JAVA BOOTSTRAP JQUERY --------------------*/

if ( ! function_exists( 'salaman_enqueue_scripts' ) ) :
    function salaman_enqueue_scripts() {

    /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquerymenu' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/menu.js', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap-bundle' );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.js', false, null, true);

    wp_deregister_script( 'bootstrap-bundle-min' );
    wp_enqueue_script( 'bootstrap-bundle-min', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', false, null, true);

    // wp_deregister_script( 'bootstrap' );
    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', false, null, true);


    // wp_deregister_script( 'script-2' );
    // wp_enqueue_script( 'script-2', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    // wp_deregister_script( 'script-3' );
    // wp_enqueue_script( 'script-3', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    // wp_deregister_script( 'script-4' );
    // wp_enqueue_script( 'script-4', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    // wp_deregister_script( 'script-5' );
    // wp_enqueue_script( 'script-5', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    // wp_deregister_script( 'script-6' );
    // wp_enqueue_script( 'script-6', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    // wp_deregister_script( 'script-7' );
    // wp_enqueue_script( 'script-7', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */


    /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'Cssmenu' );
    wp_enqueue_style( 'Cssmenu', get_template_directory_uri() . '/assets/css/menu-styles.css', false, null, 'all');

    // wp_deregister_style( 'bootstrap' );
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'bootstrap-min' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, null, 'all');

    // wp_deregister_style( 'bootstrap-gird' );
    // wp_enqueue_style( 'bootstrap-gird', get_template_directory_uri() . '/assets/css/bootstrap-grid.css', false, null, 'all');

    wp_deregister_style( 'bootstrap-gird-min' );
    wp_enqueue_style( 'bootstrap-gird-min', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-grid.min.css', false, null, 'all');

    // wp_deregister_style( 'bootstrap-reboot' );
    // wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css', false, null, 'all');

    wp_deregister_style( 'bootstrap-reboot-min' );
    wp_enqueue_style( 'bootstrap-reboot-min', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-reboot.min.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/assets/css/business-frontpage.css', false, null, 'all');

    // wp_deregister_style( 'custom' );
    // wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

    // wp_deregister_style( 'fontawesome' );
    // wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    // wp_deregister_style( 'history' );
    // wp_enqueue_style( 'history', get_template_directory_uri() . '/css/history.css', false, null, 'all');

    // wp_deregister_style( 'form-job' );
    // wp_enqueue_style( 'form-job', get_template_directory_uri() . '/css/form-job.css', false, null, 'all');

    // wp_deregister_style( 'our-services' );
    // wp_enqueue_style( 'our-services', get_template_directory_uri() . '/css/our-services.css', false, null, 'all');

    // wp_deregister_style( 'plugins' );
    // wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'salaman_enqueue_scripts' );
endif;

/*add_action('wp_enqueue_scripts', 'cssmenumaker_scripts_styles' );
function cssmenumaker_scripts_styles() {
   wp_enqueue_style( 'cssmenu-styles', get_template_directory_uri() . '/cssmenu/styles.css');
}*/

class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>