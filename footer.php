<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package G7-Marketing
 */

?>
	</div>
	<!-- #content -->

	<!-- Footer -->
	<footer>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-10 offset-lg-1">
		            <div class="row">
		            	<div class="mobile mb-5">
		            		<div class="col-12">
			            		<p class="section-text mb-4">Sign up to our Newsletter</p>
		        				<a href="#" data-toggle="modal" data-target=".contact-us-modal" class="d-block icon-arrow"></a>		
		            		</div>
    					</div>
		            	<div class="col-md-4">
		            		<h5>Contact us</h5>
				    		<br>
				    		<p>(615) 988-3422</p>
				    		<p>info@g7marketing.com</p>
				    		<br>
				    		<p>801 18th Ave S</p>
				    		<p class="mb-0"> Nashville, TN 37203</p>
		            	</div>
			    		<div class="col-md-4 d-flex">
			    			<div class="row mx-auto">
			    				<div class="col-12 p-0">
			    					<div class="desktop">
			    						<h5 class="mb-4">Newsletter Sign up</h4>
				        				<a href="#" class="d-block icon-arrow"></a>		
			    					</div>
			    					<div class="mobile">
						        		<h5 class="mt-5 mb-4">Follow us</h5>
			    					</div>
			    				</div>
			    				<div class="col-12 p-0 align-self-end">
				    				<div class="d-flex justify-content-between">
						        		<a href="http://facebook.com">
					    					<i class="white fa fa-2x fa-facebook" aria-hidden="true"></i>
					    				</a>
					    				<a href="http://instagram.com">
					    					<i class="white fa fa-2x fa-instagram" aria-hidden="true"></i>
					    				</a>
					    				<a href="http://youtube.com">
					    					<i class="white fa fa-2x fa-youtube-play" aria-hidden="true"></i>
					    				</a>
					    				<a href="http://twitter.com">
					    					<i class="white fa fa-2x fa-twitter" aria-hidden="true"></i>
					    				</a>
						        	</div>
			    				</div>
			    			</div>
				    	</div>
				    	<div class="col-lg-2 offset-lg-2 col-md-3 offset-md-1">
					        <div class="branding"></div>
				    	</div>
				    	<div class="col-12 copyright">
			        		<p class="m-0 text-center">G7 Marketing is part of the Independent Network of Project Worldwide agencies</p>
				        	<p class="m-0 text-center">All Rights resevered &copy; <?php echo date("Y"); ?></p>
			        	</div>
				    </div>
	            </div>
	        </div>
	    </div>
	</footer>
</div>

<?php 

wp_footer(); 

// Load Contact Form Modal
get_template_part( 'partials/content', 'contact' );

?>

</body>
</html>
