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
 function borabor_metabox_homepage($options){
	 
	$options = array();
	
	
	
    $options[ ] = array(
         'id' => 'borabor_landing_page',
        'title' => 'Custom Home Page Options',
        'post_type' => 'page', // or post or CPT or array( 'page', 'post' )
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            // begin section
			            // begin Events section
            array(
                 'name' => 'featured',
                'title' => 'FEATURED IMAGES',
                'icon' => 'fa fa-star',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'featured_image_top1',
                        'type' => 'image',
                        'title' => __( 'Top Featured Image One', 'premix' )
                    ),
					array(
                         'id' => 'featured_link_top1',
                        'type' => 'text',
                        'title' => __( 'Top Featured Image link', 'premix' )
                    ),
					// a field
                     array(
                         'id' => 'featured_image_top2',
                        'type' => 'image',
                        'title' => __( 'Top Featured Image Two', 'premix' )
                    ),
					array(
                         'id' => 'featured_link_top2',
                        'type' => 'text',
                        'title' => __( 'Top Featured Image link', 'premix' )
                    ),
                    // a field
                     array(
                         'id' => 'featured_image_top3',
                        'type' => 'image',
                        'title' => __( 'Bottom Featured Image ', 'premix' )
                    ),
					array(
                         'id' => 'featured_link_top3',
                        'type' => 'text',
                        'title' => __( 'Top Featured Image link', 'premix' )
                    ),
                    //a group
                    
                ) //end fields
            ),
			
			
			
			
            array(
                 'name' => 'category_featured',
                'title' => __( 'FEATURED CATEGORY', '' ),
                'icon' => 'fa fa-book',
                'fields' => array(
				// FEATURED CAT 1 group
				array(
				  'id'        => 'category_featured1',
				  'type'      => 'fieldset',
				  'title'     => 'FEATURED CAT 1',
				  'fields'    => array(
				  
				  
						// title fieldset, this is subheading option, why not use here ? :)
						array(
						  'id'      => 'subheading',
						  'type'    => 'subheading',
						  'content' => 'ADD FEATURED CAT 1',
						),
						
						array(
						  'id'    => 'category_featured_title1',
						  'type'  => 'text',
						  'title' => 'TITLE',
						),
						
						array(
						  'id'    => 'category_featured_img1',
						  'type'  => 'image',
						  'title' => 'BANNER',
						),
						
						array(
						  'id'    => 'category_featured_button1',
						  'type'  => 'text',
						  'title' => 'BUTTON TEXT',
						),
						
						array(
						  'id'    => 'category_featured_buttonurl1',
						  'type'  => 'text',
						  'title' => 'BUTTON URL',
						),
						//end group
					),
				),// featured 1 end group  field
				
				
				
				array(
				  'id'        => 'category_featured2',
				  'type'      => 'fieldset',
				  'title'     => 'FEATURED CAT 2',
				  'fields'    => array(
				  
				  
						// title fieldset, this is subheading option, why not use here ? :)
						array(
						  'id'      => 'subheading',
						  'type'    => 'subheading',
						  'content' => 'ADD FEATURED CAT 2',
						),
						
						array(
						  'id'    => 'category_featured_title2',
						  'type'  => 'text',
						  'title' => 'TITLE',
						),
						
						array(
						  'id'    => 'category_featured_img2',
						  'type'  => 'image',
						  'title' => 'BANNER',
						),
						
						array(
						  'id'    => 'category_featured_button2',
						  'type'  => 'text',
						  'title' => 'BUTTON TEXT',
						),
						
						array(
						  'id'    => 'category_featured_buttonurl2',
						  'type'  => 'text',
						  'title' => 'BUTTON URL',
						),
						//end group
					),
				),// featured 2 end group  field
				
				
				array(
				  'id'        => 'category_featured3',
				  'type'      => 'fieldset',
				  'title'     => 'FEATURED CAT 3',
				  'fields'    => array(
				  
				  
						// title fieldset, this is subheading option, why not use here ? :)
						array(
						  'id'      => 'subheading',
						  'type'    => 'subheading',
						  'content' => 'ADD FEATURED CAT 3',
						),
						
						array(
						  'id'    => 'category_featured_title3',
						  'type'  => 'text',
						  'title' => 'TITLE',
						),
						
						array(
						  'id'    => 'category_featured_img3',
						  'type'  => 'image',
						  'title' => 'BANNER',
						),
						
						array(
						  'id'    => 'category_featured_button3',
						  'type'  => 'text',
						  'title' => 'BUTTON TEXT',
						),
						
						array(
						  'id'    => 'category_featured_buttonurl3',
						  'type'  => 'text',
						  'title' => 'BUTTON URL',
						),
						//end group
					),
				),// featured 3 end group  field
				
				
				
				array(
				  'id'        => 'category_featured4',
				  'type'      => 'fieldset',
				  'title'     => 'FEATURED CAT 4',
				  'fields'    => array(
				  
				  
						// title fieldset, this is subheading option, why not use here ? :)
						array(
						  'id'      => 'subheading',
						  'type'    => 'subheading',
						  'content' => 'ADD FEATURED CAT 4',
						),
						
						array(
						  'id'    => 'category_featured_title4',
						  'type'  => 'text',
						  'title' => 'TITLE',
						),
						
						array(
						  'id'    => 'category_featured_img4',
						  'type'  => 'image',
						  'title' => 'BANNER',
						),
						
						array(
						  'id'    => 'category_featured_button4',
						  'type'  => 'text',
						  'title' => 'BUTTON TEXT',
						),
						
						array(
						  'id'    => 'category_featured_buttonurl4',
						  'type'  => 'text',
						  'title' => 'BUTTON URL',
						),
						//end group
					),
				),// featured 4 end group  field
				
				
				
				array(
				  'id'        => 'category_featured5',
				  'type'      => 'fieldset',
				  'title'     => 'FEATURED CAT 5',
				  'fields'    => array(
				  
				  
						// title fieldset, this is subheading option, why not use here ? :)
						array(
						  'id'      => 'subheading',
						  'type'    => 'subheading',
						  'content' => 'ADD FEATURED CAT 5',
						),
						
						array(
						  'id'    => 'category_featured_title5',
						  'type'  => 'text',
						  'title' => 'TITLE',
						),
						
						array(
						  'id'    => 'category_featured_img5',
						  'type'  => 'image',
						  'title' => 'BANNER',
						),
						
						array(
						  'id'    => 'category_featured_button5',
						  'type'  => 'text',
						  'title' => 'BUTTON TEXT',
						),
						
						array(
						  'id'    => 'category_featured_buttonurl5',
						  'type'  => 'text',
						  'title' => 'BUTTON URL',
						),
						//end group
					),
				),// featured 5 end group  field
                     
                ) //end fields
            ),
			//End Section
			array(
                 'name' => 'home-client',
                'title' => 'FAQ AND BRANDS',
                'icon' => 'fa fa-star',
                'fields' => array(
                     // Section field
                     array(
						  'id'              => 'brand_group',
						  'type'            => 'group',
						  'title'           => 'Brand Field',
						  'button_title'    => 'Add New',
						  'accordion_title' => 'Brand group',
						  'fields'          => array(

							array(
							  'id'          => 'h_brand_image',
							  'type'        => 'image',
							  'title'       => 'Brands Image Field 1',
							),

						  )
						),
                    //a group
                    
                ) //end fields
            ), //end section
			
			
			
			
			
			
			
			
			
           
		   
        ) 		
    );
	
	return $options;
}
add_filter('cs_metabox_options','borabor_metabox_homepage');
