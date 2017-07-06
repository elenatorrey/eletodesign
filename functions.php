<?php
require_once('wp-bootstrap-navwalker.php');
function wpeleto_register_js() {
    wp_register_script('jquery.bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap');
}
add_action( 'init', 'wpeleto_register_js' );
function wpeleto_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpeleto_register_css' );

function wpeleto_theme_customizer( $wp_customize ) {

$wp_customize->add_section( 'wpeleto_logo_section' , array(
    'title'       => __( 'Logo', 'wpeleto' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'wpeleto_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpeleto_logo', array(
    'label'    => __( 'Logo', 'wpeleto' ),
    'section'  => 'wpeleto_logo_section',
    'settings' => 'wpeleto_logo',
) ) );

$wp_customize->add_section('showcase', array(
  'title' => __('Showcase', 'wpeleto'),
  'description' => sprintf(__('Options for Showcase', 'wpeleto')),
  'priority' => 130
));

$wp_customize->add_setting('showcase_heading', array(
  'default' => _x('Custom WPEleto Theme', 'wpeleto'),
  'type' => 'theme_mod'
));

$wp_customize ->add_control('showcase_heading', array(
        'label' => __('Heading','wpeleto'),
        'section' => 'showcase',
        'priority' => 2
      ));

$wp_customize->add_setting('showcase_image', array(
        'default'   => get_bloginfo('template_directory').'bootstrap/img/showcase.jpg',
        'type'      => 'theme_mod'
          ));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label'   => __('Showcase Image', 'wpeleto'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority'  => 1
          )));

$wp_customize->add_setting('showcase_text', array(
        'default' => _x('Say something here', 'wpeleto'),
        'type' => 'theme_mod'
      ));
$wp_customize ->add_control('showcase_text', array(
              'label' => __('Text','wpeleto'),
              'section' => 'showcase',
              'priority' => 3
            ));

$wp_customize->add_setting('btn_url', array(
        'default' => _x('http://www.eletodesign.com', 'wpeleto'),
        'type' => 'theme_mod'
                  ));

$wp_customize ->add_control('btn_url', array(
                          'label' => __('Button URL','wpeleto'),
                          'section' => 'showcase',
                          'priority' => 4
                        ));

$wp_customize->add_setting('btn_text', array(
        'default' => _x('Read More', 'wpeleto'),
        'type' => 'theme_mod'
                                          ));

$wp_customize ->add_control('btn_text', array(
        'label' => __('Button Text','wpeleto'),
        'section' => 'showcase',
        'priority' => 5
    ));

}
//enables widgets
function wpeleto_init_widgets($id){
  register_sidebar(array(
    'name' => 'Box1',
    'id' => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Box2',
    'id' => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Box3',
    'id' => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));
}
//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

function register_my_menu(){
  register_nav_menus(array(
    'primary' => _('Primary Menu'),
    'front-page-menu' => _('Front Page Menu'),
    'footer' => _('Footer_menu')));

}

add_action('init', 'register_my_menu');
add_action( 'customize_register', 'wpeleto_theme_customizer');
add_action('widgets_init','wpeleto_init_widgets');



// ?>
