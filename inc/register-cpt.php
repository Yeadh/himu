<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package 
 */

/**
 * Custom post type for Slider.
 *
 */
function borabor_register_cpt() {
  register_post_type( 'slider',
    array(
      'labels' => array(
        'name' => __( 'slider' ),
        'singular_name' => __( 'Slider' ),
		'add_new' => ('Add New Slider'),
      ),
      'public' => true,
	  'supports' => array( 'title' ),
      'has_archive' => true,
    )
  );
 

  	// Add Categorys for artist
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'borabor' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'borabor' ),
		'search_items'      => __( 'Search Categorys', 'borabor' ),
		'all_items'         => __( 'All Categorys', 'borabor' ),
		'parent_item'       => __( 'Parent Category', 'borabor' ),
		'parent_item_colon' => __( 'Parent Category:', 'borabor' ),
		'edit_item'         => __( 'Edit Category', 'borabor' ),
		'update_item'       => __( 'Update Category', 'borabor' ),
		'add_new_item'      => __( 'Add New Category', 'borabor' ),
		'new_item_name'     => __( 'New Category Name', 'borabor' ),
		'menu_name'         => __( 'Category', 'borabor' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'slider-category' ),
	);

	register_taxonomy( 'slider-category', array( 'slider' ), $args );
}
add_action( 'init', 'borabor_register_cpt' );


































