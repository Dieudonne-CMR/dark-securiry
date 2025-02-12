<?php 
include('api/cle_api.php');
include('api/api_article.php');
$obj_tous_post = recup_article();


?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from madebydesignesia.com/themes/ucam/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:20 GMT -->
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
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="relative jarallax text-light">
                <div class="de-gradient-edge-top"></div>
                <img src="images/background/9.webp" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle s2 text-light wow fadeInUp mb-2">Stay Update</div>
                            <div class="clearfix"></div>
                            <h1 class="cam-style">Suivez nos actualites<span></span><span></span><span></span><span></span></h1>
                        </div>
                    </div>
                </div>
                <div class="crumb-wrapper">
                    <ul class="crumb">
                        <li><a href="index.html">Acceuil</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
                <div class="sw-overlay op-8"></div>
                <div class="triangle-bottomright-dark"></div>
            </section>
            <!-- section close -->

            <section>
                <div class="container">
                    <div class="row g-4">

                        <div class="col-lg-8">
                            <div class="overflow-hidden">
                            <?php foreach ($obj_tous_post as $value): ?>
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <?php /* <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">20</h4>
                                        <span>Jun</span>
                                    </div>*/?>
                                    <img src="<?php echo $url_image . $value -> photo ?>" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog.detail.php?mat_post=<?=$value->matricule?>" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><?= $value->titre ?></h4>
                                    <?php /*<a class="text-white" href="blog-single.html"><?= $value->content ?></a>*/?>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php /*
                        <div class="col-lg-3">
                            <div class="overflow-hidden">
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">19</h4>
                                        <span>Jun</span>
                                    </div>
                                    <img src="images/news/2.webp" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog-single.html" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><a class="text-white" href="blog-single.html">How Security Camera Footage is Solving Major Crimes</a></h4>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="overflow-hidden">
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">18</h4>
                                        <span>Jun</span>
                                    </div>
                                    <img src="images/news/3.webp" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog-single.html" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><a class="text-white" href="blog-single.html">The Growing Role of Security Cameras in Public Safety</a></h4>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="overflow-hidden">
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">17</h4>
                                        <span>Jun</span>
                                    </div>
                                    <img src="images/news/4.webp" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog-single.html" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><a class="text-white" href="blog-single.html">Privacy Concerns Rise with Increased Security Cameras Use</a></h4>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="overflow-hidden">
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">16</h4>
                                        <span>Jun</span>
                                    </div>
                                    <img src="images/news/5.webp" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog-single.html" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><a class="text-white" href="blog-single.html">AI Enhances Security Cameras for Better Crime Prevention</a></h4>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="overflow-hidden">
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">15</h4>
                                        <span>Jun</span>
                                    </div>
                                    <img src="images/news/6.webp" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog-single.html" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><a class="text-white" href="blog-single.html">Security Cameras in Schools: A New Era of Student Safety</a></h4>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="overflow-hidden">
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">14</h4>
                                        <span>Jun</span>
                                    </div>
                                    <img src="images/news/7.webp" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog-single.html" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><a class="text-white" href="blog-single.html">Are Security Cameras Invading Privacy or Ensuring Safety?</a></h4>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="overflow-hidden">
                                <div class="hover relative rounded-1 overflow-hidden">
                                    <div class="abs z-2 bg-color text-white p-3 pb-2 m-4 text-center fw-600">
                                        <h4 class="fs-36 mb-0 lh-1">13</h4>
                                        <span>Jun</span>
                                    </div>
                                    <img src="images/news/8.webp" class="w-100 hover-scale-1-1" alt="">
                                    <a href="blog-single.html" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                <div class="p-40 bg-dark-2 relative">
                                    <h4><a class="text-white" href="blog-single.html">The Impact of Expanding Security Camera Networks in Cities</a></h4>
                                    <div class="triangle-bottomright-dark"></div>
                                </div>
                            </div>
                        </div> */?>
                        
                        <!-- pagination begin -->
                        <div class="col-lg-12 pt-4 text-center">
                            <div class="d-inline-block">
                                <nav aria-label="Page navigation example">
                                  <ul class="pagination">
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                      </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                      </a>
                                    </li>
                                  </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- pagination end -->
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


<!-- Mirrored from madebydesignesia.com/themes/ucam/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:22 GMT -->
</html>