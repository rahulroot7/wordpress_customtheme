<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php 
      $term = get_queried_object();
      $slug = $term->slug;
      $atts = shortcode_atts(
        array(
          'posts_per_page'    => 50,
          'category_slug' => $slug,
        ),
        $atts,
        'category_posts'
      );
    
      // Query
      $the_query = new WP_Query( array ( 'posts_per_page' => '25', 'category_name' => $atts['category_slug'] ) );
      
      // Posts

            ?>
<div class="content">
            <!--INTRO SECTION START-->
            <div class="wrapper about-us">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-12 mb-5">
                			<div class="card">
                				<div class="card-body card-history">
			                	                					<span class="text-capitalize text-light"><a href="<?php echo site_url(); ?>" class="text-light">HOME</a> &gt; <?php echo $slug; ?></span>
            					                                    <span class="pull-right"><button onclick="window.history.back()" class="history-btn"> Go back</button></span>
                				
                				</div>
                			</div>
                		</div>
        		<?php
        		  if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                  
        		?>
                		 
                		
	                	 <div class="col-lg-3">
		                	<div class="card mb-5">
								<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
		                		<div class="card-body">
									<h5 class="card-title text-center"><?php the_title(); ?></h5>
									<a href="<?php the_permalink(); ?>" class="btn btn-dark btn-block rm-btn">Read More</a>
										                
		                		</div>
		                	</div>
	                	</div>
        	                
        	 <?php
                endwhile;
        
            endif;
            ?>
	                	                	        		
		                
	              	</div>
                </div>
            </div>
            <!--INTRO SECTION END-->
          
        </div>
  
<?php get_footer(); ?>