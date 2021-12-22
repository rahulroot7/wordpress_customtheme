<?php
get_header();
global $wp_query;
?>
<div class="content">
            <!--INTRO SECTION START-->
            <div class="wrapper about-us">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-12 mb-5">
                			<div class="card">
                				<div class="card-body">
			                	                					<span class="text-capitalize"><a href="<?php echo site_url(); ?>">HOME</a> &gt; search</span>
            					                                    <span class="pull-right"><button onclick="window.history.back()" class="btn btn-light"> Go back</button></span>
                				
                				</div>
                			</div>
                		</div>
                <?php if ( have_posts() ) { ?>
        		  <?php while ( have_posts() ) { the_post(); ?>
                    	 <div class="col-lg-4">
		                	<div class="card mb-5">
								<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
                                
		                		<div class="card-body">
									<h3 class="card-title"><?php the_title(); ?></h3>
									<a href="<?php the_permalink(); ?>" class="btn btn-dark btn-block">Read More</a>
										                
		                		</div>
		                	</div>
	                	</div>
        	                
        	 <?php } ?>
        	     <?php }else{
        	            echo '<h1>No Result Found</h1>';
        	     } ?>
                
          	</div>
        </div>
    </div>
    <!--INTRO SECTION END-->
  
</div>


<?php get_footer(); ?>