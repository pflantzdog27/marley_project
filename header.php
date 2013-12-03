<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <title>Marley Coffee</title>
    <!--<link data-order="shortcut icon" href="images/favicon.ico">-->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <?php if ($page == 'home') { ?>
        <section id="intro-screen">
            <div id="blanket"></div>
            <div id="viewport"></div>
            <img class="full-screen-image" src="images/intro_screen_C.jpg">
            <img class="full-screen-image" src="images/intro_screen_B.jpg">
            <img class="full-screen-image" src="images/intro_screen_A.jpg">
            <img class="full-screen-image" src="images/intro_screen_D.jpg">
            <div class="container">
                <img id="marley-logo" src="images/logo.jpg" class="col-sm-3 col-xs-6" alt="Marley Coffee Logo">
            </div>
            <span id="down-arrow"></span>
        </section>
    <?php } ?>
    <!-- start main content section -->
    <div id="wrapper">
        <!-- large display nav -->
        <div id="navigation-wrap">
            <nav id="main-nav-wrap" class="navbar navbar-default navbar-inverse" role="navigation">
                <div class="container">
                    <button id="mobile-menu-icon" type="button" class="btn btn-default visible-xs visible-sm">
                        MENU <span class="glyphicon glyphicon-list"></span>
                    </button>
                    <div class="row">
                        <ul class="nav navbar-nav col-sm-12 col-md-9" id="main-nav">
                            <li class="active"><a href="#" class="glyphicon glyphicon-home home"></a></li>
                            <li><a href="#">Coffee</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learn <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Where to Buy</a></li>
                            <li><a href="#">1Love</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li id="affiliates" ><a data-toggle="modal" href="#affiliate-form">Affiliates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right col-md-3 visible-md visible-lg" id="social-networks">
                            <li id="instagram"><a href="http://instagram.com/marleycoffee"></a></li>
                            <li id="pintrest"><a href="http://www.pinterest.com/themarleycoffee/"></a></li>
                            <li id="youtube"><a href="http://www.youtube.com/user/MarleyCoffee"></a></li>
                            <li id="twitter"><a href="https://twitter.com/MarleyCoffee"></a></li>
                            <li id="facebook"><a href="https://www.facebook.com/MarleyCoffee"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php if($page == 'home'){ ?>
                <nav id="sort-nav" class="navbar navbar-default navbar-inverse hidden-xs" role="navigation">
                    <div class="container">
                        <ul class="filter option-set nav navbar-nav" id="left-sorter" data-filter-group="primary">
                            <li><a class="selected" id="overview-tab" href="#" data-filter-value=".overview">Overview</a></li>
                            <li><a href="#" data-filter-value=".coffee">Coffee</a></li>
                            <li><a href="#" data-filter-value=".company">Company</a></li>
                            <li><a href="#" data-filter-value=".community">Community</a></li>
                        </ul>
                        <ul class="filter option-set nav navbar-nav" data-filter-group="secondary">
                            <li><a class="selected" href="#" data-filter-value="">All</a></li>
                            <li><a href="#" data-filter-value=".pix">Pix</a></li>
                            <li><a href="#" data-filter-value=".videos">Videos</a></li>
                            <li><a href="#" data-filter-value=".text">Text</a></li>
                            <li><a href="#" data-filter-value=".social">Social</a></li>
                        </ul>
                    </div>
                </nav>
            <?php } ?>
        </div>
        <!-- smaller device navigation -->
        <nav id="left-side-nav" role="navigation">
            <button type="button" class="close" aria-hidden="true">&times;</button>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Home</a></li>
                <li><a href="#">Coffee</a></li>
                <li class="slide-more"><a href="#">About <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="second-slide">
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </li>
                <li class="slide-more"><a href="#">Learn <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="second-slide">
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </li>
                <li><a href="#">Where to Buy</a></li>
                <li><a href="#">1Love</a></li>
                <li class="slide-more"><a href="#">Investor Relations <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="second-slide">
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </li>
                <li id="affiliates" ><a data-toggle="modal" href="#affiliate-form">Affiliates</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav><!-- end small nav -->