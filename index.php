
<?php
/**
 * Template Name: Home
 * @package G7-Marketing
 */

get_header(); ?>

<!-- Hero -->
<div class="hero">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1>We lorem ipsum dolor sit amet</h1>
		</div>
	</div>
	<a href="#" class="case-study text-uppercase">View case study</a>
</div>

<!-- Introduction -->
<section class="container-fluid intro">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
            <h1 class="mt-3 mb-5 text-center dark-navy">We believe in the  power of the fan</h1>
            <p class="text-center charcoal">We lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet felis tempus, pharetra arcu sed sit amet felis lorem tempus</p>
            <div class="mt-5 mx-auto icon-arrow-down"></div>
        </div>
    </div>
</section>

<!-- What we do -->
<section class="container-fluid what-we-do stripe">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div class="row">
	    		<div class="col-lg-12">
		    		<h2 class="mb-5 text-center mustard">What we do</h2>
		    	</div>
		    	<div class="col-lg-6 mb-4">
					<div class="col-lg-8 offset-lg-2">
						<h4 class="mb-4 dark-navy">Entertainment <br>Strategy</h4>
    					<p class="dark-navy">Sponsorship &amp; Endorsement, Product Placement &amp; Integration, Branded Content, Music Licensing &amp; Supervision and More</p>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="col-lg-8 offset-lg-2">
						<h4 class="mb-4 dark-navy">Talent <br>Booking</h4>
    					<p class="dark-navy">Music Talent, Speaker Talent, Comedy &amp; Hosts, Culinary, Performance Art and More</p>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="col-lg-8 offset-lg-2">
						<h4 class="mb-4 dark-navy">Event <br>Production</h4>
    					<p class="dark-navy">Design &amp; Fabrication, Mobile Tours, Show Production, Pop-Up Stores, Sponsorship Activation, Grassroots Promotion</p>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="col-lg-8 offset-lg-2">
						<h4 class="dark-navy">Premium <br>Experiences</h4>
	    				<p class="dark-navy">Private Events, Custom Tours &amp; Excursions, Culinary Experiences and More</p>
					</div>
				</div>
			</div>
    		<div class="mx-auto mt-5 mb-1 d-table section-text">
    			<p class="sea-blue">Full list of capabilities</p>
        		<a href="#" class="mx-auto d-table mb-2 mustard text-center text-uppercase section-highlight">Download PDF</a>
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
			'orderby' => 'date',
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

<!-- Selected Clients -->
<section class="container-fluid selected-clients stripe">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div class="row vertical-align">
        		<div class="col-lg-12">
		    		<h2 class="mx-auto mb-5 text-center mustard">Selected Clients</h2>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/coke-1.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/redbull-logo-E79B4A66FA-seeklogo.com_.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/salesforce-logo.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/redbull-logo-E79B4A66FA-seeklogo.com_.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/salesforce-logo.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/coke-1.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/coke-1.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/redbull-logo-E79B4A66FA-seeklogo.com_.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/salesforce-logo.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/redbull-logo-E79B4A66FA-seeklogo.com_.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/salesforce-logo.png'; ?>" alt="">
		    		</div>
		    	</div>
		    	<div class="col-md-4 col-6">
		    		<div class="client-item mx-auto d-table mb-5">
		    			<img class="mx-auto d-table" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/coke-1.png'; ?>" alt="">
		    		</div>
		    	</div>
		    </div>
		    <div class="mx-auto mt-5 mb-1 d-table section-text">
    			<p class="text-center sea-blue">Lets make great things together!</p>
        		<a href="#" data-toggle="modal" data-target=".contact-us-modal" class="mx-auto d-table mb-2 mustard text-center text-uppercase section-highlight">Contact us</a>
        	</div>
        </div>
    </div>
</section>

<!-- break -->
<div class="break mb-5"></div>

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
			    		<p class="mx-auto d-table text-center charcoal section-text">Brian.Thurman@g7marketing.com</p>
			    		<br>
			    		<p class="mx-auto d-table mb-2 dark-navy text-center text-uppercase section-highlight">College Internships</p>
		    			<p class="mx-auto d-table text-center charcoal section-text">Lauren.White@g7marketing.com</p>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="align-self-end">
						<p class="mx-auto d-table mb-2 dark-navy text-center text-uppercase section-highlight">Stop by</p>
			    		<p class="mx-auto d-table text-center charcoal section-text">801 18th Avenue South</p>
			    		<p class="mx-auto d-table text-center charcoal section-text">Nashville, Tennessee 37203</p>
			    		<p class="mx-auto d-table text-center charcoal section-text">615-988-3422</p>
			    		<div class="d-flex justify-content-between col-lg-8 offset-lg-2 col-md-6 offset-md-3 col-sm-8 offset-sm-2 mt-2">
			        		<a href="http://facebook.com">
		    					<i class="mustard fa fa-2x fa-facebook" aria-hidden="true"></i>
		    				</a>
		    				<a href="http://instagram.com">
		    					<i class="mustard fa fa-2x fa-instagram" aria-hidden="true"></i>
		    				</a>
		    				<a href="http://youtube.com">
		    					<i class="mustard fa fa-2x fa-youtube-play" aria-hidden="true"></i>
		    				</a>
		    				<a href="http://twitter.com">
		    					<i class="mustard fa fa-2x fa-twitter" aria-hidden="true"></i>
		    				</a>
			        	</div>
					</div>
		    	</div>
			</div>
		</div>
	</div>
</section>

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