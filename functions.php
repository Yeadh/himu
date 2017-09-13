<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */

  function dd($variable, $die = false)
 {
	 echo "<pre>";
	 if(empty($valiable))
	 {
		 var_dump($variable);
	 }
	 else
	 {
		 print_r($variable);
	 }
	 echo "</pre>";
	 
	 if($die)
		 die();
 }
 
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require_once 'inc/storefront-functions.php';
require_once 'inc/storefront-template-hooks.php';
require_once 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require_once 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require_once 'inc/woocommerce/class-storefront-woocommerce.php';

	require_once 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require_once 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require_once 'inc/admin/class-storefront-admin.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */
  /**
 * Enqueue scripts and styles.
 */
function borabor_scripts() {
	wp_enqueue_style( 'plugins', 	get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0' );
	wp_enqueue_style( 'style', 		get_template_directory_uri() . '/assets/css/style.css', array(), '1.0' );


	wp_enqueue_script( 'borabor-plugin', 	get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'borabor-main', 	get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', false );
}
add_action( 'wp_enqueue_scripts', 'borabor_scripts' );
 
 //Register widgets
 
 function borabor_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Before Footer Widgets' ),
		'id'            => 'borabor-sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'borabor' ),
		'before_widget' => '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="new-product">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="h2 products-section-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widgets' ),
		'id'            => 'sidebar-below',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyseventeen' ),
		'before_widget' => '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 links wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );


}
add_action( 'widgets_init', 'borabor_widgets_init' );

 //remove woocommerce result count


function borabor_remove_woocommerce_catalog_ordering(){
    remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10);
}
add_action('after_setup_theme', 'borabor_remove_woocommerce_catalog_ordering', 1);







 //remove woocommerce result count
add_action( 'init', 'borabor_remove_storefront_homepage_content' );
function borabor_remove_storefront_homepage_content() {
    remove_action( 'homepage', 'storefront_homepage_content', 10, 0 );
}
 //remove woocommerce result count
add_action( 'init', 'borabor_remove_storefront_product_categoriest' );
function borabor_remove_storefront_product_categoriest() {
    remove_action( 'homepage', 'storefront_product_categories', 20, 0 );
}

 //remove woocommerce result count
add_action( 'init', 'borabor_remove_storefront_recent_products' );
function borabor_remove_storefront_recent_products() {
    remove_action( 'homepage', 'storefront_recent_products', 30, 0 );
}

 //remove woocommerce result count
add_action( 'init', 'borabor_remove_storefront_on_sale_products' );
function borabor_remove_storefront_on_sale_products() {
    remove_action( 'homepage', 'storefront_on_sale_products', 60, 0 );
}
 //remove woocommerce result count
add_action( 'init', 'borabor_remove_storefront_featured_products' );
function borabor_remove_storefront_featured_products() {
    remove_action( 'homepage', 'storefront_featured_products', 40, 0 );
}
 //remove woocommerce result count
add_action( 'init', 'borabor_remove_storefront_popular_products' );
function borabor_remove_storefront_popular_products() {
    remove_action( 'homepage', 'storefront_popular_products', 50, 0 );
}

 //remove woocommerce result count
add_action( 'init', 'borabor_remove_wc_print_notices' );
function borabor_remove_wc_print_notices() {
    remove_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10, 0 );
}
 //remove woocommerce result count
add_action( 'init', 'borabor_remove_woocommerce_result_count' );
function borabor_remove_woocommerce_result_count() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
}













//Shop Pagenition 
function borabor_pagination() {

global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
		'prev_next'          => true,
		'prev_text'          => __('«'),
		'next_text'          => __('»'),
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul>';
        }
}


// WooCommerce custom catalog ordering 
add_filter( 'woocommerce_catalog_orderby', 'flipmart_custom_woocommerce_catalog_orderby' );
function flipmart_custom_woocommerce_catalog_orderby( $sortby ) {
	$sortby['menu_order'] = 'Position';
	$sortby['price'] = 'Price';
	$sortby['price-desc'] = 'Name';
	unset($sortby['popularity']);
	unset($sortby['date']);
	unset($sortby['rating']);
	
	return $sortby;
}


