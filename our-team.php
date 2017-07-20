
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
            <h2 class="mt-3 mb-5 text-center dark-navy"><?php the_field('headline'); ?></h2>
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
<div class="container-fluid our-team-carousel">
	<div class="row">
		<?php

		if( have_rows('carousel') ):

		echo '<div id="ourTeamCarousel" class="col-12 p-0 content">';
		
		while ( have_rows('carousel') ) : the_row();
		 
		$image = get_sub_field('image');

		?>

		<div>
			<img src="<?php echo $image['url']; ?>"/>
		</div>

		<?php 
		
		endwhile;
		
		echo '</div>';

		endif;
		
		?>
	</div>
</div>       

<!-- Say Hello -->
<?php get_template_part( 'partials/content', 'sayhello' ); ?>

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