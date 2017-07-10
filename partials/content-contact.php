<?php
/**
 * Template part for displaying Contact Form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package G7-Marketing
 */

?>

<div class="modal fade modal-fullscreen contact-us-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                	<section class="container-fluid">
					    <div class="row">
					        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
					        	<h2 class="mustard">Sign up to our Newsletter</h2>
					        	<p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin. Phasellus nec consectetur justo.</p>
					        	<form name="contactUs" id="contactForm" novalidate>
					        		<div class="form-group row">
								      <label for="name" class="col-sm-2 col-form-label">Name</label>
								      <div class="col-sm-10">
								        <input type="text" class="form-control" id="name" placeholder="Firstname">
								      </div>
								    </div>
				                    <div class="form-group row">
								      <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
								      <div class="col-sm-10">
								        <input type="text" class="form-control" id="lastname" placeholder="Lastname">
								      </div>
								    </div>
				                    <div class="form-group row">
								      <label for="company" class="col-sm-2 col-form-label">Company</label>
								      <div class="col-sm-10">
								        <input type="text" class="form-control" id="company" placeholder="Your Company">
								      </div>
								    </div>
				                    <div class="form-group row">
				                    	<div class="optional">Optional</div>
								      <label for="role" class="col-sm-2 col-form-label">Role</label>
								      <div class="col-sm-10">
								        <input type="text" class="form-control" id="role" placeholder="Title">
								      </div>
								    </div>
								    <div class="form-group row">
								      <label for="role" class="col-sm-2 col-form-label">Email</label>
								      <div class="col-sm-10">
								        <input type="email" class="form-control" id="email" placeholder="JohnDoe@gmail.com">
								      </div>
								    </div>
				                    <button type="submit" class="submit mt-5">Submit Details</button>
				                    <a href="#" class="mt-3 mx-auto d-block icon-arrow"></a>
				                </form>
					        </div>
					    </div>
					</section>
                </div>
            </div>
        </div>
    </div>
</div>