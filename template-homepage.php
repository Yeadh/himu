<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

 global $metabox;

	$metabox = get_post_meta( get_the_id(), 'borabor_landing_page', true);
 	$featured_img3_link = isset($metabox['featured_link_top3'])    ? $metabox['featured_link_top3'] : '';
	$featured_img3_id  = isset($metabox['featured_image_top3'])    ? $metabox['featured_image_top3'] : '';
	$attachment       =  wp_get_attachment_image_src( $featured_img3_id, 'full' );
	$featured_img3 = isset($attachment[0]) ?  $attachment[0] : '';
	//End Featured 3
get_header(); ?>

			<!-- Offer Product -->
					<?php get_template_part('sections/heighlights'); ?>
			  <!-- End Offer Product -->
			  <!-- featured category -->
					<?php get_template_part('sections/featured-cat'); ?>
			  <!-- end featured category -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 */
			do_action( 'homepage' ); ?>
		
		</main><!-- #main -->
		
	<div class="bottom-banner-section">
		<div class="container"> <img alt="<?php echo esc_attr($featured_img3); ?>" src="<?php echo esc_url($featured_img3); ?>"> </div>
    </div>
		
	<div class="main-section">
		<div class="container">
		  <div class="row">
			
			<?php dynamic_sidebar( 'borabor-sidebar-1' ); ?>


			
		  </div>
		</div>
	</div>	
		<!-- Brand Logo -->
  <div class="Faq-bar">
    <div class="container">
      <div class="row">
        <div class="h2 products-section-title">FAQ and Brands</div>
        
		
		<?php get_template_part('sections/brand'); ?>
		
		
		
		
		
		
        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 out-service">
        	<div class="single-service">
        		<div class="service-icon"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></div>
        		<div class="service-details">
        			<h3>Best Value Product</h3>
        			<span>Top Quality Brand</span>
        		</div>
        	</div>
        	<div class="single-service">
        		<div class="service-icon"><i class="fa fa-car" aria-hidden="true"></i></div>
        		<div class="service-details">
        			<h3>Free Delivery</h3>
        			<span>Delivery World Wide</span>
        		</div>
        	</div>
        	<div class="single-service">
        		<div class="service-icon"><i class="fa fa-shield" aria-hidden="true"></i></div>
        		<div class="service-details">
        			<h3>Secure Shiping</h3>
        			<span>Your Personal is Secured</span>
        		</div>
        	</div>
        </div><!-- .col -->
      </div>
    </div>
  </div>
		
		
		
		
		
		

	</div><!-- #primary -->
<?php
get_footer();
