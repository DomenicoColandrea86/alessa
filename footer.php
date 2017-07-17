<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package G7-Marketing
 */

?>
	</div>
	<!-- #content -->

	<!-- Footer -->
	<footer>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-10 offset-lg-1">
		            <div class="row">
		            	<div class="mobile mb-5">
		            		<div class="col-12">
			            		<p class="section-text mb-4">Sign up to our Newsletter</p>
		        				<a href="#" data-toggle="modal" data-target=".contact-us-modal" class="d-block icon-arrow"></a>		
		            		</div>
    					</div>
		            	<div class="col-md-4">
		            		<h5>Contact us</h5>
		            		<br>
		            		<?php

							$args = array(
								'post_type' 	 => 'footer',
								'posts_per_page' => -1,
							);

							$the_query = new WP_Query( $args );

							if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

							?>
							<p><?php the_field('phone'); ?></p>
				    		<p><?php the_field('email'); ?></p>
				    		<br>
				    		<p><?php the_field('address'); ?></p>
				    		<p class="mb-0"><?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zipcode'); ?></p>

				    		<?php

							endwhile;

							endif;

							wp_reset_query(); ?>
		            	</div>
			    		<div class="col-md-4 d-flex">
			    			<div class="row mx-auto">
			    				<div class="col-12 p-0">
			    					<div class="desktop">
			    						<h5 class="mb-4">Newsletter Sign up</h4>
				        				<a href="#" data-toggle="modal" data-target=".contact-us-modal" class="d-block icon-arrow"></a>
			    					</div>
			    					<div class="mobile">
						        		<h5 class="mt-5 mb-4">Follow us</h5>
			    					</div>
			    				</div>
			    				<div class="col-12 p-0 align-self-end">
				    				<div class="d-flex justify-content-between">
				    					<?php

										$args = array(
											'post_type' 	 => 'social-media',
											'posts_per_page' => -1,
										);

										$the_query = new WP_Query( $args );

										if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
										
										if ( get_field( 'facebook' ) ): ?>

										<a href="<?php the_field('facebook'); ?>">
					    					<i class="white fa fa-2x fa-facebook" aria-hidden="true"></i>
					    				</a>

										<?php 

										endif;

										if ( get_field( 'instagram' ) ): ?>

										<a href="<?php the_field('instagram'); ?>">
					    					<i class="white fa fa-2x fa-instagram" aria-hidden="true"></i>
					    				</a>

					    				<?php 

										endif;

										if ( get_field( 'youtube' ) ): ?>

										<a href="<?php the_field('youtube'); ?>">
					    					<i class="white fa fa-2x fa-youtube-play" aria-hidden="true"></i>
					    				</a>

										<?php 

										endif;

										if ( get_field( 'twitter' ) ): ?>

										<a href="<?php the_field('twitter'); ?>">
					    					<i class="white fa fa-2x fa-twitter" aria-hidden="true"></i>
					    				</a>

										<?php 

										endif;

										endwhile;

										endif;

										wp_reset_query(); ?>
						        	</div>
			    				</div>
			    			</div>
				    	</div>
				    	<?php

						$args = array(
							'post_type' 	 => 'footer',
							'posts_per_page' => -1,
						);

						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

						?>
						
						<div class="col-lg-2 offset-lg-2 col-md-3 offset-md-1">
					        <img class="branding" src="<?php the_field('logo'); ?>" alt="">
				    	</div>
				    	<div class="col-12 copyright">
			        		<p class="m-0 text-center"><?php the_field('copyright'); ?></p>
				        	<p class="m-0 text-center">Copyright &copy; <?php echo date("Y");?> <?php echo get_bloginfo('name')?>. All Rights Reserved.</p>
			        	</div>

			        	<?php
						
						endwhile;

						endif;

						wp_reset_query(); ?>
				    </div>
	            </div>
	        </div>
	    </div>
	</footer>
</div>
<div class="pre-load"></div>
<div class="pre-load mobile"></div>

<?php 

wp_footer(); 

// Load Contact Form Modal
get_template_part( 'partials/content', 'contact' );

?>

</body>
</html>
