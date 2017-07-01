<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package G7-Marketing
 */

get_header(); ?>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html"></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Our Team</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead"></header>

<!-- Introduction -->
<section class="container-fluid intro">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <h2 class="text-center text-capitalize">Introduction</h2>
            <h3>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin. Phasellus nec consectetur justo. Etiam congue, risus lacinia tincidunt dapibus, arcu metus laoreet nisi, non cursus augue dui non.</h3>
            <p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin. Phasellus nec consectetur justo. Etiam congue, risus lacinia tincidunt dapibus, arcu metus laoreet nisi, non cursus augue dui non augue. Sed sit amet sollicitudin odio, quis rhoncus nibh. Proin vitae faucibus lacus.</p>
        </div>
    </div>
</section>

<!-- What we do -->
<section class="container-fluid what-we-do">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
        	<div class="row">
	    		<div class="col-lg-6">
		    		<h2>What we do</h2>
		        	<h3>Morbi maximus lectus velit, at pellentesque nibh eleifend sollici tudin. Phasellus nec conse ctetur.</h3>
		        	<a href="">Download PDF</a>
		    	</div>
		    	<div class="col-lg-6">
		    		<ul>
		    			<li>
		    				<h4>Entertainment Strategy</h4>
		    				<p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
		    			</li>
		    			<li>
		    				<h4>Talent Booking</h4>
		    				<p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
		    			</li>
		    			<li>
		    				<h4>Event Production + Activation</h4>
		    				<p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
		    			</li>
		    			<li>
		    				<h4>Premium Experiences</h4>
		    				<p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
		    			</li>
		    		</ul>
		    	</div>
		    </div>
        </div>
    </div>
</section>

<!-- Recent Projects -->
<section class="container-fluid">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h2 class="text-center text-capitalize">Recent Projects</h2>
            <hr>

            <div class="row">
            	<div class="col-lg-4 thumb">
                    <img class="img-responsive" src="http://via.placeholder.com/300x220/000" alt="">
                    <h4>Branding</h4>
                    <p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
                    <a href="">Link</a>
	            </div>
	            <div class="col-lg-4 thumb">
                    <img class="img-responsive" src="http://via.placeholder.com/300x220/000" alt="">
                    <h4>Branding</h4>
                    <p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
                    <a href="">Link</a>
	            </div>
	            <div class="col-lg-4 thumb">
                    <img class="img-responsive" src="http://via.placeholder.com/300x220/000" alt="">
                    <h4>Branding</h4>
                    <p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
                    <a href="">Link</a>
	            </div>
	            <div class="col-lg-4 thumb">
                    <img class="img-responsive" src="http://via.placeholder.com/300x220/000" alt="">
                    <h4>Branding</h4>
                    <p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
                    <a href="">Link</a>
	            </div>
	            <div class="col-lg-4 thumb">
                    <img class="img-responsive" src="http://via.placeholder.com/300x220/000" alt="">
                    <h4>Branding</h4>
                    <p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
                    <a href="">Link</a>
	            </div>
	            <div class="col-lg-4 thumb">
                    <img class="img-responsive" src="http://via.placeholder.com/300x220/000" alt="">
                    <h4>Branding</h4>
                    <p>Morbi maximus lectus velit, at pellentesque nibh eleifend sollicitudin.</p>
                    <a href="">Link</a>
	            </div>
            </div>
        </div>
    </div>
</section>

<!-- Selected Clients -->
<section class="container-fluid selected-clients">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
        	<div class="row">
	    		<div class="col-lg-6">
		    		<h2>Selected Clients</h2>
		        	<h3>Morbi maximus lectus velit, at pellentesque nibh eleifend sollici tudin. Phasellus nec conse ctetur.</h3>
		    	</div>
		    	<div class="col-lg-6">
		    		<ul>
		    			<li>
		    				<a href="">Coca Cola</a>
		    			</li>
		    			<li>
		    				<a href="">Keds</a>
		    			</li>
		    			<li>
		    				<a href="">Harley Davidson</a>
		    			</li>
		    			<li>
		    				<a href="">Cisco</a>
		    			</li>
		    			<li>
		    				<a href="">At&amp;t</a>
		    			</li>
		    			<li>
		    				<a href="">Toyota</a>
		    			</li>
		    			<li>
		    				<a href="">Sales Force</a>
		    			</li>
		    			<li>
		    				<a href="">Ram</a>
		    			</li>
		    		</ul>
		    	</div>
		    </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; G7 Marketing 2017</p>
            </div>
        </div>
    </div>
</footer>