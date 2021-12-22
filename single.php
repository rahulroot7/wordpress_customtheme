<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */


$the_slug = 'aaa-rk-acctx-inc';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'post',
  'post_status' => 'publish',
  'numberposts' => 1
);
$my_posts = get_posts($args); ?>

<div class="content">
            <!--INTRO SECTION START-->
            <div class="wrapper about-us">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-12 mb-5">
                			<div class="card">
                				<div class="card-body card-history">
                                    <span class="text-capitalize text-light">
			                	        <a href="/" class="text-light"> Home</a> &gt; <a href="#" onclick="window.history.back()" class="text-capitalize text-light"></a> &gt; <?= the_title() ?>.
                                    </span>
                                    <span class="pull-right"><button onclick="window.history.back()" class="history-btn "> Go back</button></span>
                				</div>
                			</div>
                		</div>
                	</div>
                	</div>
                	<div class="container">
                	<div class="row">
                	    	<div class="col-lg-2 mb-5">
                	    	    </div>
                		<div class="col-lg-8 ">
                	<div class="single-postt mb-5 d-flex justify-content-center">
                      
                          
						        <img class="card-img-top img-fluid w-50" src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
						        	</div>
                		</div>
                			<div class="col-lg-2 mb-5">
                	    	    </div>
                			</div>
                		</div>
                           <div class="container">
                	<div class="row">
                            <div class="col-lg-12 p-3">
							   <h3 class="card-title single-post-title text-white text-center p-2"><?php the_title() ?></h3>
                               <div class="row">
                                   <div class="col-lg-6 mb-3">
                                    <div class="card p-3 single-post-row">
                                        <span class="display-flex align-items-center single-post-det"><i class="fa fa-phone mr-2"></i><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></span>
                                    </div>
                                    </div>
                                    
                                    <div class="col-lg-6 mb-3">
                                        <div class="card p-3 single-post-row">
                                            <span class="display-flex align-items-center single-post-det"><i class="fa fa-globe"></i> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></span>       
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 mb-3">
                                        <div class="card p-3 single-post-row">
                                            <span class="display-flex align-items-center single-post-det"><i class="fa fa-map-marker"></i> <?php the_field('website_url'); ?></span>       
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="card p-3 single-post-row">
                                            <span class="display-flex align-items-center single-post-det"><i class="fa fa-map-marker"></i> <?php the_field('location'); ?></span>                             
                                        </div>
                                    </div>
                                 </div> 
                               <p class="p-3"><?php the_content() ?></p>
                            </div>
                        </div>
                	</div>
                    

                </div>
            </div>
            <!--INTRO SECTION END-->
          
     


<?php get_footer(); ?>