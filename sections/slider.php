
 <div id="content"> 
      <!-- Slider -->
      <div id="thmsoft-slideshow" class="thmsoft-slideshow">
        <div class="">
          <div>
            <div class="thm_topsection">
              <div>
                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                  <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                    <ul>
					
					<?php 
					$slider_home = new WP_Query(array(
						'post_type' => 'slider',
					));
					
					while ( $slider_home->have_posts()) : $slider_home->the_post(); 
						get_template_part('template-parts/slider-loop'); 
					endwhile; 
					?>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Slider --> 