<?php /* Template Name: home */ ?>
<?php get_header(); ?>

<section>
<!-- .slider -->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php for($i=0;$i<$post_count; $i++): ?>
        <li data-target="#demo" data-slide-to="<?php echo $i; ?>" class="active"></li>
    <?php endfor; ?>
  </ul>
   <?php
      $arg = array(
         'post_type'         => 'slider',
         'posts_per_page'    => 10,
         'order'             => 'ASC'
      );
      $slider = new WP_Query($arg);
      $j = 0;
      $post_count = wp_count_posts('slider')->publish;
    ?>
  <!-- The slideshow -->
  <div class="carousel-inner">
     <?php while($slider->have_posts()) : $slider->the_post(); ?>
    <div class="carousel-item <?php echo $j==0 ? ' active': '';?>">
      <?php if(has_post_thumbnail()): the_post_thumbnail('slider'); endif; ?>
    </div> 
    <?php $j++; endwhile; wp_reset_query(); ?> 
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- ./slider --></section>
<div class="search-section ">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                </div>
                           <div class="col-md-8">
                                <div class="search-row p-5">
                             <div class="header text-center">
                              <h3 class="heading-tag">Search Businesses From Following Categories: All cities</h3><hr>
                             </div>
                               <div class="search_data">
                                <form role="search" method="get" class="search-form" action="<?php echo 
home_url( '/' ); ?>">
<div class="row">

      <div class="col-lg-8">
        <input type="search" class="search-field form-control"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </div>

    <div class="col-lg-4">
      <input type="submit" class="search-submit btn main-btn btn-block"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </div>
 </div>
</form>

                            </div>
                           </div>
                           </div>
                            <div class="col-md-2">
                                </div>
                            </div> 
                            </div>
                       <!------>
                       
                            </div>
                        
        <div class="content">
            <!--INTRO SECTION START-->
            <div class="wrapper about-us py-5" id="Categories">
                
                    <div class="facilities">
                        
                        <!------>
                         <div class="container">
                        <div class="row">
                        <?php
                        $categories = get_categories( 'hide_empty=0' );
                            foreach($categories as $category) { ?>

                    <div class="col-lg-3 mb-4">
                        <div class="thumbs-facilities facilities-box">
                            <div class="thumb">
                                <a href="list/1.html">                                            
                                    <h4>
                        <?php echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>' ?>

                                    </h4>
                                </a>
                            </div>                                   
                        </div>
                    </div>
                    <?php } ?>  
                        </div>
                          </div>
                        
                <!--2nd row-->
                 <div class="contact-info my-5">
                    <div class="container-fluid overlay-bg py-5">
                        
                         <div class="row align-items-center ">
                  
               <div class="col-lg-12">
                   <div class="contact-info-heading ">
                      <h1 class="text-center heading-tag"> GET IN <span>TOUCH WITH US</span> </h1>
                      <p class="mb-0 text-center">We’ll be happy to offer you a free consultation. Thanks for visiting!</p>
                       </div>
                       </div>
                       </div>
                       <div class="row align-items-center mt-5  contact-row">
                  
               <div class="col-lg-6">
                    <div class="contact-info-call  ml-lg-auto">
                        <div class="call-icon text-center">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                       <p class="mb-0 text-center"><span>6047834003</span></p>
                           
                        </ul>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="contact-info-call mr-lg-auto">
                      
                       <div class="call-icon text-center">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                            <p class="mb-0 text-center"><span><a href="mailto:info@punjabidirectoryvancouver.ca"></a>info@punjabidirectoryvancouver.ca</a></span></p>
                        </ul>
                    </div>
                    </div>
                         </div>
                   
               </div>
                         </div>
                         
                <div class="book-advertisement  py-3">
                    <div class="container">
                 <div class="row align-items-center text-center">
                     <div class="col-lg-12">
                         <div class="book py-4">
                         <h3 class="heading-tag pb-3 ">Book An Advertisement</h3>
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/previous/images/pic.jpeg" alt="Watno Paar" class="img-fluid pb-3 " />
                   
              
                   <div class="">
                    
                    <a href="bookAdvertisement.html" class="btn main-btn btn-lg mt-2">Book Now</a>
               </div>
                </div>
               
                         </div>
                         </div>
                         </div>
                         
                         
                         
                           
                         </div>
                    </div>
                </div>
                
                
                
                
                
            </div>
            <!--INTRO SECTION END-->
          
        </div>
<?php get_footer(); ?>