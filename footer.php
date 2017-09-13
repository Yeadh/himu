<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

<!-- Footer -->
<footer id="footer">
  <div class="footer-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="block-contact">
            <ul id="block-contact_list">
				<?php 
					if( brb_option( 'borabor_footer_location' , 'borabor_footer_phone' , 'borabor_footer_email' )  )
					  {
						echo sprintf('<li class="block_1"> <i class="fa fa-map-marker"></i> <span class="contactdiv">%s</span> </li>', esc_html( brb_option( 'borabor_footer_location' )  ) );
					  }
					  {
						echo sprintf('<li class="block_2"> <i class="fa fa-map-marker"></i> <span class="contactdiv">%s</span> </li>', esc_html( brb_option( 'borabor_footer_phone' )  ) );
					  }
					  {
						echo sprintf('<li class="block_3"> <i class="fa fa-map-marker"></i> <span class="contactdiv">%s</span> </li>', esc_html( brb_option( 'borabor_footer_email' )  ) );
					  }
				?>
            </ul>
          </div>
        </div>
        <?php dynamic_sidebar( 'sidebar-below' ); ?>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="copyright"> <a class="_blank" href="#" target="_blank"><?php esc_html_e( brb_option('borabor_footer_copyright' ) ); ?> </a> </div>
    </div>
  </div>
</footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
