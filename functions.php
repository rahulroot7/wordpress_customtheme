
<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

add_theme_support( 'menus' );

/**
 * Create Custo Post Type for Slideres
 */

function create_slider_post_type() {

	$labels = array(
		'name' => __( 'Sliders' ),
		'singular_name' => __( 'Sliders' ),
		'all_items'           => __( 'All Sliders' ),
		'view_item'           => __( 'View Slider' ),
		'add_new_item'        => __( 'Add New Slider' ),
		'add_new'             => __( 'Add New Slider' ),
		'edit_item'           => __( 'Edit Slider' ),
		'update_item'         => __( 'Update Slider' ),
		'search_items'        => __( 'Search Slider' ),
		'search_items' => __('Sliders')
	);

	$args = array(
		'labels' => $labels,
		'description' => 'Add New Slider contents',
		'menu_position' => 27,
		'public' => true,
		'has_archive' => true,
		'map_meta_cap' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array('slug' => false),
		'menu_icon'=>'dashicons-format-image',
		'supports' => array(
			'title',
			'thumbnail','excerpt'
		),
	);
	register_post_type( 'slider', $args);

}
add_action( 'init', 'create_slider_post_type' );


add_action( 'init', function() {
    remove_post_type_support( 'slider', 'editor' );
    remove_post_type_support( 'slider', 'slug' );
} );

function cih_theme_support(){

   add_theme_support( 'post-thumbnails' );
   add_image_size( 'slider_image','1024','720',true);

}
add_action('after_setup_theme','cih_theme_support');

function sliderLink_add_meta_box() {
   add_meta_box('slider_link','Slider Link','slider_link_callback','slider');
}

function slider_link_callback( $post ) {

   wp_nonce_field('slider_link_save','slider_link_meta_box_nonce');
   $value = get_post_meta($post->ID,'_slider_link_value_key',true);
   ?>
    <input type="text" name="slider_link_field" id="slider_link_field" value="<?php echo esc_attr( $value ); ?>" required="required" size="100" />
   <?php
}
add_action('add_meta_boxes','sliderLink_add_meta_box');


function slider_link_save( $post_id ) {
   if( ! isset($_POST['slider_link_meta_box_nonce'])) {
      return;
   }
   if( ! wp_verify_nonce( $_POST['slider_link_meta_box_nonce'], 'slider_link_save') ) {
      return;
   }
   if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
      return;
   }
   if( ! current_user_can('edit_post', $post_id)) {
      return;
   }
   if( ! isset($_POST['slider_link_field'])) {
      return;
   }
   $slider_link = sanitize_text_field($_POST['slider_link_field']);
   update_post_meta( $post_id,'_slider_link_value_key', $slider_link );
}
add_action('save_post','slider_link_save');


/* Create Custo Post Type for Slideres */

/* Create Custo Post Type for About us page */

function create_about_post_type() {

	$labels = array(
		'name' => __( 'About' ),
		'singular_name' => __( 'abouts' ),
		'all_items'           => __( 'All abouts' ),
		'view_item'           => __( 'View about' ),
		'add_new_item'        => __( 'Add New about' ),
		'add_new'             => __( 'Add New about' ),
		'edit_item'           => __( 'Edit about' ),
		'update_item'         => __( 'Update about' ),
		'search_items'        => __( 'Search about' ),
		'search_items' => __('abouts')
	);

	$args = array(
		'labels' => $labels,
		'description' => 'Add New about contents',
		'menu_position' => 27,
		'public' => true,
		'has_archive' => true,
		'map_meta_cap' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array('slug' => false),
		'menu_icon'=>'dashicons-format-image',
		'supports' => array(
			'title',
			'thumbnail','excerpt'
		),
	);
	register_post_type( 'about', $args);

}
add_action( 'init', 'create_about_post_type' );


add_action( 'init', function() {
    remove_post_type_support( 'about', 'editor' );
    remove_post_type_support( 'about', 'slug' );
} );

function cih_theme_support_about(){

   add_theme_support( 'post-thumbnails' );
   add_image_size( 'about_image','1024','720',true);

}
add_action('after_setup_theme','cih_theme_support');

function aboutLink_add_meta_box() {
   add_meta_box('about_link','about Link','about_link_callback','about');
}

function about_link_callback( $post ) {

   wp_nonce_field('about_link_save','about_link_meta_box_nonce');
   $value = get_post_meta($post->ID,'_about_link_value_key',true);
   ?>
    <input type="text" name="about_link_field" id="about_link_field" value="<?php echo esc_attr( $value ); ?>" required="required" size="100" />
   <?php
}
add_action('add_meta_boxes','aboutLink_add_meta_box');


function about_link_save( $post_id ) {
   if( ! isset($_POST['about_link_meta_box_nonce'])) {
      return;
   }
   if( ! wp_verify_nonce( $_POST['about_link_meta_box_nonce'], 'about_link_save') ) {
      return;
   }
   if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
      return;
   }
   if( ! current_user_can('edit_post', $post_id)) {
      return;
   }
   if( ! isset($_POST['about_link_field'])) {
      return;
   }
   $about_link = sanitize_text_field($_POST['about_link_field']);
   update_post_meta( $post_id,'_about_link_value_key', $about_link );
}
add_action('save_post','about_link_save');

   
/*  add this code in functions.php child theme file */
    
    register_sidebar( array(
	'name' => 'Footer #1',
	'id' => 'sidebar1',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer #2',
	'id' => 'sidebar2',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer #3',
	'id' => 'sidebar3',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer #4',
	'id' => 'sidebar4',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Copyright',
	'id' => 'sidebar5',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
    register_sidebar( array(
	'name' => 'Join us ',
	'id' => 'sidebar6',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
add_action( 'wp_enqueue_scripts', 'watnopaar_wp' );



function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );