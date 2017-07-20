
<?php
/**
 * Template Name: Home
 * @package G7-Marketing
 */

get_header(); ?>

<!-- Hero -->

<div class="container-fluid home-slider">
	<div class="row">
		<?php

		if( have_rows('slider') ):

		echo '<div id="homeSlider" class="col-12 p-0 content">';
		
		while ( have_rows('slider') ) : the_row();
		 
		$image = get_sub_field('image');
		$text = get_sub_field('text');
		$title = get_sub_field('title');
		$link = get_sub_field('case_study_link');

		?>

		<div>
			<img src="<?php echo $image['url']; ?>"/>
			<div>
				<h1><?php echo $text ?></h1>
				<a href="<?php echo $link ?>" class="case-study text-right">
					<?php echo $title ?>
					<br>
					<div class="pull-right mt-3 mr-2 icon-arrow-white"></div>
				</a>
			</div>
		</div>

		<?php 
		
		endwhile;
		
		echo '</div><div class="loader"></div>';

		endif;
		
		?>
	</div>
</div>

<!-- Introduction -->
<section class="container-fluid intro">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
        	<div data-0="transform:translateY(10vh);" data-5000="transform:translateY(-130vh);">
        		<h2 class="mt-3 mb-5 text-center dark-navy"><?php the_field('headline'); ?></h2>
	            <p class="text-center charcoal"><?php the_field('body'); ?></p>
	            <div class="mt-5 mx-auto icon-arrow-down"></div>
        	</div>
        </div>
    </div>
</section>

<!-- What we do -->
<section class="container-fluid what-we-do stripe">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div data-0="transform:translateY(20vh);" data-5000="transform:translateY(-100vh);">
        		<div class="row">
		    		<div class="col-lg-12">
			    		<h2 class="mb-5 text-center mustard">What we do</h2>
			    	</div>

			    	<?php

					$args = array(
						'post_type' 	 => 'what-we-do',
						'order' 		 => 'ASC',
						'posts_per_page' => -1,
					);

					$the_query = new WP_Query( $args );

					if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

					?>
					<div class="col-lg-6 mb-4">
						<div class="col-lg-8 offset-lg-2">
							<h4 class="mb-4 dark-navy"><?php the_field('title'); ?></h4>
	    					<p class="dark-navy"><?php the_field('description'); ?></p>
						</div>
					</div>
					<?php 

					endwhile;

					endif;

					wp_reset_query(); ?>
				</div>
	    		<div class="mx-auto mt-5 mb-1 d-table section-text">
	    			<p class="sea-blue">Full list of capabilities</p>
	        		<a href="<?php the_field('download_pdf'); ?>" class="mx-auto d-table mb-2 mustard text-center text-uppercase section-highlight" download>Download PDF</a>
	        	</div>	
        	</div>
        </div>
    </div>
</section>

<!-- Recent Projects -->
<section id="recentProjects" class="container-fluid recent-projects">
    <div class="row">
		<?php

		$args = array(
			'post_type' 	=> 'case-study',
			'post__not_in'=> array(get_the_ID()),
			'order' => 'DESC',
			'posts_per_page' => 6,
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

		<p class="mx-auto text-center charcoal sub-text">Sorry, there are no case studies to display</p>

		<?php

		endif;
		wp_reset_query(); ?>
	</div>
</section>

<!-- Selected Clients -->
<section class="container-fluid selected-clients stripe">
	<div data-0="transform:translateY(85vh);" data-5000="transform:translateY(-45vh);">
    	    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div class="row vertical-align">
        		<div class="col-lg-12">
		    		<h2 class="mx-auto mb-5 text-center mustard">Selected Clients</h2>
		    	</div>
		    	<?php

				$args = array(
					'post_type' 	 => 'clients',
					'orderby' 		 => 'ASC',
					'posts_per_page' => -1,
				);

				$the_query = new WP_Query( $args );

				if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

				?>
				
				<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php the_field('logo'); ?>" alt="">
		    		</div>
		    	</div>
				
				<?php endwhile; else: ?>

				<p class="mx-auto text-center charcoal sub-text">Sorry, there are no team members to display</p>

				<?php

				endif;
				wp_reset_query(); ?>
		    </div>
		    
        	<!-- Testimonials Carousel -->
			<div id="testimonialsCarousel" class="testimonials carousel slide carousel-fade" data-ride="carousel" data-wrap="true">
				<div class="col-8 offset-2">
					<div class="carousel-inner" role="listbox">
						<?php

						$c = 0;
	        			$class = '';

						$args = array(
							'post_type' 	 => 'testimonials',
							'orderby' 		 => 'ASC',
							'posts_per_page' => -1,
						);

						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
						$c++;

						if ( $c == 1 ) $class .= ' active';
	            		else $class = '';
						
						?>
						
						<div class="carousel-item <?php echo $class; ?>">
							<div class="item d-table mx-auto">
								<div class="mx-auto mt-5 mb-1 d-table section-text">
					    			<blockquote class="text-center dark-navy">&ldquo;<?php the_field('testimonial'); ?>&rdquo;</blockquote>
					        		<p class="text-center sea-blue"><?php the_field('full_name'); ?>, <?php the_field('company'); ?></p>
					        	</div>
							</div>
						</div>
						
						<?php 
						endwhile;
						endif;
						wp_reset_query(); ?>

					</div>	
				</div>
				<a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
					<i class="btl bt-2x bt-angle-left mustard" aria-hidden="true"></i>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
					<i class="btl bt-2x bt-angle-right mustard" aria-hidden="true"></i>
					<span class="sr-only">Next</span>
				</a>
			</div>
        </div>
    </div>	
	</div>
</section>

<!-- break -->
<img class="showcase mb-5 mt-4" src="<?php the_field('showcase'); ?>" alt="">

<!-- Say Hello -->
<?php get_template_part( 'partials/content', 'sayhello' ); ?>


<!-- Instagram Feed -->
<section class="container-fluid follow-us stripe">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div id="instafeed" class="insta-feed"></div>
        </div>
    </div>
</section>

<!-- Stay in Touch -->
<section class="container-fluid stay-in-touch">
	<div data-0="transform:translateY(110vh);" data-5000="transform:translateY(-5vh);">
	<div class="row">
        <div class="mx-auto text-center pr-5 pl-5 x-auto mt-5 mb-5 d-table section-text">
			<h2 class="mx-auto text-center mustard">Stay in Touch</h2>
			<p class="sea-blue">Sign up to our monthly Newsletter</p>
			<a href="#" data-toggle="modal" data-target=".contact-us-modal" class="mx-auto d-table mb-2 mustard text-center text-uppercase section-highlight">Sign up</a>
		</div>
    </div>
	</div>
</section>

<?php
get_footer();
?>