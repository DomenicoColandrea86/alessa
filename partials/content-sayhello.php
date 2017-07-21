<?php
/**
 * Template for displaying `Say Hello` 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package G7-Marketing
 */

?>

<!-- Say Hello -->
<section id="sayHello" class="container-fluid say-hello">
	<div data-0="transform:translateY(75vh);" data-5000="transform:translateY(-10vh);">
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<div class="row vertical-align">
				<div class="col-lg-12">
		    		<h2 class="mx-auto text-center mustard">Say Hello</h2>
		    	</div>
		    		<?php

					$args = array(
						'post_type' 	 => 'say-hello',
						'posts_per_page' => -1,
					);

					$the_query = new WP_Query( $args );

					if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

					?>
					
					<div class="col-lg-6 mb-4">
						<div>
							<p class="mx-auto d-table mb-2 dark-navy text-center text-uppercase section-highlight">Business Inquiries</p>
				    		<p class="mx-auto d-table text-center charcoal section-text"><?php the_field('business_inquiries'); ?></p>
				    		<br>
				    		<p class="mx-auto d-table mb-2 dark-navy text-center text-uppercase section-highlight">College Internships</p>
			    			<p class="mx-auto d-table text-center charcoal section-text"><?php the_field('college_internships'); ?></p>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="align-self-end">
							<p class="mx-auto d-table mb-2 dark-navy text-center text-uppercase section-highlight">Stop by</p>
				    		<p class="mx-auto d-table text-center charcoal section-text"><?php the_field('address'); ?></p>
				    		<p class="mx-auto d-table text-center charcoal section-text"><?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zipcode'); ?></p>
				    		<p class="mx-auto d-table text-center charcoal section-text"><?php the_field('phone'); ?></p>
				    		<div class="d-flex justify-content-between col-lg-8 offset-lg-2 col-md-6 offset-md-3 col-sm-8 offset-sm-2 mt-2">

				    		<?php 

							endwhile;

							endif;

							wp_reset_query(); ?>

							<?php

							$args = array(
								'post_type' 	 => 'social-media',
								'posts_per_page' => -1,
							);

							$the_query = new WP_Query( $args );

							if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
							
							if ( get_field( 'facebook' ) ): ?>

							<a href="<?php the_field('facebook'); ?>">
		    					<i class="mustard fa fa-2x fa-facebook" aria-hidden="true"></i>
		    				</a>

							<?php 

							endif;

							if ( get_field( 'instagram' ) ): ?>

							<a href="<?php the_field('instagram'); ?>">
		    					<i class="mustard fa fa-2x fa-instagram" aria-hidden="true"></i>
		    				</a>

		    				<?php 

							endif;

							if ( get_field( 'youtube' ) ): ?>

							<a href="<?php the_field('youtube'); ?>">
		    					<i class="mustard fa fa-2x fa-youtube-play" aria-hidden="true"></i>
		    				</a>

							<?php 

							endif;

							if ( get_field( 'twitter' ) ): ?>

							<a href="<?php the_field('twitter'); ?>">
		    					<i class="mustard fa fa-2x fa-twitter" aria-hidden="true"></i>
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
			</div>
		</div>
	</div>
</section>