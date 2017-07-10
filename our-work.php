
<?php
/**
 * Template Name: Our work
 * @package G7-Marketing
 */

get_header(); ?>

<!-- Introduction -->
<section class="container-fluid intro pb-0">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
        	<h2 class="mx-auto text-center mustard">Mobile Tour Showcases <br> Harley&#8209;Davidson’s Innovation project</h2>
        </div>
    </div>
</section>

<!-- Hero -->
<section class="container-fluid our-work-hero stripe pt-3">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div class="content mt-4"></div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="container-fluid content">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <p class="dark-navy">Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin. Phasellus nec consectetur justo. Etiam congue, risus lacinia tincidunt dapibus, arcu laoreet nisi, non cursus augue dui non.</p>
            <p class="charcoal sub-text mt-4">Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin. Phasellus nec consectetur justo. Etiam congue, risus lacinia tincidunt dapibus, arcu metus laoreet nisi, non cursus augue dui non augue. Sed sit amet sollicitudin odio, quis rhoncus nibh. Proin vitae faucibus lacus. Suspendisse id tortor nec orci ornare tempor eu quis neque. Quisque tincidunt velit ut facilisis consectetur.</p>
        </div>
    </div>
</section>

<!-- break -->
<div class="break alpha mt-5 mb-5"></div>

<!-- Content -->
<section class="container-fluid content">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <p class="dark-navy mt-4">Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin. Phasellus nec consectetur justo. Etiam congue, risus lacinia tincidunt dapibus, arcu laoreet nisi, non cursus augue dui non.</p>
            <p class="charcoal sub-text mt-4">Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin. Phasellus nec consectetur justo. Etiam congue, risus lacinia tincidunt dapibus, arcu metus laoreet nisi, non cursus augue dui non augue. Sed sit amet sollicitudin odio, quis rhoncus nibh. Proin vitae faucibus lacus. Suspendisse id tortor nec orci ornare tempor eu quis neque. Quisque tincidunt velit ut facilisis consectetur.</p>
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

<!-- break -->
<div class="break beta mt-5 mb-5"></div>

<!-- More Projects -->
<section class="container-fluid more-projects mb-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
        	<div class="row">
        		<div class="col-lg-12">
	    			<h2 class="mt-3 mb-5 text-center mustard">More Projects</h2>
		    	</div>
				<div class="col-lg-6 col-md-6 col-12 portfolio-item">
		            <div class="card card-inverse">
					  <img class="card-img img-fluid" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/recent-1.png'; ?>" alt="">
					  <div class="card-img-overlay d-flex">
					    <h4 class="card-title text-uppercase align-self-end mr-5">We lorem ipsum dolor sit amet</h4>
					  </div>
					</div>
	            </div>
	            <div class="col-lg-6 col-md-6 col-12 portfolio-item">
					<div class="card card-inverse">
					  <img class="card-img img-fluid" src="<?php echo wp_upload_dir()['baseurl'] . '/2017/07/recent-6.png'; ?>" alt="">
					  <div class="card-img-overlay d-flex">
					    <h4 class="card-title text-uppercase align-self-end mr-5">We lorem ipsum dolor sit amet</h4>
					  </div>
					</div>
	            </div>
        	</div>
		</div>
    </div>
</section>

<?php
get_footer();
?>