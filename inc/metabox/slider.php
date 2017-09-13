<?php
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Metabox Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
 function borabor_slider_metabox($options){

$options[]      = array(
  'id'            => '_slider_metabox',
  'title'         => 'Custom Options',
  'post_type'     => 'slider', // or post or CPT or array( 'page', 'post' )
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'section_slider',
      'title'     => 'Slider Details',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
				array(
					'id'      => 'slider_subtitle',
					'title'     => 'Slider Sub Heading',
					'type'      => 'text',
				),
				// a field
				array(
					'id'      => 'slider_image',
					'title'     => 'Slider Image',
					'type'      => 'image',
				),
				// a field
				array(
					 'id' => 'slider_btn_text',
					'type' => 'text',
					'title' => 'Button Text', 
				),
				// a field
				array(
					 'id' => 'slider_btn_url',
					'type' => 'text',
					'title' => 'Button Link',
				),
	
			
	

        // End field
        

      ),
    ),

    

  ),
);
	return $options;
 }
add_filter('cs_metabox_options','borabor_slider_metabox');