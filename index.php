<?php
$to = "arjansgh@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['comment'] ."\r\n" . $_POST['name'];
$headers = $_POST['email'];


mail($to,$subject,$txt,$headers);

?>




<!doctype html>
<html class="no-js" lang="en">
    

<head>
        <!-- title -->
        <title>Arjan Singh</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Arjan Singh">
        <!-- description -->
        <meta name="description" content="Arjan Singh is a web designer based in Delhi India. His professional work is mostly creative and modern.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top white-link header-dark bg-transparent nav-box-width padding-four-lr navbar-fixed-top">
                <div class="container-fluid nav-header-container">
                    <div class="row">
                        <!-- start logo -->
                        <div class="col-lg-2 col-md-2 col-xs-5">
                            <a href="#home" title="Arjan" class="logo inner-link"><img src="images/arjanlogo1.png" data-at2x="images/arjanlogo1.png" class="logo-dark" alt="Arjan"><img src="images/arjanlogo.png" data-at2x="images/arjanlogo1.png" alt="Arjan" class="logo-light default"></a>
                        </div>
                        <!-- end logo -->
                        <div class="col-lg-8 col-md-8 col-xs-2 accordion-menu">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse collapse no-padding-right" id="navbar-collapse-toggle-1">
                                <ul class="nav navbar-nav navbar-center alt-font text-normal">
                                    <!-- start menu item -->
                                    <li><a href="#home" class="inner-link">Home</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li><a href="#about" class="inner-link">About</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li><a href="#skills" class="inner-link">Skills</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li><a href="#services" class="inner-link">EXPERTISE</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li><a href="#portfolio" class="inner-link">Portfolio</a></li>
                                    <!-- end menu item -->
                                    <li><a href="#blog" class="inner-link">Blog</a></li>
                                    <!-- start menu item -->
                                    <li><a href="#contact" class="inner-link">Contact</a></li>
                                    <!-- end menu item -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-5 sm-width-auto text-right sm-no-padding-left">
                           
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->  
        </header>
        <!-- end header -->
        <!-- start hero section -->
        <section id="home" class="no-padding parallax mobile-height md-position-relative wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('images/work/arjan-demo-parallx.jpg');">
            <div class="opacity-medium bg-extra-dark-gray display-none md-display-block"></div>
            <div class="container position-relative full-screen">
                <div class="slider-typography">
                    <div class="slider-text-middle-main xs-padding-15px-lr">
                        <div class="slider-text-middle alt-font text-white">
                            <div class="col-md-6 col-sm-7 col-xs-12 padding-30px-right">
                                <h1 class="font-weight-500 margin-40px-bottom demo-heading">I'm <strong>ARJAN</strong>.</h1>
                                <h2 class="font-weight-500 margin-40px-bottom demo-heading typewrite"  data-period="2000" data-type='[ "an interactive web designer with the passion for creativity."]'>an interactive web designer with the<br>passion for creativity.<span class="wrap"></span></h2>
                                <a class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link" href="#about">Explore My Work<i class="ti-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->




        <!-- about agency section -->
        <section class="big-section wow fadeIn bg-black" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-10 col-xs-12 center-col text-center">
                        <div class="alt-font margin-20px-bottom sm-margin-20px-bottom text-uppercase text-extra-small letter-spacing-2">About Me</div>
                        <h5 class="alt-font font-weight-600 text-white no-margin-bottom">That backbencher in your class who always completes his assignments on time. I’m all about long drives & chasing cars.<br>Can be found burning rubber on the track or just being awesome in general.</h5><br><br>

                        <div class="alt-font margin-20px-bottom sm-margin-20px-bottom text-uppercase text-extra-small letter-spacing-2">I am available for freelance projects</div>
                        <h4 class="alt-font font-weight-600 text-white no-margin-bottom">Let's work together indeed!</h4><br>
                        <a class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link" href="#contact">Contact Me</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about agency section -->


        <!-- start section -->
        <section class="wow fadeIn no-padding main-slider mobile-height content-right-slider">
            <div class="container-fluid">
                <div class="row equalize sm-equalize-auto">
                    <div class="col-md-6 cover-background sm-height-500px xs-height-350px wow fadeIn" style="background-image:url('images/IMG_3971abb.jpg')"><div class="opacity-light bg-extra-dark-gray"></div></div>
                    <div class="swiper-full-screen swiper-container col-md-6 no-padding-lr white-move bg-extra-dark-gray text-center xs-padding-20px-tb wow fadeIn">
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide last-paragraph-no-margin">
                                <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                    <div class="margin-30px-bottom text-center position-relative">
                                        <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">01</span>
                                        <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">Let’s talk about me</p>
                                    </div>
                                    <h6 class="alt-font text-white" style="line-height: 1.5;">Hi ! I am Arjan and I'm a front end web designer/developer, skilled in HTML and CSS. I’m constantly learning web technologies and other design related topics. I  also hold a degree in 'Bachelor of Computer Application'.<br> Sometimes i create web-designs, posters, ecards and other stuff for good people. When I'm not working, I'm busy playing on my PlayStation, chasing cars, surffing over Internet and experimenting with HTML and CSS.</h6>
                                    
                                    <a class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link margin-35px-top" href="images/arjan-resume.jpg" download="Resume">Download Resume</a>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide last-paragraph-no-margin">
                                <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                    <div class="margin-30px-bottom text-center position-relative">
                                        <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">02</span>
                                        <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">More About Myself</p>
                                    </div>
                                    <h6 class="alt-font text-white">
                            	<ul class="list-style-9 margin-twelve-left">
                                <li class="text-uppercase"><span class="display-block text-extra-small text-white">Name</span>Arjan Singh</li>
                                <li class="text-uppercase"><span class="display-block text-extra-small text-white">Age</span>20 Years</li>
                                <li class=""><span class="display-block text-extra-small text-white">EMAIL</span>arjansgh@gmail.com</li>
                                <li class="text-uppercase"><span class="display-block text-extra-small text-white">Phone</span>+91 9990511261</li>
                                <li class="text-uppercase"><span class="display-block text-extra-small text-white">Address</span>Delhi, India</li>
                            </ul></h6>
                                    <a class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link margin-35px-top"
                                    href="images/arjan-resume.jpg" download="Resume">Download Resume</a>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide last-paragraph-no-margin">
                                <div class="padding-eighteen-all md-padding-eight-all sm-padding-thirteen-all xs-padding-15px-lr">
                                    <div class="margin-30px-bottom text-center position-relative">
                                        <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">03</span>
                                        <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">My Qualification</p>
                                    </div>
                                    <h6 class="alt-font text-white">
                                    	<ul class="list-style-9 margin-twelve-left">
                                <li class="text-uppercase"><span class="display-block text-extra-small text-white" style="padding-bottom: 10px;">EDUCATION</span>Bachelor of computer application</li>
                                
                                <li class="text-uppercase"><span class="display-block text-extra-small text-white" style="padding-bottom: 10px;">Certification</span>Web designing<br>Adobe Certified Expert (ACE)</li>

                                <li class="text-uppercase"><span class="display-block text-extra-small text-white" style="padding-bottom: 10px;">programming languages</span>html, css, java,<br>javascript, php, msql</li>	
                            </ul>
                                    </h6>
                                    
                                    <a class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link margin-35px-top"
                                    href="images/arjan-resume.jpg" download="Resume">Download Resume</a>
                                </div>
                            </div>
                            <!-- end slider item -->
                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-button-next slider-long-arrow-white"></div>
                        <div class="swiper-button-prev slider-long-arrow-white"></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        



        <!-- start progress bar section -->
        <section class="wow fadeIn" id="skills">
            <div class="container">
                <div class="row equalize sm-equalize-auto">
                    <div class="col-lg-6 col-md-6 col-sm-10 sm-center-col col-xs-12 display-table wow fadeIn last-paragraph-no-margin">
                        <div class="display-table-cell vertical-align-middle padding-seventeen-right sm-no-padding-lr sm-text-center sm-padding-30px-bottom">
                            <h5 class="text-extra-dark-gray font-weight-600 width-90 alt-font sm-width-100 ">SKILLS</h5>
                            <p class="width-90 margin-30px-bottom sm-width-100" style="font-size: 15px;">Note: This diagram is only a guideline. Knowledge of all these technologies update daily with experience. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 sm-center-col col-xs-12 display-table sm-no-margin-bottom wow fadeIn">
                        <div class="display-table-cell vertical-align-middle">
                            <div class="skillbar-bar-main skillbar-bar-style1">
                                <!-- start  progress bar item -->
                                <div class="skillbar margin-45px-bottom" data-percent="95%">
                                    <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">HTML</span>
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent text-small"></span>
                                </div>
                                <!-- end progress bar item -->
                                <!-- start  progress bar item -->
                                <div class="skillbar margin-45px-bottom" data-percent="92%">
                                    <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">CSS</span>
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent text-small"></span>
                                </div>
                                <!-- end progress bar item -->
                                <!-- start  progress bar item -->
                                <div class="skillbar margin-45px-bottom" data-percent="90%">
                                    <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">BOOTSTRAP</span>
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent text-small"></span>
                                </div>
                                <!-- end progress bar item -->
                                <!-- start  progress bar item -->
                                <div class="skillbar" data-percent="82%">
                                    <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">JQUERY</span>
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent text-small"></span>
                                </div>
                                <!-- end progress bar item -->
                                <!-- start  progress bar item -->
                                <div class="skillbar" data-percent="74%">
                                    <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">JAVASCRIPT</span>
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent text-small"></span>
                                </div>
                                <!-- end progress bar item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end progress bar section -->
        

        



        <!-- start feature box section -->
        <section class="bg-extra-dark-gray wow fadeIn" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                        <h5 class="alt-font text-white font-weight-600">EXPERTISE</h5>
                        <p style="font-size: 15px; text-align: center;">I've got chops in all phases of the design process.</p>
                    </div>
                </div>
                <div class="row equalize xs-equalize-auto">
                    <!-- start features box -->
                    <div class="col-md-4 col-sm-6 col-xs-12 sm-margin-30px-bottom wow fadeInUp">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 md-padding-six-all height-100 xs-padding-15px-lr">
                            <i class="icon-chat icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom"></i>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Ideas</div>
                            <p>I collaborate with client and peers to nurture and transform ideas into well thought out design specs. After all, that's where the majority of amazing user experiences start.</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    <!-- start features box -->
                    <div class="col-md-4 col-sm-6 col-xs-12 sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 md-padding-six-all height-100 xs-padding-15px-lr">
                            <i class="icon-tools icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom"></i>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">UI Design</div>
                            <p>I sketch and wireframe interfaces focusing on content structure, intuitive UI patterns and simple interactions. I'm a minimalist who truly believes that less is more.</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    <!-- start features box -->
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp xs-margin-30px-bottom" data-wow-delay="0.4s">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 md-padding-six-all height-100 xs-padding-15px-lr">
                            <i class="icon-desktop icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top sm-margin-20px-bottom xs-margin-15px-bottom"></i>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Code</div>
                            <p>I design in the browser with HTML(5), CSS(3) and a touch of JavaScript. I love coding things from scratch, but I can work with front-end frameworks like Bootstrap too.</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    
                </div>
            </div>
        </section>
        <!-- start feature box section -->



        <!-- start portfolio section -->
        <section class="wow fadeIn no-padding-top" id="portfolio">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                        <h5 class="alt-font text-black font-weight-600" style="margin-top: 100px;">PORTFOLIO</h5>
                    </div>

                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-5col hover-option4 lightbox-gallery">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp">
                                <a href="images/work/lamboblack.jpg" title="Lamborgini Black">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/lamboblack.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp" data-wow-delay="0.2s">
                                <a href="images/work/audiR8yellow.jpg" title="Audi R8 Yellow">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/audiR8yellow.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.4s">
                                <a href="images/work/minicooper.jpg" title="Mini Cooper Matte Orange">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/minicooper.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                                <a href="images/work/porshe.jpg" title="Porsche 718">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/porshe.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.8s">
                                <a href="images/work/mustangyellow.jpg" title="Mustang Yellow">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/mustangyellow.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp">
                                <a href="images/work/audigold.jpg" title="Audi Gold wrap">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/audigold.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.2s">
                                <a href="images/work/gtr.jpg" title="Nissan GTR">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/gtr.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.4s">
                                <a href="images/work/mustangred.jpg" title="Mustang Red">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/mustangred.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                                <a href="images/work/porsche.jpg" title="Porsche 911 Carrera GTS">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/porsche.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.8s">
                                <a href="images/work/gtra.jpg" title="Nissan GTR in Matte Silver">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/gtra.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp">
                                <a href="images/work/mobiledesign.jpg" title="Mobile App design">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/mobiledesign.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.2s">
                                <a href="images/work/bottle.jpg" title="Bottle">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/bottle.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.4s">
                                <a href="images/work/coffeecup.jpg" title="Coffe Cup">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/coffeecup.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                                <a href="images/work/banner-03.jpg" title="Menu Design">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/banner-03.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.8s">
                                <a href="images/work/display.jpg" title="Web Page Design">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/display.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp">
                                <a href="images/work/Warehouse-Website-Template.jpg" title="Warehouse Website Template">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/Warehouse-Website-Template.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.2s">
                                <a href="images/work/banner2.jpg" title=" Web page Header">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/banner2.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.4s">
                                <a href="images/work/displaywork.jpg" title="Work Design">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/displaywork.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                                <a href="images/work/Casablanca_page.jpg" title="Web Landing Page">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/Casablanca_page.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.8s">
                                <a href="images/work/homepagportfolio2.jpg" title="Simple Quote">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/homepagportfolio2.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow fadeInUp" data-wow-delay="0.10s">
                                <a href="images/work/pexels-photo-97077.jpg" title="Coding Screen">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray"><img src="images/work/pexels-photo-97077.jpg" alt="" class="project-img-gallery"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <i class="ti-zoom-in text-white fa-2x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
        



        <!-- start creative blog -->
        <section id="blog" class="bg-charcoal-gray wow fadeIn" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                        <h5 class="alt-font text-white font-weight-600">BLOG</h5>
                    </div>
                </div>
            </div>
            <div class="containe-fluid padding-15px-lr">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeIn">
                        <img src="images/pofo-creativeblog-style.png" alt="" />
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-80px-top sm-margin-50px-top xs-margin-30px-top wow fadeIn">
                        <a href="myblog.html" target="_blank" class="btn btn-large btn-rounded btn-deep-pink">Explore My Blog</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end creative blog -->
        


        
        <!-- start footer --> 
        <!-- start contact section -->
        <section class="wow fadeIn bg-extra-dark-gray" id="contact">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-6 padding-ten-right md-padding-five-right sm-padding-15px-right sm-margin-five-bottom wow fadeIn">
                        
                        <h5 class="alt-font text-white margin-20px-bottom">Feel free to get in touch with me any convenient way.</h5>
                        <br><br>
                        <div class="icon-box width-100 sm-margin-lr-auto xs-width-100 last-paragraph-no-margin">
                            <div class="icon-box-holder vertical-align-middle display-table-cell position-relative">
                                <i class="icon-map icon-medium text-deep-pink padding-5px-top"></i>
                                <div class="alt-font text-white">Postal Address</div>
                                <p>Rohini, New Delhi</p>
                            </div>
                        </div>
                        <div class="icon-box width-100 sm-margin-lr-auto xs-width-100 last-paragraph-no-margin">
                            <div class="icon-box-holder vertical-align-middle display-table-cell position-relative">
                                <i class="icon-envelope icon-medium text-deep-pink padding-5px-top"></i>
                                <div class="alt-font text-white">General Enquiries</div>
                                <p><a href="mailto:no-reply@domain.com"> arjansgh@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="icon-box width-100 sm-margin-lr-auto xs-width-100 last-paragraph-no-margin">
                            <div class="icon-box-holder vertical-align-middle display-table-cell position-relative">
                                <i class="icon-chat icon-medium text-deep-pink padding-5px-top"></i>
                                <div class="alt-font text-white">Business Phone</div>
                                <p>+91 999 051 1261</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn">
                        <div class="padding-fifteen-all bg-white border-radius-6 md-padding-seven-all">
                            <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">I'd love to hear from you!</div> 
                            <div>
                                <form id="contact-form" action="" method="post">
                                    <div id="success-contact-form" class="no-margin-lr"></div>
                                    <input type="text" name="name" id="name" placeholder="Name*" class="input-bg">
                                    <input type="text" name="email" id="email" placeholder="E-mail*" class="input-bg">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" class="input-bg">
                                    <textarea name="comment" id="comment" placeholder="Your Message" class="input-bg"></textarea>
                                    <button id="contact-us-button sendbtn" type="submit" name="submit" class="btn btn-small border-radius-4 btn-black">send message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start contact section -->
        <!-- start footer --> 
        <footer class="footer-center-logo padding-five-tb xs-padding-30px-tb">
            <div class="container">
                <div class="row equalize xs-equalize-auto">
                    <!-- start copyright -->
                    <div class="col-md-4 col-sm-5 col-xs-12 text-small text-center alt-font display-table xs-text-center xs-margin-15px-bottom">
                        <div class="display-table-cell vertical-align-middle">
                            &COPY; 2018 Arjan Singh. All rights reserved
                        </div>
                    </div>
                    <!-- end copyright -->
                    <!-- start logo -->
                    <div class="col-md-4 col-sm-2 col-xs-12 text-center display-table xs-margin-10px-bottom">
                        <div class="display-table-cell vertical-align-middle">
                            <a href="index.html"><img class="footer-logo" src="images/arjanlogo2.png" data-at2x="images/arjanlogo2.png" alt="Arjan"></a>
                        </div>
                    </div>
                    <!-- end logo -->
                    <!-- start social media -->
                    <div class="col-md-4 col-sm-5 col-xs-12 text-center display-table xs-text-center">
                        <div class="display-table-cell vertical-align-middle">
                            <span class="alt-font text-small margin-20px-right">On social networks</span>
                            <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                                <ul class="small-icon no-margin-bottom">
                                    <li><a class="facebook text-extra-dark-gray" href="https://www.facebook.com/arjansgh" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter text-extra-dark-gray" href="https://twitter.com/yo_arjan" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google text-extra-dark-gray" href="https://plus.google.com/u/0/113149886022887741673" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="instagram text-extra-dark-gray" href="https://www.instagram.com/mearjansingh/" target="_blank"><i class="fa fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
        
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/typewriter.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-54513701-1', 'auto');
            ga('send', 'pageview');

        </script>

        
    </body>
</html>