<?php
include("api/cle_api.php");

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from madebydesignesia.com/themes/ucam/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:33:56 GMT -->
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
    <!-- custom-css -->
    <link href="css/swiper-custom-1.css" rel="stylesheet" type="text/css" >
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
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="text-light no-top no-bottom position-relative overflow-hidden z-1000">
                <div class="v-center">
                    <div class="swiper">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url(images/slider/1.webp)">
                                <div class="sw-caption">
                                    <div class="container" data-0="opacity:1" data-300="opacity:0">
                                        <div class="row gx-5 align-items-center justify-content-center">

                                            <div class="spacer-double"></div>

                                            <div class="col-lg-12 text-center">     
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="subtitle wow">Five-Star Service</div>
                                                    <div>
                                                        <h1 class="cam-style text-uppercase mb-3 wow"><?php echo $titre_banniere1?><span></span><span></span><span></span><span></span></h1>
                                                    </div>                                                    
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main btn-line fx-slide mb10 mb-3 wow" href="contact.html"><span>Get a Free Quote</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="spacer-single"></div>

                                        <div class="row g-4 sm-hide wow slider-extra">
                                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                                <div class="relative">
                                                    <img src="images/svg-color/ultra-high-resolution.svg" class="absolute w-70px z-2" alt="">
                                                    <div class="ps-90">
                                                        <h4 class="mb-0">Resolution de haute qualite</h4>
                                                        <p>Votre sécurité, notre priorité : des solutions de surveillance fiables avec détection de mouvement.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                                <div class="relative">
                                                    <img src="images/svg-color/night-vision.svg" class="absolute w-70px z-2" alt="">
                                                    <div class="ps-90">
                                                        <h4 class="mb-0">Night Vision</h4>
                                                        <p> des installations professionnelles et des équipements de pointe pour une surveillance optimale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                                <div class="relative">
                                                    <img src="images/svg-color/motion-detection.svg" class="absolute w-70px z-2" alt="">
                                                    <div class="ps-90">
                                                        <h4 class="mb-0">Motion Detection</h4>
                                                        <p>nous vous offrons des solutions de surveillance personnalisées et fiables, adaptées à vos besoins</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-overlay op-9"></div>
                            </div>
                        </div>
                        <!-- Slides -->

                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url(images/slider/2.webp)">
                                <div class="sw-caption">
                                    <div class="container" data-0="opacity:1" data-300="opacity:0">
                                        <div class="row gx-5 align-items-center justify-content-center">

                                            <div class="spacer-double"></div>

                                            <div class="col-lg-12 text-center">     
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="subtitle wow">Five-Star Service</div>
                                                    <div>
                                                        <h1 class="cam-style text-uppercase mb-3 wow"><?php echo $titre_banniere2?><span></span><span></span><span></span><span></span></h1>
                                                    </div>                                                  
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main btn-line fx-slide mb10 mb-3 wow" href="contact.php"><span>Get a Free Quote</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="spacer-single"></div>

                                        <div class="row g-4 sm-hide wow slider-extra">
                                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                                <div class="relative">
                                                    <img src="images/svg-color/ultra-high-resolution.svg" class="absolute w-70px z-2" alt="">
                                                    <div class="ps-90">
                                                        <h4 class="mb-0">Ultra High Resolution</h4>
                                                        <p>nous vous proposons des systèmes de caméras de surveillance avec détection de mouvement adaptés à vos besoins spécifiques</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                                <div class="relative">
                                                    <img src="images/svg-color/night-vision.svg" class="absolute w-70px z-2" alt="">
                                                    <div class="ps-90">
                                                        <h4 class="mb-0">Night Vision</h4>
                                                        <p>nos systèmes de caméras de surveillance avec détection de mouvement assurent une protection constante de votre propriété</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                                <div class="relative">
                                                    <img src="images/svg-color/motion-detection.svg" class="absolute w-70px z-2" alt="">
                                                    <div class="ps-90">
                                                        <h4 class="mb-0">Motion Detection</h4>
                                                        <p>nous vous accompagnons dans le choix et l'installation de votre système de surveillance avec détection de mouvement.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-overlay op-7"></div>
                            </div>
                        </div>
                        <!-- Slides -->
                        

                      </div>
                      <!-- If we need pagination -->
                      <div class="swiper-pagination"></div>

                      <!-- If we need navigation buttons -->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4 mb-2 justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle wow fadeInUp">Nos Services</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Sécurité de vidéosurveillance</h2>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0s">
                            <a href="service.detail.php?mat_service=<?php echo $matricule_service ?>" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30" data-0="transform:scale(0); opacity:0" data-600="transform:scale(1); opacity:1">
                                <img src="images/svg-color/cctv.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4><?php echo $titre_s1?></h4>
                                <h4>Installation de caméras</h4>
                                <p>Protégez votre domicile ou votre entreprise 24h/24 et 7j/7 grâce à notre service de télésurveillance...</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                            <a href="service.detail.php?mat_service=<?php echo $matricule_service ?>" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30" data-0="transform:scale(0); opacity:0" data-600="transform:scale(1); opacity:1">
                                <img src="images/svg-color/networking.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4><?php echo $titre_s2?></h4>
                                <h4>Systèmes d'alarme</h4>
                                <p>Dissuadez les cambrioleurs et protégez vos proches avec nos systèmes d'alarme performants...</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                            <a href="service.detail.php?mat_service=<?php echo $matricule_service ?>" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30" data-0="transform:scale(0); opacity:0" data-600="transform:scale(1); opacity:1">
                                <img src="images/svg-color/setting.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4><?php echo $titre_s1?></h4>
                                <h4>Contrôle d'accès</h4>
                                <p>Sécurisez l'accès à vos locaux avec nos solutions de contrôle d'accès. Badges, digicodes, biométrie...</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".6s">
                            <a href="service.detail.php?mat_service=<?php echo $matricule_service ?>" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30" data-0="transform:scale(0); opacity:0" data-600="transform:scale(1); opacity:1">
                                <img src="images/svg-color/monitor.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <?php echo $titre_s1?>
                                <h4>Intervention</h4>
                                <p>Intervention rapide de nos agents de sécurité. Rondes de surveillance, levée de doute, gestion des incidents...</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </section>


            <section class="bg-dark-2 no-top no-bottom overflow-hidden">
                <div class="container-fluid position-relative half-fluid">
                  <div class="container">
                    <div class="row">
                      <!-- Image -->
                      <div class="col-lg-6 position-lg-absolute right-half h-100 overflow-hidden">
                        <div class="image" data-bgimage="url(images/misc/4.webp) center" data-700="transform: scale(1.2);" data-1300="transform: scale(1);"></div>
                        <div class="triangle-bottomright-dark"></div>
                      </div>
                      <!-- Text -->
                      <div class="col-lg-6">
                            <div class="me-lg-3">
                                <div class="spacer-double"></div>
                                <div class="spacer-single sm-hide"></div>
                                <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Pourquoi nous choisir</div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Surveillance inégalée</h2>

                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="py-4 bg-dark rounded-1 text-center wow fadeInUp" data-wow-delay=".0s">
                                            <h1 class="fs-72 mb-2">15</h1>
                                            <div class="fs-18">Années d’expérience</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6">
                                        <ul class="ul-style-2 fw-600 text-white mb-4 wow fadeInUp" data-wow-delay=".6s">
                                          <li>Une expertise digne de confiance</li>
                                          <li>Une technologie de pointe</li>
                                          <li>Des solutions personnalisées pour tous les budgets</li>
                                          <li>Assistance et maintenance 24h/24 et 7j/7</li>
                                          <li>Solutions de sécurité complètes</li>
                                          <li>Expérience éprouvée</li>
                                        </ul>
                                    </div>
                                </div>

                                <a class="btn-main fx-slide mb10 mb-3 wow fadeIn" href="contact.html"><span>Obtenez un devis gratuit</span></a>
                                <div class="spacer-single sm-hide"></div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4 mb-2 justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle wow fadeInUp">Our Accreditations</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Officially Certified</h2>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay=".0s" >
                            <div class="px-3">
                                <img src="images/badges/1.webp" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay=".2s" >
                            <div class="px-3">
                                <img src="images/badges/2.webp" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay=".4s" >
                            <div class="px-3">
                                <img src="images/badges/3.webp" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay=".6s" >
                            <div class="px-3">
                                <img src="images/badges/4.webp" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay=".8s" >
                            <div class="px-3">
                                <img src="images/badges/5.webp" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay="1s" >
                            <div class="px-3">
                                <img src="images/badges/6.webp" class="w-100" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="bg-dark-2">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Most Complete</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Brand Choice</h2>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".0s">
                            <div class="relative hover overflow-hidden">
                                <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
                                    <h4>Swann</h4>
                                    <p>Non ullamco magna qui non dolore sit ut proident quis ad ex nisi in esse sed occaecat dolore consectetur tempor nostrud sit laboris in nostrud sed cillum mollit irure excepteur nulla magna cupidatat magna officia eiusmod dolore.</p>

                                    <a class="btn-main fx-slide" href="brand-details.html"><span>View Details</span></a>
                                </div>
                               <div class="text-center py-3">
                                   <img src="images/products/1.webp" class="w-80" alt="">
                                   <h4>Swann</h4>
                               </div>
                            </div>
                        </div> 

                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                            <div class="relative hover overflow-hidden">
                                <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
                                    <h4>Honeywell</h4>
                                    <p>Non ullamco magna qui non dolore sit ut proident quis ad ex nisi in esse sed occaecat dolore consectetur tempor nostrud sit laboris in nostrud sed cillum mollit irure excepteur nulla magna cupidatat magna officia eiusmod dolore.</p>

                                    <a class="btn-main fx-slide" href="brand-details.html"><span>View Details</span></a>
                                </div>
                               <div class="text-center py-3">
                                   <img src="images/products/2.webp" class="w-80" alt="">
                                   <h4>Honeywell</h4>
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                            <div class="relative hover overflow-hidden">
                                <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
                                    <h4>Hikvision</h4>
                                    <p>Non ullamco magna qui non dolore sit ut proident quis ad ex nisi in esse sed occaecat dolore consectetur tempor nostrud sit laboris in nostrud sed cillum mollit irure excepteur nulla magna cupidatat magna officia eiusmod dolore.</p>

                                    <a class="btn-main fx-slide" href="brand-details.html"><span>View Details</span></a>
                                </div>
                               <div class="text-center py-3">
                                   <img src="images/products/3.webp" class="w-80" alt="">
                                   <h4>Hikvision</h4>
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".6s">
                            <div class="relative hover overflow-hidden">
                                <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
                                    <h4>Bosch</h4>
                                    <p>Non ullamco magna qui non dolore sit ut proident quis ad ex nisi in esse sed occaecat dolore consectetur tempor nostrud sit laboris in nostrud sed cillum mollit irure excepteur nulla magna cupidatat magna officia eiusmod dolore.</p>

                                    <a class="btn-main fx-slide" href="brand-details.html"><span>View Details</span></a>
                                </div>
                               <div class="text-center py-3">
                                   <img src="images/products/4.webp" class="w-80" alt="">
                                   <h4>Bosch</h4>
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".8s">
                            <div class="relative hover overflow-hidden">
                                <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
                                    <h4>Dahua</h4>
                                    <p>Non ullamco magna qui non dolore sit ut proident quis ad ex nisi in esse sed occaecat dolore consectetur tempor nostrud sit laboris in nostrud sed cillum mollit irure excepteur nulla magna cupidatat magna officia eiusmod dolore.</p>

                                    <a class="btn-main fx-slide" href="brand-details.html"><span>View Details</span></a>
                                </div>
                               <div class="text-center py-3">
                                   <img src="images/products/5.webp" class="w-80" alt="">
                                   <h4>Dahua</h4>
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="1s">
                            <div class="relative hover overflow-hidden">
                                <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
                                    <h4>Lorex</h4>
                                    <p>Non ullamco magna qui non dolore sit ut proident quis ad ex nisi in esse sed occaecat dolore consectetur tempor nostrud sit laboris in nostrud sed cillum mollit irure excepteur nulla magna cupidatat magna officia eiusmod dolore.</p>

                                    <a class="btn-main fx-slide" href="brand-details.html"><span>View Details</span></a>
                                </div>
                               <div class="text-center py-3">
                                   <img src="images/products/6.webp" class="w-80" alt="">
                                   <h4>Lorex</h4>
                               </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="spacer-double"></div>
                <div class="spacer-single"></div>
            </section>

            <section class="bg-color no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-min-100">
                            <div class="p-60 rounded-1 sm-padding40 overflow-hidden position-relative jarallax text-light" data-3000="transform: scale(1.2);" data-3500="transform: scale(1);">
                                <img src="images/background/4.webp" class="jarallax-img" alt="">
                                <div class="sw-overlay op-8"></div>
                                <div class="row align-items-center g-4 gx-5 relative z-index-1000">
                                    <div class="col-lg-8">
                                        <div class="subtitle wow fadeInUp mb-3">CCTV Specialist</div>
                                        <h2 class="mb20 wow fadeInUp" data-wow-delay=".2s">Ucam : des solutions de vidéosurveillance de premier ordre pour votre sécurité.</h2>
                                        <a class="btn-main btn-line fx-slide" href="contact.html"><span>Obtenez un devis gratuit</span></a>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <img src="images/man-city.jpg" class="img-fluid rounded-1 wow scaleIn" alt="">
                                        <h5 class="mt-3 mb-0">Monsieur xx</h5>
                                        <p class="small mb-2">Foundateur &amp;  pdg</p>
                                    </div>
                                </div>

                                <div class="triangle-bottomright-color"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-dark-2 text-light">
                <div class="container">
                    <div class="row g-4 mb-4">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Témoignages</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Nos clients satisfaits</h2>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"Grâce à cette entreprise de sécurité, je peux enfin dormir sur mes deux oreilles. Je sais que ma maison est protégée"</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"J'ai apprécié les conseils personnalisés de l'équipe pour choisir le système de sécurité le plus adapté à mes besoins. "</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"L'équipe a installé mon système de sécurité en un temps record et le travail a été fait proprement. Je suis très content du résultat."</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"J'ai eu un problème avec mon système d'alarme et le service client a été très réactif. Ils ont résolu le problème rapidement et efficacement. "</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"J'ai fait appel à leurs services pour une surveillance événementielle et j'ai été très impressionné par le professionnalisme et la réactivité des agents. "</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"Les caméras de surveillance sont très performantes et offrent une qualité d'image exceptionnelle. La détection de mouvement est très précise "</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"J'ai comparé plusieurs entreprises de sécurité et celle-ci offre le meilleur rapport qualité-prix. Les équipements sont de qualité et l'installation est impeccable. "</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="relative text-light text-center">
                                    <div class="text-center">
                                        <img class="d-inline w-80px rounded-1" alt="" src="images/profile.png">
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
                                    <p>"L'équipe a été très professionnelle et a su répondre à toutes mes questions. L'installation de mon système de surveillance s'est déroulée sans problème "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="pt60 pb60">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                            <a href="contact.html" class="d-block relative bg-dark-2 text-light p-4 rounded-1">
                                <i class="id-color p-3 rounded-1 fs-56 icofont-phone-circle"></i>
                                <div class="absolute abs-middle ms-90px">
                                    <span>Service d’urgence</span>
                                    <h4>Appeler le  (237) 685 54 85 24</h4>
                                </div>
                            </a>
                        </div>                        
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                            <a href="contact.php" class="d-block relative bg-dark-2 text-white p-4 rounded-1">
                                <i class="id-color p-3 rounded-1 fs-56 icofont-calculator"></i>
                                <div class="absolute abs-middle ms-90px">
                                    <span>Demande de</span>
                                    <h4>Obtenir un devis gratuit</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".6s">
                            <a href="blog.php" class="d-block relative bg-dark-2 text-white p-4 rounded-1">
                                <i class="id-color p-3 rounded-1 fs-56 icofont-image"></i>
                                <div class="absolute abs-middle ms-90px">
                                    <span>Decouvrir</span>
                                    <h4>Nos projets recent</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-dark-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">                            
                            <div class="subtitle wow fadeInUp mb-3">Avez-vous</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Des questions</h2>
                        </div>
                    </div>

                    <div class="row g-4 align-items-center">

                        <div class="col-lg-12">
                            <div class="accordion s2 wow fadeInUp">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-a1">
                                    Quel est le processus d’installation de la vidéosurveillance ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a1">
                                    Le processus d’installation comprend généralement :
                                        <ol>
                                            <li>Évaluation du site pour déterminer l’emplacement de la caméra.</li>
                                            <li>Effectuer le câblage nécessaire pour l’alimentation et les données (pour les systèmes câblés).</li>
                                            <li>Monter les caméras et les positionner correctement.</li>
                                            <li>Configuration des appareils d’enregistrement (DVR/NVR) et configuration des logiciels de surveillance et de stockage.</li>
                                        </ol>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a2">
                                    De combien d’appareils photo ai-je besoin ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a2">
                                    Le nombre de caméras dépend de la taille de la zone à couvrir et du niveau de sécurité requis. Pour une petite maison, 2 à 4 caméras peuvent suffire, tandis que les grandes propriétés commerciales peuvent en nécessiter des dizaines.                                    </div>                                        
                                    <div class="accordion-section-title" data-tab="#accordion-a3">
                                    Puis-je utiliser des caméras de vidéosurveillance la nuit ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a3">
                                    Oui, de nombreuses caméras de vidéosurveillance sont équipées de LED infrarouges (IR) pour la vision nocturne, ce qui leur permet de capturer des images même dans l’obscurité totale.                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a4">
                                    Qu’est-ce que la détection de mouvement dans les caméras de vidéosurveillance ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a4">
                                    La détection de mouvement déclenche le démarrage de l’enregistrement de la caméra ou l’envoi d’une alerte lorsqu’un mouvement est détecté. Cette fonctionnalité permet d’économiser de l’espace de stockage et facilite l’examen des événements importants.                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a5">
                                    Y a-t-il un entretien requis pour les systèmes de vidéosurveillance ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a5">
                                    Oui, l’entretien périodique comprend le nettoyage des objectifs de l’appareil photo, la sécurisation des connexions, la vérification des mises à jour du micrologiciel et le bon fonctionnement des appareils d’enregistrement. Un entretien régulier permet de garantir des performances fiables.                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a6">
                                    Les caméras de vidéosurveillance sont-elles résistantes aux intempéries ?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a6">
                                    De nombreuses caméras de vidéosurveillance sont conçues pour résister aux intempéries et peuvent être installées à l’extérieur. Recherchez des caméras avec un indice de protection IP66 ou IP67, ce qui signifie qu’elles sont résistantes à la poussière et à l’eau.                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="relative no-top no-bottom" aria-label="section">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="row g-0">
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/1.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/2.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/3.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/4.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0">
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/5.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/6.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/7.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" class="d-block hover relative overflow-hidden text-light">
                                        <img src="images/gallery-square/8.webp" class="w-100 hover-scale-1-1" alt="">
                                        <div class="abs abs-centered fs-24 text-white hover-op-0">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                    </a>
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


    <!-- Javascript Files
    ================================================== -->
    <script src="js/vendors.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/custom-marquee.js"></script>
    <script src="js/custom-swiper-1.js"></script>

</body>


<!-- Mirrored from madebydesignesia.com/themes/ucam/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:34:41 GMT -->
</html>