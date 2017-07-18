
<?php
/**
 * Single Case Study Template
 * @package G7-Marketing
 */

get_header(); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post();
	if( have_rows('case_study_content') ): 
		while ( have_rows('case_study_content') ) : the_row();

		// Headline
		if( get_row_layout() == 'headline' )
			get_template_part('partials/case-study', 'headline');

		// Hero
		if( get_row_layout() == 'hero_image' )
			get_template_part('partials/case-study', 'hero');

		// Stats
		if( get_row_layout() == 'stats' )
			get_template_part('partials/case-study', 'stats');

		// Lead
		if( get_row_layout() == 'lead' )
			get_template_part('partials/case-study', 'lead');

		// Body
		if( get_row_layout() == 'body' )
			get_template_part('partials/case-study', 'body');

		// Showcase Image
		if( get_row_layout() == 'showcase_image' )
			get_template_part('partials/case-study', 'showcase-image');

		// Showcase Media
		if( get_row_layout() == 'showcase_media' )
			get_template_part('partials/case-study', 'showcase-media');

		endwhile;
	endif;

endwhile; endif; ?>

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

<?php
get_footer();
?>