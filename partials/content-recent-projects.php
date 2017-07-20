<?php
/**
 * Template for displaying `Recent Projects` 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package G7-Marketing
 */

?>

<!-- Recent Projects -->
<div class="modal animated fayde modal-fullscreen recent-projects-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <div class="icon-arrow-left ml-3"></div>
			    <div class="btl bt-times white close-recent-projects mr-3" data-dismiss="modal" aria-label="Close"></div>
            </div>
            <div class="modal-body">
                <section class="container-fluid p-0">
				    <div class="row">
				        <div class="col-lg-12 p-0 recent-projects-slider-container">
				        	<div id="recentProjectsSlider" class="content">
				        	<?php
							$args = array(
								'post_type' 	 => 'case-study',
								'posts_per_page' => -1,
							);

							$the_query = new WP_Query( $args );

							if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

							?>
							
							<div class="col-lg-6 col-md-6 col-12 case-study-item">
						        <a href="<?php the_permalink(); ?>" class="card card-inverse">
								  <img class="card-img img-fluid" src="<?php the_field('thumbnail'); ?>" alt="">
								  <div class="card-img-overlay">
								    <h4 class="card-title mt-2 mr-5"><?php the_field('case_highlight'); ?></h4>
								    <p class="mr-5"><?php the_title(); ?></p>
								    <div class="icon-arrow-white"></div>
								  </div>
								</a>
						    </div>

							<?php endwhile; else: ?>

							<p class="mx-auto text-center charcoal sub-text">Sorry, there are no recent projects to display</p>

							<?php

							endif;
							wp_reset_query(); ?>
							</div>
							<div class="loader"></div>
							<div id="recentProjectsMobile" class="content">
				        	<?php
							$args = array(
								'post_type' 	 => 'case-study',
								'posts_per_page' => -1,
							);

							$the_query = new WP_Query( $args );

							if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

							?>
							
							<div class="col-lg-6 col-md-6 col-12 case-study-item">
						        <a href="<?php the_permalink(); ?>" class="card card-inverse">
								  <img class="card-img img-fluid" src="<?php the_field('thumbnail'); ?>" alt="">
								  <div class="card-img-overlay">
								    <h4 class="card-title mt-2 mr-5"><?php the_field('case_highlight'); ?></h4>
								    <p class="mr-5"><?php the_title(); ?></p>
								    <div class="icon-arrow-white"></div>
								  </div>
								</a>
						    </div>

							<?php endwhile; else: ?>

							<p class="mx-auto text-center charcoal sub-text">Sorry, there are no recent projects to display</p>

							<?php

							endif;
							wp_reset_query(); ?>
							</div>
						</div>
				    </div>
				</section>
            </div>
            <div class="modal-footer">
            	<div class="recent-projects-footer">
            		<a href="#" class="left-arrow">
            			<i class="btl bt-angle-left white" aria-hidden="true"></i>
            		</a>
            		<div class="paging-info"></div>
            		<a href="#" class="right-arrow">
            			<i class="btl bt-angle-right white" aria-hidden="true"></i>
            		</a>
            	</div>
            </div>
        </div>
    </div>
</div>