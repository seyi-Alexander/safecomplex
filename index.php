<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>safecomplex</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div id="all">
        <!-- Top bar-->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 d-md-block d-none">
                        <p>Contact us on +234 807 555 333 or support@safecomplex.com</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end justify-content-between">
                            <ul class="list-inline contact-info d-block d-md-none">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                            <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
                            <ul class="social-custom list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar end-->
        <!-- Login Modal-->
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="get">
                            <div class="form-group">
                                <input id="email_modal" type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password_modal" type="password" placeholder="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login modal end-->
        <header class="nav-holder make-sticky">
            <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
                <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo.png" alt="logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt=" logo" class="d-inline-block d-md-none"><span class="sr-only"></span></a>
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <div id="navigation" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                            </li>
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Tasks<b class="caret"></b></a>
                            </li>
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Services <b class="caret"></b></a>
                            </li>
                            <!-- ========== FULL WIDTH MEGAMENU ==================-->
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">All Categories <b class="caret"></b></a>
                            </li>
                            <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                            <!-- ========== Contact dropdown ==================-->
                            <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">All locations <b class="caret"></b></a>
                            </li>
                            <!-- ========== Contact dropdown end ==================-->
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar End-->
        <section style="background: url('img/blog2.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
            <div class="container">
                <div class="dark-mask mask-primary"></div>
                <div class="text-center container">
                    <button type="button" class="btn btn-danger" style="margin:5px;">POST A TASK/CHORE</button>
                    <button type="button" class="btn btn-danger" style="margin:5px;">POST A SERVICE</button>
                </div>
                <p></p>
                <div id="search" class="container align-items-center ">
                    <form role="search" class="navbar-form">
                        <div class="input-group  d-flex justify-content-center">
                            <input type="text" placeholder="What are you looking for?" class="form-control col-md-7 rounded"><span class="input-group-tn">
    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>
                <p></p>
                <p></p>
                <!-- Carousel Start-->
                <div class="container hideDiv">
                    <ul class="owl-carousel owl-home list-unstyled equal-height">
                        <li class="item">
                            <div class="card box-image-text rounded">
                                <div class="image">
                                    <img class="card-img-top" src="img/portfolio-1.jpg">
                                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> View</a></div>
                                </div>
                                <div class="card-blck">
                                    <h4 class="card-ttle text-center">Name</h4>
                                    <p class="card-text text-center">Details</p>
                                </div>
                                <div class="ribbon-holder">
                                    <div class="ribbon sale">SALE</div>
                                    <div class="ribbon new">NEW</div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="card box-image-text rounded">
                                <div class="image">
                                    <img class="card-img-top" src="img/portfolio-2.jpg">
                                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> View</a></div>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title text-center">Name</h4>
                                    <p class="card-text text-center">Details</p>
                                </div>
                                <div class="ribbon-holder">
                                    <div class="ribbon new" style="background-color:#CF1C1C">Featured</div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="card box-image-text rounded">
                                <div class="image">
                                    <img class="card-img-top" src="img/portfolio-9.jpg">
                                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> View</a></div>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title text-center">Name</h4>
                                    <p class="card-text text-center">Details</p>
                                </div>
                                <div class="ribbon-holder">
                                    <div class="ribbon sale">SALE</div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="card box-image-text rounded">
                                <div class="image">
                                    <img class="card-img-top" src="img/portfolio-4.jpg">
                                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> View</a></div>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title text-center">Name</h4>
                                    <p class="card-text text-center">Details</p>
                                </div>
                                <div class="ribbon-holder">
                                    <div class="ribbon new" style="background-color:#CF1C1C">Featured</div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="card box-image-text rounded">
                                <div class="image">
                                    <img class="card-img-top" src="img/portfolio-5.jpg">
                                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> View</a></div>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title text-center">Name</h4>
                                    <p class="card-text text-center">Details</p>
                                </div>
                                <div class="ribbon-holder">
                                    <div class="ribbon new" style="background-color:#CF1C1C">Featured</div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="card box-image-text rounded">
                                <div class="image">
                                    <img class="card-img-top" src="img/portfolio-6.jpg">
                                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> View</a></div>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title text-center">Name</h4>
                                    <p class="card-text text-center">Details</p>
                                </div>
                                <div class="ribbon-holder">
                                    <div class="ribbon new">New</div>
                                    <div class="ribbon new" style="background-color:#CF1C1C">Featured</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Carousel End-->
            </div>
        </section>
        <div id="content">
            <div class="container">
                <div class="row bar">
                    <div class="col-md-12">
                        <div class="products-big">
                            <div class="row products">
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">Fur coat with very but very very long name</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">White Blouse Armani</a></h3>
                                            <p class="price">
                                                <del>$280</del> $143.00
                                            </p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon sale">SALE</div>
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">Black Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">Black Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">White Blouse Armani</a></h3>
                                            <p class="price">
                                                <del>$280</del> $143.00
                                            </p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon sale">SALE</div>
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">White Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">White Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="#">Fur coat</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pages">
                            <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="h6">About Us</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        <hr>
                        <h4 class="h6">Join Our Monthly Newsletter</h4>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                                </div>
                            </div>
                        </form>
                        <hr class="d-block d-lg-none">
                    </div>
                    <div class="col-md-3">
                        <h4 class="h6">Contact</h4>
                        <p class="text-uppercase"><strong>Multi biz Ltd.</strong><br>13/25 New Avenue <br>loren ipsum River <br>Nigeria
                            <hr class="d-block d-lg-none">
                    </div>
                    <div class="col-md-3">
                        <h4 class="h6">Contact</h4>
                        <p class="text-uppercase"><strong>Multi biz Ltd.</strong><br>13/25 New Avenue <br>loren ipsum River <br>Nigeria
                            <hr class="d-block d-lg-none">
                    </div>
                    <div class="col-md-3">
                        <h4 class="h6">Contact</h4>
                        <p class="text-uppercase"><strong>Multi biz Ltd.</strong><br>13/25 New Avenue <br>loren ipsum River <br>Nigeria
                            <hr class="d-block d-lg-none">
                    </div>
                </div>
            </div>
            <div class="copyrights">
                <div class="container">
                    <div class="row">
                        <div class="text-center-md">
                            <p>&copy; 2018. Safecomplex</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js">
    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js">
    </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js">
    </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
</body>

</html>
