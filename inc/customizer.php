<?php
/**
 * prebook Theme Customizer
 *
 * @package prebook
 */

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.



add_filter( 'cs_customize_options', function( $options ) {

  $options      = array(); // remove old options

$options[]      = array(
  'name'        => 'borabor_social_share',
  'title'       => 'Top Header Settings',
  'priority' => 40,
  'settings'    => array(
				array(
					  'name'    => 'top_heading_text',
					  'default' =>'',
					  'control' => array(
						'label' => 'Top Heading Text',
						'type'  => 'text',
					  ),
					),

				array(
					  'name'    => 'facebook_link',
					  'control' => array(
						'label' => 'Facebook Url:',
						'type'  => 'text',
					  ),
					),

					array(
					  'name'    => 'twitter_link',
					  'control' => array(
						'label' => 'Twitter Url:',
						'type'  => 'text',
					  ),
					),
				   
					array(
					  'name'    => 'google_plus_link',
					  'control' => array(
						'label' => 'Google+ Url:',
						'type'  => 'text',
					  ),
					),
				 
					array(
					  'name'    => 'youtube_link',
					  'control' => array(
						'label' => 'Youtube Url:',
						'type'  => 'text',
					  ),
					),

					array(
					  'name'    => 'instagram_link',
					  'control' => array(
						'label' => 'Instragram Url:',
						'type'  => 'text',
					  ),
					),
					
					array(
					  'name'    => 'rss_link',
					  'control' => array(
						'label' => 'RSS Url:',
						'type'  => 'text',
					  ),
					),
					
					array(
					  'name'    => 'linkedin_link',
					  'control' => array(
						'label' => 'Linkedin Url:',
						'type'  => 'text',
					  ),
					),
					
					array(
					  'name'    => 'pinterest_link',
					  'control' => array(
						'label' => 'Pinterest Url:',
						'type'  => 'text',
					  ),
					),	
					array(
					  'name'    => 'test_img',
					  'control' => array(
						'label' => 'Testing image:',
						'type'  => 'image',
					  ),
					),	
			  )//settings
			);//end top header sections

				

					
						//start footer section
				$options[]      = array(
				  'name'        => 'borabor_footer',
				  'title'       => 'Footer Settings',
				  'priority' => 50,
				  'settings'    => array(
							array(
								  'name'    => 'borabor_footer_location',
								  'control' => array(
									'label' => 'ADD YOUR LOCATION',
									'type'  => 'text',
								  ),
								),
							array(
								  'name'    => 'borabor_footer_phone',
								  'control' => array(
									'label' => 'ADD YOUR PHONE NUMBER',
									'type'  => 'text',
								  ),
								),

							array(
							  'name'    => 'borabor_footer_email',
							  'control' => array(
								'label' => 'ADD YOUR EMAIL',
								'type'  => 'text',
							  ),
							),
							array(
							  'name'    => 'borabor_footer_copyright',
							  'control' => array(
								'label' => 'ADD COPYRIGHT TEXT',
								'type'  => 'text',
							  ),
							),
							
					  )//settings
					);//end top header sections



	// Customize Appearance Options
	function borabor_customize_register( $wp_customize ) {
		$wp_customize->remove_section('header_image'); 
		$wp_customize->remove_section('colors');
		$wp_customize->remove_section('background_image');
		$wp_customize->remove_section('storefront_footer');
		$wp_customize->remove_section('storefront_typography');
		$wp_customize->remove_section('storefront_buttons');
		$wp_customize->remove_section('storefront_layout');
		$wp_customize->remove_section('storefront_more');
		
		//====================
		
	}
	add_action('customize_register', 'borabor_customize_register');

	
	
  return $options;

});//end filter


