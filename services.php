<?php 
include('api/cle_api.php');
include('api/api_services.php');
$services = recup_services();
// var_dump($services);

function reduireTexte($texte, $limite = 100) {
    $texte = strip_tags($texte);
    $texte = trim($texte);
  
    if (strlen($texte) > $limite) {
      $texteTronque = substr($texte, 0, $limite);
      $dernierEspace = strrpos($texteTronque, ' ');
  
      if ($dernierEspace !== false) {
        $texteTronque = substr($texteTronque, 0, $dernierEspace);
      }
  
      $texteTronque .= '...';
  
      return $texteTronque;
    } else {
      return $texte;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from madebydesignesia.com/themes/ucam/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:07 GMT -->
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
                <img src="images/background/5.webp" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle s2 text-light wow fadeInUp mb-2">What Do We Fix</div>
                            <div class="clearfix"></div>
                            <h1 class="cam-style">Nos services<span></span><span></span><span></span><span></span></h1>
                        </div>
                    </div>
                </div>
                <div class="crumb-wrapper">
                    <ul class="crumb">
                        <li><a href="index.html">Acceuil</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
                <div class="triangle-bottomright-dark z-2"></div>
                <div class="sw-overlay op-8"></div>
            </section>
            <!-- section close -->

            <section>
                <div class="container">
                    <div class="row g-4">
                    <?php foreach ($services as $value): ?>
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0s">
                            <a href="service.detail.php?mat_service=<?=$value->matricule_service ?>" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="<?php echo $img_service . $value -> image ;?>" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4><?= $value->nom ?></h4>
                                <p><?= reduireTexte($value->description) ?></p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>
                        <?php /*
                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                            <a href="service-single.html" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="images/svg-color/networking.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4>System Design</h4>
                                <p>Customized security system planning to meet specific requirements.</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                            <a href="service-single.html" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="images/svg-color/setting.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4>Maintenance</h4>
                                <p>Regular servicing and fixing of camera systems to ensure continuous functionality.</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".6s">
                            <a href="service-single.html" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="images/svg-color/monitor.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4>Monitoring</h4>
                                <p>Real-time monitoring of security cameras by professionals or automated systems.</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".0s">
                            <a href="service-single.html" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="images/svg-color/storage.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4>Storage &amp; Backup</h4>
                                <p>Offering cloud storage plans for secure, offsite storage of CCTV footage.</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                            <a href="service-single.html" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="images/svg-color/upgrade.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4>System Upgrades</h4>
                                <p>Upgrading older analog systems to IP-based or HD analog systems.</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".6s">
                            <a href="service-single.html" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="images/svg-color/chat.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4>System Consultation</h4>
                                <p>Assessing the property to determine optimal camera placement.</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay=".8s">
                            <a href="service-single.html" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30">
                                <img src="images/svg-color/configuration.svg" class="w-70px mb-3 hover-jello infinite" alt="">
                                <h4>System Configuration</h4>
                                <p>Integration with mobile apps for remote monitoring and management.</p>
                                <div class="triangle-bottomright-dark"></div>
                            </a>
                        </div>
                        */?>
                        <?php endforeach; ?>
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


<!-- Mirrored from madebydesignesia.com/themes/ucam/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:08 GMT -->
</html>