    <?php /* Template Name: About temp*/ ?>
    <?php get_header(); ?>


<?php
  $arg = array(
     'post_type'         => 'about',
     'posts_per_page'    => 50,
     'order'             => 'ASC'
  );
  $about = new WP_Query($arg);
  $j = 0;
  $post_count = wp_count_posts('about')->publish;
?>
    <div class="content">
      <div class="wrapper about-us">
          <div class="about-us-banner mb-5">
           <div class="container-fluid">
             <div class="row overlay-bg">
           <div class="col-md-12">
                 <div class="product-info text-center py-5">
                     <div class="breadcrumb-x main-title ">
                        <h1 class="mb-3 text-uppercase text-center heading-tag">About us</h1>
                    </div>
                    <p class="mb-0">Ontario's leading South Asian business directory, which covers the largest number of businesses that are located in GTA.</p>
                 </div>
              </div>
               </div>
              </div>
              </div>
              <div class="about-us-cities mb-5">
          <div class="container">
             <div class="row">
             
               <div class="col-md-12">
                   <h3 class="mb-3 text-uppercase text-center heading-tag"> These town’s Cities are : Vancouver</h3>
                   
                   <ul class=" m-4 p-2 list-unstyled d-lg-flex align-items-center justify-content-center">
                       <li class=" ml-2 mr-3 p-2 text-center"> Surrey</li>
                       <li  class="mr-2 p-2 text-center"> Vancouver </li>
                       <li  class="mr-2 p-2 text-center"> Burnaby </li>
                       <li  class="mr-2 p-2 text-center"> Abbotsford </li>
                       <li  class="mr-2 p-2 text-center"> Maple Ridge </li>
                       <li  class="mr-2 p-2 text-center"> Delta </li>
                       <li  class="mr-2 p-2 text-center"> Langley </li>
                       <li  class="mr-2 p-2 text-center"> Tsawwassen </li>
                       <li  class="mr-2 p-2 text-center"> Mission </li>
                   </ul>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        </div>
                  <div class="col-lg-8">
                    <a href="http://watnopaarpunjabi.com/watnopaarPunjabiTV.html">
                       <div class="card">
                            <img class="card-img-top2" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/tv.jpg" style="width: 100%;">
                            <div class="card-img-overlay">
                                <h5 class="card-title text-light">Watch our Watno Paar Punjabi TV LIVE! </h5>
                            </div>
                        </div> 
                    </a>
                </div>
                 <div class="col-lg-2">
                        </div>
             </div> 
             </div>
              </div>
             <!--2 nd row-->
             <div class="about-us-cities mb-5">
          <div class="container">
             
              <div class="row mt-5  published-block">
                 <div class="col-md-12">
                     <h3 class="text-dark mb-5 text-center heading-tag">We have already published &amp; Distributed our 19th Volume into the market.</h3>
                 </div>
                  <div class="col-lg-3 mb-5">
                            <div class="card shadow">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/book.jpg" style="width: 100%;">
                                <div class="card-img-overlay">
                                    <h5 class="card-title  p-3 text-light text-center">Our 20th Volume Launch in April 2021 </h5>
                                </div>
                                <div class="card-body">
                                    <a href="<?php echo site_url().'/advertisement'; ?>" class="btn  main-btn btn-block">Book  Now</a>
                                </div>
                            </div>
                            
                        </div>
                        <?php while($about->have_posts()) : $about->the_post(); ?>
                    <div class="col-lg-3 mb-5">
                            <div class="card shadow">
                                
                                <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
                                
                                
                                
                                
                                
                               <div class="card-body">
                                    <h5 class="card-title text-dark text-center"><?php the_title() ?></h5>
                                </div>
                                
                            </div>
                    </div>
                     <?php $j++; endWhile; wp_reset_query(); ?>
                    
              </div>
          </div>
      </div>
    </div>
    </div>
    

  <?php get_footer(); ?>