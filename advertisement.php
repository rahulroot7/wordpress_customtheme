    <?php /* Template Name: Advertisement */ ?>
    <?php get_header(); ?>
    <div class="content">
     <!--INTRO SECTION START-->
    	<div class="wrapper about-us">
    	    <div class="advertisement-us-banner">
    	    <div class="container-fluid">
    	        <div class="row overlay-bg">
    	              <div class="col-md-12">
    	            <div class="product-info py-5 text-center">
                         <div class="breadcrumb-x">
    						<h4 class="mb-0 text-uppercase  heading-tag text-center"> Advertisement</h4>
                         </div>
                    </div>
                    </div>
    	            
    	        </div>
    	           	    </div> 
    	    </div>
        	<div class="container my-5">
        	   <div class="row">
        	       <div class="col-md-2">
        	           </div>
        	    
        	      <div class="col-md-8">
        	         <div class="product-info advertisement-form-fill px-5 py-4 ">
                            <?php 
                            echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]');?>                            
                        </div> 
        	      </div>
        	      <div class="col-md-2">
        	           </div>
                 </div>
                </div>
            </div>
        </div>

    <?php get_footer(); ?>
   