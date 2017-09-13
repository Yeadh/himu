<?php 
global $slidermetabox;
$slidermetabox = get_post_meta(get_the_id(), '_slider_metabox', true);
$slider_photo_id  = isset($slidermetabox['slider_image'])    ? $slidermetabox['slider_image'] : '';
$attachment       = wp_get_attachment_image_src( $slider_photo_id, 'full' );
$slider_photo_src = isset($attachment[0]) ?  $attachment[0] : ''; 
$slider_subtitle  = isset($slidermetabox['slider_subtitle'])    ? $slidermetabox['slider_subtitle'] : '';
$slider_button_text  = isset($slidermetabox['slider_btn_text'])    ? $slidermetabox['slider_btn_text'] : '';
$slider_button_url  = isset($slidermetabox['slider_btn_url'])    ? $slidermetabox['slider_btn_url'] : '';
?>
	<li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?php echo esc_url($slider_photo_src ); ?>'><img src="<?php echo esc_url($slider_photo_src ); ?>" alt="<?php echo esc_attr($slider_photo_src); ?>" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
		<div class="info">
		  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span><?php the_title(); ?></span> </div>
		  <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><?php echo esc_html($slider_subtitle); ?></div>
		  <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='<?php echo esc_html($slider_button_url); ?>' class="buy-btn"><?php echo esc_html($slider_button_text); ?></a> </div>
		</div>
	</li>