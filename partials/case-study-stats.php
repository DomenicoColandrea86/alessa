
<!-- Stats -->
<section class="container-fluid stats">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
			<div class="justify-content-between">
				<?php
				while ( has_sub_field('statistics') ) : the_sub_field('statistics');
				?>

				<div class="stat-item">
					<div class="text-center mustard"><?php the_sub_field('stat'); ?></div>
					<p class="text-center dark-navy"><?php the_sub_field('title'); ?></p>
				</div>
				<div class="seperator"></div>

				<?php
				endwhile;
				?>
			</div>
		</div>
    </div>
</section>