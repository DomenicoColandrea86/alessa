
<?php
/**
 * Single Case Study Template
 * @package G7-Marketing
 */

get_header(); ?>

<!-- Introduction -->
<section class="container-fluid intro pb-0">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
        	<h2 class="mx-auto text-center dark-navy"><?php the_field('headline'); ?></h2>
        </div>
    </div>
</section>

<!-- Hero -->
<section class="container-fluid our-work-hero stripe pt-3">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div class="content mt-4">
        		<img src="<?php the_field('hero_image'); ?>" />
        	</div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="container-fluid stats">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
			<div class="justify-content-between">
				<div class="stat-item">
					<div class="text-center mustard">102,000</div>
					<p class="text-center dark-navy">impressions</p>
				</div>
				<div class="seperator"></div>
				<div class="stat-item">
					<div class="text-center mustard">88,000</div>
					<p class="text-center dark-navy">reach</p>
				</div>
				<div class="seperator"></div>
				<div class="stat-item">
					<div class="text-center mustard">14,000</div>
					<p class="text-center dark-navy">engagement</p>
				</div>
			</div>
		</div>
    </div>
</section>

<!-- Content -->
<section class="container-fluid content">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <p class="dark-navy"><?php the_field('lead'); ?></p>
            <p class="charcoal sub-text mt-4"><?php the_field('body'); ?></p>
        </div>
    </div>
</section>

<!-- Showcase -->
<div class="media-container">
	<?php 

	if (the_field('showcase_media')) : ?>

	    <div class="showcase-media embed-container mt-5 mb-5">
			<?php the_field('showcase_media'); ?>
		</div>

	<?php

	elseif (the_field('showcase')): ?>
	    <img class="showcase mt-5 mb-5" src="<?php the_field('showcase'); ?>" alt="">

	<?php endif; ?>
</div>
<img class="showcase mt-5 mb-5" src="<?php the_field('showcase'); ?>" alt="">
<!-- Content -->
<section class="container-fluid content">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <p class="dark-navy mt-4"><?php the_field('lead_2'); ?></p>
            <p class="charcoal sub-text mt-4"><?php the_field('body_2'); ?></p>
        </div>
    </div>
</section>

<!-- break -->
<img class="showcase mt-5 mb-5" src="<?php the_field('showcase_2'); ?>" alt="">

<!-- Content -->
<section class="container-fluid content">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <p class="dark-navy"><?php the_field('lead_3'); ?></p>
            <p class="charcoal sub-text mt-4"><?php the_field('body_3'); ?></p>
        </div>
    </div>
</section>

<!-- More Projects -->
<section class="container-fluid more-projects pb-0">
    <div class="row">
		<?php

		$args = array(
			'post_type' 	=> 'case-study',
			'post__not_in'=> array(get_the_ID()),
			'orderby' => 'rand',
			'posts_per_page' => 2,
		);

		$the_query = new WP_Query( $args );

		if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

		?>
		
		<div class="col-lg-6 col-md-6 col-12 case-study-item">
            <a href="<?php the_permalink(); ?>" class="card card-inverse">
			  <img class="card-img img-fluid" src="<?php the_field('thumbnail'); ?>" alt="">
			  <div class="card-img-overlay">
			    <h4 class="card-title text-uppercase mt-2 mr-5"><?php the_field('case_highlight'); ?></h4>
			    <div class="mt-5 icon-arrow-white"></div>
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

<?php
get_footer();
?>