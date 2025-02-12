<?php 
include('api/cle_api.php');
include('api/api_services.php');
if(isset($_GET['mat_service']) && !empty($_GET['mat_service'])):
    $mat_serv= $_GET['mat_service'];
    $detail_service = Recuper_service_detail($mat_serv);
    $services = recup_services();
    // var_dump($detail_service);
    if(empty($detail_service)):
        header("location: services.php");
    else:
        $titre = $detail_service[0]->nom;
        $description = $detail_service[0]->description;
        $image =  $detail_service[0]->image;
    endif;

else:
    header("location: services.php");
endif;

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from madebydesignesia.com/themes/ucam/service-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:13 GMT -->
<head>
    <title>Ucam — CCTV Services Website Template</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Ucam — CCTV Services Website Template" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >

</head>

<body class="dark-scheme">
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include("includes/header.php"); ?>
        <!-- header close -->
        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="relative jarallax text-light">
                <div class="de-gradient-edge-top"></div>
                <img src="images/background/1.webp" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle s2 text-light wow fadeInUp mb-2">What Do We Fix</div>
                            <div class="clearfix"></div>
                            <h1 class="cam-style">Details Service<span></span><span></span><span></span><span></span></h1>
                        </div>
                    </div>
                </div>
                <div class="crumb-wrapper">
                    <ul class="crumb">
                        <li><a href="index.html">Acceuil</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li class="active">Blog Factory</li>
                    </ul>
                </div>
                <div class="triangle-bottomright-dark z-2"></div>
                <div class="sw-overlay op-8"></div>
            </section>
            <!-- section close -->
             <?php /*
            <section class="pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-6">
                                    <a href="service-single.html" class="d-block py-3 bg-color text-center mh-80 relative">
                                        <h5 class="mb-0 abs abs-centered">Installation</h5>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6 hover">
                                    <a href="service-single.html" class="d-block py-3 bg-dark-2 text-center mh-80 relative hover-bg-color">
                                        <h5 class="mb-0 abs abs-centered">System Design</h5>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6 hover">
                                    <a href="service-single.html" class="d-block py-3 bg-dark-2 text-center mh-80 relative hover-bg-color">
                                        <h5 class="mb-0 abs abs-centered">Maintenance</h5>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6 hover">
                                    <a href="service-single.html" class="d-block py-3 bg-dark-2 text-center mh-80 relative hover-bg-color">
                                        <h5 class="mb-0 abs abs-centered">Monitoring</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-6 hover">
                                    <a href="service-single.html" class="d-block py-3 bg-dark-2 text-center mh-80 relative hover-bg-color">
                                        <h5 class="mb-0 abs abs-centered">Storage &amp; Backup</h5>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6 hover">
                                    <a href="service-single.html" class="d-block py-3 bg-dark-2 text-center mh-80 relative hover-bg-color">
                                        <h5 class="mb-0 abs abs-centered">System Upgrades</h5>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6 hover">
                                    <a href="service-single.html" class="d-block py-3 bg-dark-2 text-center mh-80 relative hover-bg-color">
                                        <h5 class="mb-0 abs abs-centered">System Consultation</h5>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6 hover">
                                    <a href="service-single.html" class="d-block py-3 bg-dark-2 text-center mh-80 relative hover-bg-color">
                                        <h5 class="mb-0 abs abs-centered">System Configuration</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> */?>

            <section>
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative">
                                <img src="<?php echo $img_service . $image;?>" class="w-100" alt="">
                                <div class="triangle-bottomright-dark"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h2><?= $titre ?></h2>

                            <p><?= $description ?></p>

                            <h4>Autres Services</h4>
                            <?php foreach($services as $value):?>
                            <ul class="ul-style-2">
                            <li class="item">
                                <a href="service.detail.php?mat_service=<?=$value->matricule_service ?>"> <?= $value->nom ?></a>
                            </li>
                                 <?php /*
                                <li>Customized Security Solutions</li>
                                <li>High-Quality Cameras</li>
                                <li>Installation & Setup</li>
                                <li>Remote Viewing Access</li>
                                <li>Maintenance & Support</li> */?>
                            </ul>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php /*
            <section class="pt-0">
                <div class="container">
                    <div class="row g-4 slider-extra sm-hide">
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="relative">
                                <img src="images/svg-color/ultra-high-resolution.svg" class="absolute w-70px z-2" alt="">
                                <div class="ps-90">
                                    <h4 class="mb-0">Ultra High Resolution</h4>
                                    <p>Trust us to deliver reliable solutions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="relative">
                                <img src="images/svg-color/night-vision.svg" class="absolute w-70px z-2" alt="">
                                <div class="ps-90">
                                    <h4 class="mb-0">Night Vision</h4>
                                    <p>Trust us to deliver reliable solutions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb-sm-30">
                            <div class="relative">
                                <img src="images/svg-color/motion-detection.svg" class="absolute w-70px z-2" alt="">
                                <div class="ps-90">
                                    <h4 class="mb-0">Motion Detection</h4>
                                    <p>Trust us to deliver reliable solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> */?>

            <section class="bg-dark-2">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Institutions en collaboration</h2>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInRight hover" data-wow-delay="0s">
                            <div class="bg-dark text-light h-100 overflow-hidden">
                                <div class="relative overflow-hidden">
                                    <img src="images/industry/1.webp" class="img-fluid hover-scale-1-1" alt="">
                                    <div class="de-overlay-gradient-color h-50 top-50"></div>
                                </div>
                            
                                <div class="p-30 text-center relative">
                                    <h4 class="mb-0">Hotels</h4>
                                    <div class="triangle-bottomright-dark-2-half"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight hover" data-wow-delay="0s">
                            <div class="bg-dark text-light h-100 overflow-hidden">
                                <div class="relative overflow-hidden">
                                    <img src="images/industry/2.webp" class="img-fluid hover-scale-1-1" alt="">
                                    <div class="de-overlay-gradient-color h-50 top-50"></div>
                                </div>
                            
                                <div class="p-30 text-center relative">
                                    <h4 class="mb-0">Propriete</h4>
                                    <div class="triangle-bottomright-dark-2-half"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight hover" data-wow-delay="0s">
                            <div class="bg-dark text-light h-100 overflow-hidden">
                                <div class="relative overflow-hidden">
                                    <img src="images/industry/3.webp" class="img-fluid hover-scale-1-1" alt="">
                                    <div class="de-overlay-gradient-color h-50 top-50"></div>
                                </div>
                            
                                <div class="p-30 text-center relative">
                                    <h4 class="mb-0">Industries</h4>
                                    <div class="triangle-bottomright-dark-2-half"></div>
                                </div>
                            </div>
                        </div>                        

                        <div class="col-lg-3 col-md-6 wow fadeInRight hover" data-wow-delay="0s">
                            <div class="bg-dark text-light h-100 overflow-hidden">
                                <div class="relative overflow-hidden">
                                    <img src="images/industry/4.webp" class="img-fluid hover-scale-1-1" alt="">
                                    <div class="de-overlay-gradient-color h-50 top-50"></div>
                                </div>
                            
                                <div class="p-30 text-center relative">
                                    <h4 class="mb-0">Etablissement scolaire</h4>
                                    <div class="triangle-bottomright-dark-2-half"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="text-light">
                <div class="container">
                    <div class="row g-4 mb-4">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Nos clients satisfaits</h2>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/1.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Michael S.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/2.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Robert L.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/3.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Jake M.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/4.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Alex P.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/5.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Carlos R.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/6.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Edward B.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/7.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Daniel H.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/testimonial/8.webp">
                                    </div>
                                    <div class="mt-3 fw-600">Bryan G.<span>Customer</span></div>
                                    <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>"The system is easy to use, the image quality is crystal clear, and their customer service has been exceptional. Highly recommend!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->
        <!-- footer begin -->
        <?php include("includes/footer.php"); ?>
        <!-- footer close -->
    </div>

    <!-- overlay content begin -->
    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="images/logo.webp" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5 class="mb-3">Our Services</h5>
            
            <ul class="ul-style-2">
                <li><a href="services.html">System Consultation</a></li>
                <li><a href="services.html">Installation Services</a></li>
                <li><a href="services.html">System Configuration</a></li>
                <li><a href="services.html">Monitoring Services</a></li>
                <li><a href="services.html">Maintenance</a></li>
                <li><a href="services.html">Storage and Backup</a></li>
            </ul>


            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            <div><i class="icofont-clock-time me-2"></i>Monday - Saturday 08.00 - 18.00</div>
            <div><i class="icofont-location-pin me-2"></i>100 S Main St, New York, </div>
            <div><i class="icofont-envelope me-2"></i>contact@ucam-cctv.com</div>    

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>Keep your home or business safe with CCTV systems designed to provide 24/7 surveillance and peace of mind. Our expert team offers tailored security solutions, from installation to remote monitoring, ensuring your property is always protected.</p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <!-- overlay content end -->


    <!-- Javascript Files
    ================================================== -->
    <script src="js/vendors.js"></script>
    <script src="js/designesia.js"></script>
   
</body>


<!-- Mirrored from madebydesignesia.com/themes/ucam/service-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:14 GMT -->
</html>