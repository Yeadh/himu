<?php
 global $metabox;
	
$brand_groups = isset($metabox['brand_group']) ? (array) $metabox['brand_group'] : array();

?>
		<div id="testimonials" class="product-flexslider hidden-buttons col-sm-6">
          <div class="slider-items slider-width-col1 owl-carousel owl-theme">
            <div class="brand">
              <div class="row">
			  <?php 
					foreach($brand_groups as $group):
						$brand_photo_id    = isset($group['h_brand_image']) ? $group['h_brand_image'] : '';
						
						$attachment       = wp_get_attachment_image_src( $brand_photo_id, 'brand-image' );
						$brand_photo_src = isset($attachment[0]) ?  $attachment[0] : '';
						?> 
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 brand-logo-size">
						  <div class="brand1"> <img src="<?php echo esc_url($brand_photo_src); ?>"> </div>
						</div>
				
				<?php endforeach; ?>
              </div>
            </div>
            <!-- Item -->
            <div class="brand">
              <div class="row">
			  <?php 
					foreach($brand_groups as $group):
						$brand_photo_id    = isset($group['h_brand_image']) ? $group['h_brand_image'] : '';
						
						$attachment       = wp_get_attachment_image_src( $brand_photo_id, 'brand-image' );
						$brand_photo_src = isset($attachment[0]) ?  $attachment[0] : '';
						?> 
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 brand-logo-size">
						  <div class="brand1"> <img src="<?php echo esc_url($brand_photo_src); ?>"> </div>
						</div>
				
				<?php endforeach; ?>
              </div>
            </div>
            <!-- End Item --> 
          </div>
        </div><!-- .col -->