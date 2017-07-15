<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package G7-Marketing
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" style="padding-top: 6rem; min-height: 400px;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<section class="error-404 not-found">
							<h1 class="text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'g7-marketing' ); ?></h1>
						</section>		
					</div>
				</div>
			</div>
		</main>
	</div>

<?php
get_footer();
