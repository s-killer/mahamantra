<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <title>Maha Mantra</title>
    <meta name="keywords" content="">
    <meta name="author" content="INCENSE">


    <!--    <!-- Favicons-->
    <!--        ================================================== -->
    <link rel="shortcut icon" href="img/logo/700x700.png" type="image/x-icon">
    <!--    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">-->
    <!--    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">-->
    <!--    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">-->

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Stylesheet
        ================================================== -->

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->
</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="padding-left: 0">
    <div class="container" style="padding-left: 0">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.php" style="padding: 0 !important;">
                <img src="img/logo/700x700.png" width="100px" style="margin-left: 0 !important; float: left">

            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="page-scroll">Home</a></li>

                <li><a href="#works-section" class="page-scroll">Products</a></li>
                <li><a href="#about-section" class="page-scroll">About</a></li>

                <li><a href="#contact-section" class="page-scroll">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="text-center" id="home">
    <div class="intro-text">
        <h1>Welcome to <strong>Maha Mantra</strong></h1>
        <p>Fragrance Redefined</p>
    </div>
</header>


<!-- Products Section -->
<div id="works-section">
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <h2>Our Products</h2>
            <hr>
            <div class="clearfix"></div>

        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">ZipperPouch</a></li>
                        <li><a href="#" data-filter=".app">Pouch</a></li>
                        <li><a href="#" data-filter=".branding">Box</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="portfolio-items">

                <!--To get all images from directory-->
                <?php
                $directory = "img/portfolio/Pouch/";
                $images = glob("$directory*.{png,jpeg,jpg}", GLOB_BRACE);
                $image_height = 50;
                $image_width = 200;
                $counter = 0;
                //echo sizeof($images);
                //                echo $directory;
                foreach ($images as $image) {
//                    echo 'HII';
                    echo '<div class="col-sm-6 col-md-3 col-lg-3 app product">';
                    echo '<div class="portfolio-item">';
                    echo '<div class="hover-bg"> <a href=' . $image . ' rel="prettyPhoto">';
                    echo '<div class="hover-text"';
                    echo '<small>Pouch</small>';
                    echo '<div class="clearfix"></div>';
                    echo '</div>';

                    echo '<img src=' . $image . ' class="img-responsive" alt="Pouch"> </a> </div>';
                    echo '</div>';
                    echo '</div>';

                }
                ?>
                <?php
                $directory = "img/portfolio/ZipperPouch/";

                $images = glob("$directory*.{png,jpeg,jpg}", GLOB_BRACE);
                $image_height = 50;
                $image_width = 200;
                $counter = 0;

                foreach ($images as $image) {

                    echo '<div class="col-sm-6 col-md-3 col-lg-3 web product">';
                    echo '<div class="portfolio-item">';
                    echo '<div class="hover-bg"> <a href=' . $image . ' rel="prettyPhoto">';
                    echo '<div class="hover-text"';
                    echo '<small>Zipper</small>';
                    echo '<div class="clearfix"></div>';
                    echo '</div>';

                    echo '<img src=' . $image . ' class="img-responsive" alt="Zipper Pack"> </a> </div>';
                    echo '</div>';
                    echo '</div>';

                }
                ?>

                <?php
                $directory = "img/portfolio/incense/";

                $images = glob("$directory*.{png,jpeg,jpg}", GLOB_BRACE);
                $image_height = 50;
                $image_width = 200;
                $counter = 0;
                foreach ($images as $image) {

                    echo '<div class="col-sm-6 col-md-3 col-lg-3 branding product">';
                    echo '<div class="portfolio-item">';
                    echo '<div class="hover-bg"> <a href=' . $image . ' rel="prettyPhoto">';
                    echo '<div class="hover-text"';
                    echo '<small>Pouch</small>';
                    echo '<div class="clearfix"></div>';
                    echo '</div>';

                    echo '<img src=' . $image . ' class="img-responsive" alt="Pouch Title"> </a> </div>';
                    echo '</div>';
                    echo '</div>';

                }
                ?>

            </div>
        </div>
        <!-- About Section -->
        <div id="about-section">
            <div class="container">
                <div class="section-title text-center center">
                    <h2>About Us</h2>
                    <hr>
                    <div class="clearfix"></div>
                    <p>We established in year 2008 we have of experience in manufacturing and trading of Agarbatti.
                        Quality serves as the base for the production of quality range of Agarbattis and flora
                        manufactured,
                        exported and supplied by the company.
                        The company ensures that the products are free from any adulterations and are safe for human
                        use.
                        The dynamics based on which the products are checked for quality our consumers are spread across
                        India like in the cities of Maharashtra and Gujarat.</p>
                </div>
                <div class="row">
                    <div class="col-md-6"><img src="img/about.jpg" class="img-responsive"></div>
                    <div class="col-md-6">
                        <div class="about-text">
                            <h4>OUR REACH</h4>
                            <p>From the very inception we have believed in making strong and long term relations with
                                our customers,
                                We specialize in customizing the products according to the needs of the customers,
                                we work with dedication and commitment to deliver the best quality to our customers at a
                                very competitive price and in a timely manner.
                                Quality packaging materials are used for the secured shipment of the products to the
                                clients.
                                We believe if the customer survives the customer returns</p>


                            <h4>OUR STRENGTH</h4>
                            <p>We are backed by a team of highly trained professionals that enable us to provide
                                Agarbatti.
                                The offered range is processed from a varied range of natural and synthetic essential
                                oils.
                                It is sternly tested on various parameters to ensure its fragrance at users' end.
                                This agarbatti is demanded among customers to its subtle aroma which brings an
                                everlasting ambiance in surroundings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Contact Section -->
        <div id="contact-section" class="text-center">
            <div class="container">
                <div class="section-title center">
                    <h2>Contact Us</h2>
                    <hr>

                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-4"><i class="fa fa-map-marker"></i>
                        <p>753,shop no 3,Ramkrushna apartment kasba peth,opp. Sattoti police Station<br>
                            Pune</p>
                    </div>
                    <div class="col-md-4"><i class="fa fa-envelope-o"></i>
                        <p>rajkuber@rediffmail.com</p>
                    </div>
                    <div class="col-md-4"><i class="fa fa-phone"></i>
                        <p> +91 9730040044</p>
                    </div>

                    <div class="clearfix"></div>
                    <hr>
                </div>

                <!--Message-->

                <div class="col-md-8 col-md-offset-2">
                    <h3>Leave us a message</h3>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Name"
                                           required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" placeholder="Email"
                                           required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"
                                      required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-default">Send Message</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <div id="social-section">
        <div class="container-fluid">
            <div class="social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/rkctpune/">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.amazon.in/MAHAMANTRA/b/ref=w_bl_hsx_s_ho_web_9735493031?ie=UTF8&node=9735493031&field-lbr_brands_browse-bin=MAHAMANTRA">
                            <i class="fa fa-amazon" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="fnav">
                <p>Copyright &copy; Maha Mantra</p>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.js"></script>
    <script type="text/javascript" src="js/waypoints.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact_me.js"></script>

    <!-- Javascripts
        ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>