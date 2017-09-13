<?php
 global $metabox;
	
	
	$featured_img1_link = isset($metabox['featured_link_top1'])    ? $metabox['featured_link_top1'] : '';
	$featured_img1_id  = isset($metabox['featured_image_top1'])    ? $metabox['featured_image_top1'] : '';
	$attachment       =  wp_get_attachment_image_src( $featured_img1_id, 'full' );
	$featured_img1 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 1
	$featured_img2_link = isset($metabox['featured_link_top2'])    ? $metabox['featured_link_top2'] : '';
	$featured_img2_id  = isset($metabox['featured_image_top2'])    ? $metabox['featured_image_top2'] : '';
	$attachment       =  wp_get_attachment_image_src( $featured_img2_id, 'full' );
	$featured_img2 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 2

?>
			<div class="offer-product">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 single-offer-product">
							<a href="<?php echo esc_html($featured_img1_link ); ?>"><img src="<?php echo esc_url($featured_img1); ?>" alt="<?php echo esc_attr($featured_img1); ?>"></a>
						</div>
						<div class="col-sm-6 single-offer-product">
							<a href="<?php echo esc_html($featured_img2_link ); ?>"><img src="<?php echo esc_url($featured_img2); ?>" alt="<?php echo esc_attr($featured_img2); ?>"></a>
						</div>
					</div>
				</div>
			</div>