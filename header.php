<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <meta charset="utf-8">
        <meta name="description" content="Ontario’s Leading South asian business directory which is having large number of businesses that are located in GTA.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/previous/css/style.css" rel="stylesheet" media="screen" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" media="screen" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/previous/css/color.css" rel="stylesheet" media="screen" />

         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
       
            <!-- Font awseom -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .top-heading{
            font-size: 16px;
            font-weight: 700;
        }
        .blink_me {
          animation: blinker 1s linear infinite;
        }

        @keyframes  blinker {
          50% {
            opacity: 0.3;
          }
        }
        </style>
       
    </head>
    
    <body>
        <!-- .top-header -->
        <section class="top_header dark-bg">
            <div class="container">
               <div class="row">
                    
                <div class="col-lg-6 d-lg-block py-3">
                    <div class="top-address">
                        <i class="fa fa-phone text-white" aria-hidden="true"></i>
                        <p class="text-white top-heading mb-0 ml-3">
 6047834003</p>
 
                    </div>
                        
                    
                </div>
                <div class="col-lg-6  d-lg-block py-3">
                          <div class="top-address mail justify-content-lg-end">
                        <i class="fa fa-envelope text-white" aria-hidden="true"></i>
                        <p class="text-white top-heading mb-0 ml-3">
 info@punjabidirectoryvancouver.ca </p>
 
                    </div>
                    
                </div>
               </div>
            </div>
         </section>
        <!-- ./top-header -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark text-center d-block d-lg-none" style="background-color: #000 !important;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url().'/about-us'; ?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url().'/advertisement'; ?>">Advertisement</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url().'/contact'; ?>">Contact</a>
              </li>    
            </ul>
          </div>  

        </nav>
        <!-- .header -->

        <div class="navigation py-2">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4 logo-mob">
                            <a href="<?php echo site_url(); ?>" class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/previous/images/logo.JPEG" alt="Watno Paar" class="logo-img" /></a>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block " >
                        <ul class="p-0 m-0">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url().'/about-us'; ?>">About</a></li>

                            <li><a href="<?php echo site_url().'/advertisement'; ?>">Advertisement</a></li>
                            <li><a href="<?php echo site_url().'/contact'; ?>">Contact</a></li>
                            <li><?php echo do_shortcode('[gtranslate]'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- ./header -->