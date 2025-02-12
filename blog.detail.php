<?php
include('api/cle_api.php');
include('api/api_article.php');

if (isset($_GET['mat_post']) && !empty($_GET['mat_post'])) :
    $mat_post = $_GET['mat_post'];
    $detail_post = recup_detail_post($mat_post);
    $titre = $detail_post->titre; // Assurez-vous que les propriétés existent dans votre objet/tableau
    $content = $detail_post->content; // ou $post->content, selon votre base de données
    $photo = $detail_post->photo;

else :
    header("Location: blog.php");
    // Important: Arrêter l'exécution du script après la redirection
endif;

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from madebydesignesia.com/themes/ucam/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:23 GMT -->
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
                        <div class="col-lg-8 text-center">
                            <!-- <div class="subtitle s2 text-light wow fadeInUp mb-2">Blog Detail</div> -->
                            <h1>Blog detail</h1>
                        </div>
                    </div>
                </div>
                <div class="crumb-wrapper">
                    <ul class="crumb">
                        <li><a href="blog.php">Acceuil</a></li>
                        <li class="active">Blog detail</li>
                    </ul>
                </div>
                <div class="sw-overlay op-8"></div>
                <div class="triangle-bottomright-dark"></div>
            </section>
            <!-- section close -->

            <section>
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-8">

                            <div class="blog-read">
                                <div class="post-text">
                                    <!-- <p>Quis sunt quis do laboris eiusmod in sint dolore sit pariatur consequat commodo aliqua nulla ad dolor aliquip incididunt voluptate est aliquip adipisicing ea cupidatat nostrud incididunt aliquip dolore. Sed minim nisi duis laborum est labore nisi amet elit adipisicing proident do consectetur dolor labore sit nisi ad proident esse ad velit nisi irure reprehenderit ut et dolor labore veniam quis.</p> -->

                                    <!-- <blockquote class="quote-s1 mb-4">Quis sunt quis do laboris eiusmod in sint dolore sit pariatur consequat commodo aliqua nulla ad dolor aliquip incididunt voluptate est aliquip adipisicing ea cupidatat nostrud incididunt aliquip dolore.</blockquote> -->

                                    <!-- <p>Sunt duis laboris ex et quis laborum laborum cillum mollit voluptate culpa consequat ex cupidatat dolor eiusmod proident proident cillum pariatur sint adipisicing in nostrud do dolore consectetur quis incididunt minim consectetur. Exercitation elit proident dolor est id eiusmod dolor dolor incididunt ad voluptate laboris cupidatat est est sint veniam sint officia sint incididunt est sit ut tempor commodo pariatur ut proident et do.</p>                                    -->
                                    <img src="<?php echo $url_image . $photo ?>" class="w-100 rounded-1" alt="">

                                    <h4><?= $titre ?></</h4>
                                    <p style="font-size: 5px;"><?= $content ?></p>

                                </div>
                            </div>

                            <div class="spacer-single"></div>
                            <?php /*
                            <div id="blog-comment">
                                <h4>Comments (5)</h4>

                                <div class="spacer-half"></div>

                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="images/testimonial/1.webp" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Merrill Rayos</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="images/testimonial/2.webp" alt="" ></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Jackqueline Sprang</span>
                                                    <span class="c_date id-color">2 days ago</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="images/testimonial/3.webp" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Sanford Crowley</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="images/testimonial/4.webp" alt="" ></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Lyndon Pocekay</span>
                                                    <span class="c_date id-color">2 days ago</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="images/testimonial/5.webp" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Aleen Crigger</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    </li>
                                </ol>

                                <div class="spacer-single"></div>

                                <div id="comment-form-wrapper">
                                    <h4>Leave a Comment</h4>
                                    <div class="comment_form_holder">
                                        <form id="contact_form" name="form1" class="form-border" method="post" action="#">

                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" >

                                            <label>Email <span class="req">*</span></label>
                                            <input type="text" name="email" id="email" class="form-control" >
                                            <div id="error_email" class="error">Please check your email</div>

                                            <label>Message <span class="req">*</span></label>
                                            <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                            <div id="error_message" class="error">Please check your message</div>
                                            <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                            <div id="mail_failed" class="error">Error, email not sent</div>

                                            <p id="btnsubmit">
                                                <input type="submit" id="send" value="Send" class="btn-main" ></p>



                                        </form>
                                    </div>
                                </div>
                            </div>*/?>

                        </div>
                        
                        <div class="col-lg-4">
                            <div class="widget widget-post">
                                <h4>Recent Posts</h4>
                                <ul class="de-bloglist-type-1">
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/2.webp" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>How Security Camera Footage is Solving Major Crimes</h4></a>
                                            <div class="d-date">June 20, 2024</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/3.webp" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>The Growing Role of Security Cameras in Public Safety</h4></a>
                                            <div class="d-date">June 20, 2024</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/4.webp" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Privacy Concerns Rise with Increased Security Cameras Use</h4></a>
                                            <div class="d-date">June 20, 2024</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/5.webp" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>AI Enhances Security Cameras for Better Crime Prevention</h4></a>
                                            <div class="d-date">June 20, 2024</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="widget widget_tags">
                                <h4>Popular Tags</h4>
                                <ul>
                                    <li><a href="#link">Art</a></li>
                                    <li><a href="#link">Application</a></li>
                                    <li><a href="#link">Design</a></li>
                                    <li><a href="#link">Entertainment</a></li>
                                    <li><a href="#link">Internet</a></li>
                                    <li><a href="#link">Marketing</a></li>
                                    <li><a href="#link">Multipurpose</a></li>
                                    <li><a href="#link">Music</a></li>
                                    <li><a href="#link">Print</a></li>
                                    <li><a href="#link">Programming</a></li>
                                    <li><a href="#link">Responsive</a></li>
                                    <li><a href="#link">Website</a></li>
                                </ul>
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


<!-- Mirrored from madebydesignesia.com/themes/ucam/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 10:35:24 GMT -->
</html>