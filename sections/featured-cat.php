<?php
 global $metabox;
	
	
	$category_featured_title1     = isset($metabox['category_featured1']['category_featured_title1'])    ? $metabox['category_featured1']['category_featured_title1'] : '' ;
	$category_featured_button1  = isset($metabox['category_featured1']['category_featured_button1']) ? $metabox['category_featured1']['category_featured_button1'] : '';
	$category_featured_buttonurl1  = isset($metabox['category_featured1']['category_featured_buttonurl1']) ? $metabox['category_featured1']['category_featured_buttonurl1'] : '';
	$category_featured_img1_id  = isset($metabox['category_featured1']['category_featured_img1'])    ? $metabox['category_featured1']['category_featured_img1'] : '';
	$attachment       =  wp_get_attachment_image_src( $category_featured_img1_id, 'full' );
	$category_featured_img1 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 1
	$category_featured_title2     = isset($metabox['category_featured2']['category_featured_title2'])    ? $metabox['category_featured2']['category_featured_title2'] : '' ;
	$category_featured_button2  = isset($metabox['category_featured2']['category_featured_button2']) ? $metabox['category_featured2']['category_featured_button2'] : '';
	$category_featured_buttonurl2  = isset($metabox['category_featured2']['category_featured_buttonurl2']) ? $metabox['category_featured2']['category_featured_buttonurl2'] : '';
	$category_featured_img2_id  = isset($metabox['category_featured2']['category_featured_img2'])    ? $metabox['category_featured2']['category_featured_img2'] : '';
	$attachment       =  wp_get_attachment_image_src( $category_featured_img2_id, 'full' );
	$category_featured_img2 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 2
	$category_featured_title3     = isset($metabox['category_featured3']['category_featured_title3'])    ? $metabox['category_featured3']['category_featured_title3'] : '' ;
	$category_featured_button3  = isset($metabox['category_featured3']['category_featured_button3']) ? $metabox['category_featured3']['category_featured_button3'] : '';
	$category_featured_buttonurl3  = isset($metabox['category_featured3']['category_featured_buttonurl3']) ? $metabox['category_featured3']['category_featured_buttonurl3'] : '';
	$category_featured_img3_id  = isset($metabox['category_featured3']['category_featured_img3'])    ? $metabox['category_featured3']['category_featured_img3'] : '';
	$attachment       =  wp_get_attachment_image_src( $category_featured_img3_id, 'full' );
	$category_featured_img3 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 3
	$category_featured_title4     = isset($metabox['category_featured4']['category_featured_title4'])    ? $metabox['category_featured4']['category_featured_title4'] : '' ;
	$category_featured_button4  = isset($metabox['category_featured4']['category_featured_button4']) ? $metabox['category_featured4']['category_featured_button4'] : '';
	$category_featured_buttonurl4  = isset($metabox['category_featured4']['category_featured_buttonurl4']) ? $metabox['category_featured4']['category_featured_buttonurl4'] : '';
	$category_featured_img4_id  = isset($metabox['category_featured4']['category_featured_img4'])    ? $metabox['category_featured4']['category_featured_img4'] : '';
	$attachment       =  wp_get_attachment_image_src( $category_featured_img4_id, 'full' );
	$category_featured_img4 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 4
	$category_featured_title5     = isset($metabox['category_featured5']['category_featured_title5'])    ? $metabox['category_featured5']['category_featured_title5'] : '' ;
	$category_featured_button5  = isset($metabox['category_featured5']['category_featured_button5']) ? $metabox['category_featured5']['category_featured_button5'] : '';
	$category_featured_buttonurl5  = isset($metabox['category_featured5']['category_featured_buttonurl5']) ? $metabox['category_featured5']['category_featured_buttonurl5'] : '';
	$category_featured_img5_id  = isset($metabox['category_featured5']['category_featured_img5'])    ? $metabox['category_featured5']['category_featured_img5'] : '';
	$attachment       =  wp_get_attachment_image_src( $category_featured_img5_id, 'full' );
	$category_featured_img5 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 5
?>
 <!-- Banner Blog -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="banner-container">
            <div class="banner-inner">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <div class="figure-content"><a href="<?php echo esc_html($category_featured_buttonurl1 ); ?>"> <img alt="<?php echo esc_attr($category_featured_img1); ?>" src="<?php echo esc_url($category_featured_img1); ?>"> </a> </div>
                  <figcaption>
                    <div class="center white">
                      <p class="h4"><?php echo esc_html($category_featured_title1 ); ?></p>
                      <a href="<?php echo esc_html($category_featured_buttonurl1 ); ?>"><button class="btn-learn"><?php echo esc_html($category_featured_button1 ); ?></button></a>
                    </div>
                  </figcaption>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="figure-content"><a href="<?php echo esc_html($category_featured_buttonurl2 ); ?>"> <img alt="<?php echo esc_attr($category_featured_img2); ?>" src="<?php echo esc_url($category_featured_img2); ?>"> </a> </div>
                  <figcaption>
                    <div class="center">
                      <p class="h4"><?php echo esc_html($category_featured_title2 ); ?></p>
                      <a href="<?php echo esc_html($category_featured_buttonurl2 ); ?>"><button class="btn-learn"><?php echo esc_html($category_featured_button2 ); ?></button></a>
                    </div>
                  </figcaption>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="banner-container">
            <div class="banner-inner">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="figure-content"><a href="<?php echo esc_html($category_featured_buttonurl3 ); ?>"> <img alt="<?php echo esc_attr($category_featured_img3); ?>" src="<?php echo esc_url($category_featured_img3); ?>"> </a></div>
                  <figcaption>
                    <div class="center">
                      <p class="h4"><?php echo esc_html($category_featured_title3 ); ?></p>
                      <a href="<?php echo esc_html($category_featured_buttonurl3 ); ?>"><button class="btn-learn"><?php echo esc_html($category_featured_button3 ); ?></button></a>
                    </div>
                  </figcaption>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="figure-content"><a href="<?php echo esc_html($category_featured_buttonurl4 ); ?>"> <img alt="<?php echo esc_attr($category_featured_img4); ?>" src="<?php echo esc_url($category_featured_img4); ?>"> </a></div>
                  <figcaption>
                    <div class="center">
                      <p class="h4"><?php echo esc_html($category_featured_title4 ); ?></p>
                      <a href="<?php echo esc_html($category_featured_buttonurl4 ); ?>"><button class="btn-learn"><?php echo esc_html($category_featured_button4 ); ?></button></a>
                    </div>
                  </figcaption>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="figure-content"><a href="<?php echo esc_html($category_featured_buttonurl5 ); ?>"> <img alt="<?php echo esc_attr($category_featured_img5); ?>" src="<?php echo esc_url($category_featured_img5); ?>"> </a></div>
                  <figcaption>
                    <div class="center">
                      <p class="h4"><?php echo esc_html($category_featured_title5 ); ?></p>
                      <a href="<?php echo esc_html($category_featured_buttonurl5); ?>"><button class="btn-learn"><?php echo esc_html($category_featured_button5 ); ?></button></a>
                    </div>
                  </figcaption>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>