// WooCommerce shop page show per page drop down

function flipmart_woocommerce_catalog_page_ordering() {
?>
<div class="lbl-cnt">
<?php echo '<span class="lbl">View:</span>' ?>
<form action="" method="POST" name="results" class="fld inline">
<select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby" onchange="this.form.submit()">
<?php
//Get products on page reload
if  (isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] <> $_POST['woocommerce-sort-by-columns']))) {
$numberOfProductsPerPage = $_POST['woocommerce-sort-by-columns'];
} else {
$numberOfProductsPerPage = $_COOKIE['shop_pageResults'];
}
//  This is where you can change the amounts per page that the user will use  feel free to change the numbers and text as you want, in my case we had 4 products per row so I chose to have multiples of four for the user to select.
$shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
//Add as many of these as you like, -1 shows all products per page
//  ''       => __('Results per page', 'woocommerce'),
'10' 		=> __('10', 'flipmart'),
'20' 		=> __('20', 'flipmart'),
'30' 		=> __('30', 'flipmart'),
'40' 		=> __('40', 'flipmart'),
'50' 		=> __('50', 'flipmart'),
'-1' 		=> __('All', 'flipmart'),
));
foreach ( $shopCatalog_orderby as $sort_id => $sort_name )
echo '<option value="' . $sort_id . '" ' . selected( $numberOfProductsPerPage, $sort_id, true ) . ' >' . $sort_name . '</option>';
?>
</select>
</form>
</div>
<?php
}

/**
 * custom_woocommerce_template_loop_add_to_cart
*/
add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'View products', 'woocommerce' );
		break;
		case 'simple':
			return  __('');
		break;
		case 'variable':
			return __( '', 'woocommerce' );
		break;
		default:
			return __( 'Read more', 'woocommerce' );
	}
	
}
 
	function borabor_top_social_links(){
		  if( brb_option( 'facebook_link' )  )
		  {
			echo sprintf('<li class="fb pull-left"><a href="%s"></a></li>', esc_url( brb_option( 'facebook_link' )  ) );
		  }
		  if( brb_option( 'twitter_link' )  )
		  {
			echo sprintf('<li class="tw pull-left"><a href="%s"></a></li>', esc_url( brb_option( 'twitter_link' )  ) );
		  }
		  if( brb_option( 'google_plus_link' )  )
		  {
			echo sprintf('<li class="googleplus pull-left"><a href="%s"></a></li>', esc_url( brb_option( 'google_plus_link' )  ) );
		  }
		  if( brb_option( 'youtube_link' )  )
		  {
			echo sprintf('<li class="rss pull-left"><a href="%s"></a></li>', esc_url( brb_option( 'youtube_link' )  ) );
		  }
		  if( brb_option( 'instagram_link' )  )
		  {
			echo sprintf('<li class="pintrest pull-left"><a href="%s"></a></li>', esc_url( brb_option( 'instagram_link' )  ) );
		  }
		  if( brb_option( 'linkedin_link' )  )
		  {
			echo sprintf('<li class="linkedin pull-left"><a href="%s"></a></li>', esc_url( brb_option( 'linkedin_link' )  ) );
		  }
		  if( brb_option( 'pinterest_link' )  )
		  {
			echo sprintf('<li class="youtube pull-left"><a href="%s"></a></li>', esc_url( brb_option( 'pinterest_link' )  ) );
		  }
	}

	function brb_option( $option_key , $default = '')
	{
		return cs_get_customize_option( $option_key )?: $default;
	}
	


require_once get_template_directory() . '/inc/register-cpt.php';
require_once get_template_directory() . '/inc/metabox/homepage.php';

require_once get_template_directory() . '/inc/metabox/slider.php';
require_once get_template_directory() . '/inc/codestar-framework-master/cs-framework.php';
require_once get_template_directory() . '/inc/customizer.php';