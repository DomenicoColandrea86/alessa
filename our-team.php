
<?php
/**
 * Template Name: Our team
 * @package G7-Marketing
 */
get_header(); ?>

<!-- Hero -->
<div class="our-team-hero">
	<div class="row">
		<div class="col-12">
			<div class="content">
				<h1><?php the_field('hero_text'); ?></h1>
				<img src="<?php the_field('hero_image'); ?>" />
			</div>
		</div>
	</div>
</div>

<!-- Introduction -->
<section class="container-fluid intro">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
            <h1 class="mt-3 mb-5 text-center dark-navy"><?php the_field('headline'); ?></h1>
            <p class="text-center charcoal"><?php the_field('body'); ?></p>
            <div class="mt-5 mx-auto icon-arrow-down"></div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="container-fluid our-team">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 mb-5">
			<div class="row">
				<div class="col-lg-12">
		    		<h2 class="mx-auto mb-5 text-center mustard">Our Team</h2>
		    	</div>
				
				<?php

				$args = array(
					'post_type' 	 => 'team-member',
					'orderby' 		 => 'ASC',
					'posts_per_page' => -1,
				);

				$the_query = new WP_Query( $args );

				if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

				?>
				
				<div class="col-md-3 col-6">
					<img class="card-img-top" src="<?php the_field('photo'); ?>" alt="">
					<div class="card-block pl-0 pr-0">
						<h4 class="card-title charcoal mb-0"><?php the_field('full_name'); ?></h4>
						<p class="card-text cloudy"><?php the_field('job_title'); ?></p>
					</div>
	            </div>

				<?php endwhile; else: ?>

				<p class="mx-auto text-center charcoal sub-text">Sorry, there are no team members to display</p>

				<?php

				endif;
				wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>

<!-- Media Carousel -->
<section class="container-fluid intro">
    <div class="row">
        <div id="ourTeamCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="item">
						<div class="row">
							<div class="align-self-end">
								<div class="d-flex justify-content-between">
									<a class="card card-inverse" href="#">
										<img class="img-fluid" alt="" src="<?php the_field('slider_1'); ?>">
									</a>
									<a class="card card-inverse" href="#">
										<img class="img-fluid" alt="" src="<?php the_field('slider_2'); ?>">
									</a>
									<a class="card card-inverse" href="#">
										<img class="img-fluid" alt="" src="<?php the_field('slider_3'); ?>">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="item">
						<div class="row">
							<div class="align-self-end">
								<div class="d-flex justify-content-between">
									<a class="card card-inverse" href="#">
										<img class="img-fluid" alt="" src="<?php the_field('slider_4'); ?>">
									</a>
									<a class="card card-inverse" href="#">
										<img class="img-fluid" alt="" src="<?php the_field('slider_5'); ?>">
									</a>
									<a class="card card-inverse" href="#">
										<img class="img-fluid" alt="" src="<?php the_field('slider_6'); ?>">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<a class="carousel-control-prev" href="#ourTeamCarousel" role="button" data-slide="prev">
				<i class="fa fa-3x fa-angle-left mustard" aria-hidden="true"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#ourTeamCarousel" role="button" data-slide="next">
				<i class="fa fa-3x fa-angle-right mustard" aria-hidden="true"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>
    </div>
</section>                       

<!-- Say Hello -->
<section id="sayHello" class="container-fluid say-hello">
	<div class="row">
		<div class="col-lg-10 offset-lg-1">
			<div class="row vertical-align">
				<div class="col-lg-12">
		    		<h2 class="mx-auto mb-5 text-center mustard">Say Hello</h2>
		    	</div>
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

			    		<?php if ( get_field( 'facebook' ) ): ?>

						<a href="<?php the_field('facebook'); ?>">
	    					<i class="mustard fa fa-2x fa-facebook" aria-hidden="true"></i>
	    				</a>

						<?php endif; ?>

						<?php if ( get_field( 'instagram' ) ): ?>

						<a href="<?php the_field('instagram'); ?>">
	    					<i class="mustard fa fa-2x fa-instagram" aria-hidden="true"></i>
	    				</a>

						<?php endif; ?>

						<?php if ( get_field( 'youtube' ) ): ?>

						<a href="<?php the_field('youtube'); ?>">
	    					<i class="mustard fa fa-2x fa-youtube-play" aria-hidden="true"></i>
	    				</a>

						<?php endif; ?>

						<?php if ( get_field( 'twitter' ) ): ?>

						<a href="<?php the_field('twitter'); ?>">
	    					<i class="mustard fa fa-2x fa-twitter" aria-hidden="true"></i>
	    				</a>

						<?php endif; ?>
			        	</div>
					</div>
		    	</div>
			</div>
		</div>
	</div>
</section>

<!-- Map -->
<section class="container-fluid map stripe pt-3">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div class="content mt-4">
        		<img src="<?php the_field('map'); ?>" />
        	</div>
        </div>
    </div>
</section>

<!-- Stay in Touch -->
<section class="container-fluid stay-in-touch">
    <div class="row">
        <div class="mx-auto text-center pr-5 pl-5 x-auto mt-5 mb-5 d-table section-text">
			<h2 class="mx-auto text-center mustard">Stay in Touch</h2>
			<p class="sea-blue">Sign up to our monthly Newsletter</p>
			<a href="#" data-toggle="modal" data-target=".contact-us-modal" class="mx-auto d-table mb-2 mustard text-center text-uppercase section-highlight">Sign up</a>
		</div>
    </div>
</section>

<?php
get_footer();
?>