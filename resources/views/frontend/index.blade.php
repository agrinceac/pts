<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="bg" ng-app="site"> <!--<![endif]-->
<head>
    <title ng-bind="page.name"></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ng-bind: page.metaDescription;">
    <meta name="keywords" content="ng-bind: page.metaKeywords;">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/animated-headline/css/animated-headline.css">
<!--     <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css"> -->
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
<!--     <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css"> -->

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed">
    <div class="wrapper">
        <!--=== Header v6 ===-->
        <div class="header-v6 header-transparent header-dark-dropdown header-sticky header-fixed-shrink">
            <!-- Navbar -->
            <div class="navbar mega-menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Navbar Brand -->
                        <div class="navbar-brand">
                            <a href="#!/">
                                <img class="default-logo" src="assets/img/logo-inverse.svg" alt="Logo" style="width: 240px;">
                                <img class="shrink-logo" src="assets/img/logo.svg" alt="Logo" style="width: 240px;">
                            </a>
                        </div>
                        <!-- ENd Navbar Brand -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav">
                                <!-- Home -->
                                <li>
                                    <a href="#!/about">
                                        За Нас
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- Blog -->
                                <li class="dropdown">
                                    <a href="#!/what-do-we-offer" class="dropdown-toggle" data-toggle="dropdown">
                                        Какво Предлагаме
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Ядрената енергетика</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!/products">Въздухоохладители</a></li>
                                                <li><a href="#">Детайли на тръбопроводите</a></li>
                                                <li><a href="#">Eлектро приводи</a></li>
                                                <li><a href="#">Изделия от неръдаема стомана</a></li>
                                                <li><a href="#">Нестандартно оборудване</a></li>
                                                <li><a href="#">Оборудване за филтриране</a></li>
                                                <li><a href="#">Помпено оборудване</a></li>
                                                <li><a href="#">Спирателна арматура</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Теплова енергетика</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Детайли на тръбопроводите</a></li>
                                                <li><a href="#">Електрически приводи</a></li>
                                                <li><a href="#">Котли</a></li>
                                                <li><a href="#">Нестандартно оборудване</a></li>
                                                <li><a href="#">Помпено оборудване</a></li>
                                                <li><a href="#">Спирателна арматура</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Нефтогазова индустрия</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Електро приводи</a></li>
                                                <li><a href="#">Маркучи</a></li>
                                                <li><a href="#">Нестандартно оборудване</a></li>
                                                <li><a href="#">Помпено оборудване</a></li>
                                                <li><a href="#">Спирателна арматура</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Металургичната индустрия</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Спирателна арматура</a></li>
                                                <li><a href="#">Тръбопроводна арматура</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">ВиК</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Делайли на тръбопровод</a></li>
                                                <li><a href="#">Нестандартно оборудване</a></li>
                                                <li><a href="#">Помпено оборудване</a></li>
                                                <li><a href="#">Спирателна арматура</a></li>
                                                <li><a href="#">Тръби</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Филтри</a></li>
                                    </ul>
                                </li>
                                <!-- End Blog -->

                                <!-- Portfolio -->
                                <li>
                                    <a href="#!/docs">
                                        Документи
                                    </a>
                                </li>
                                <!-- End Portfolio -->

                                <!-- Features -->
                                <li class="hidden-md">
                                    <a href="#!/clients">
                                        Клиенти
                                    </a>
                                </li>
                                <!-- End Features -->

                                <!-- Shortcodes -->
                                <li class="mega-menu-fullwidth">
                                    <a href="#!/contacts">
                                        Контакти
                                    </a>
                                </li>
                                <!-- End Shortcodes -->
                            </ul>
                        </div>
                    </div><!--/navbar-collapse-->
                </div>
            </div>
            <!-- End Navbar -->
        </div>
        <!--=== End Header v6 ===-->

        <main>
            <!--=== Breadcrumbs ===-->
            <div class="breadcrumbs margin-top-70">
                <div class="container">
                    <h1 class="pull-left" ng-bind="page.h1"></h1>
                    <nav>
                        <ul class="pull-right breadcrumb">
                            <li><a href="index.html">Основен</a></li>
                            <li><a href="">Страница</a></li>
                            <li class="active" ng-bind="page.h1"></li>
                        </ul>
                    </nav>
                </div><!--/container-->
            </div><!--/breadcrumbs-->
            <!--=== End Breadcrumbs ===-->
            <article ng-bind-html="page.text"></article>
        </main>

        <!--=== Footer Version 1 ===-->
        <div class="footer-v1">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-3 col-sm-6 md-margin-bottom-40">
                            <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo-inverse.svg" alt="" style="width: 240px;"></a>
                            <p>Нашата организация Промтех Строй ООД работи в областа на доставките на оборудване за различните отрасли.</p>
                            <p>Ние сме официални представители на различни Европейски и Руски предприятия.</p>
                        </div><!--/col-md-3-->
                        <!-- End About -->

                        <!-- Latest -->
                        <div class="col-md-3 col-sm-6 md-margin-bottom-40">
                            <div class="posts">
                                <div class="headline"><h2>Последните публикации</h2></div>
                                <ul class="list-unstyled latest-list">
                                    <li>
                                        <a href="#">Incredible content</a>
                                        <small>Май 8, 2017</small>
                                    </li>
                                    <li>
                                        <a href="#">Best shoots</a>
                                        <small>Июнь 23, 2017</small>
                                    </li>
                                    <li>
                                        <a href="#">New Terms and Conditions</a>
                                        <small>Сентябрь 15, 2017</small>
                                    </li>
                                </ul>
                            </div>
                        </div><!--/col-md-3-->
                        <!-- End Latest -->

                        <!-- Link List -->
                        <div class="col-md-3 col-sm-6 md-margin-bottom-40">
                            <div class="headline"><h2>Полезни връзки</h2></div>
                            <ul class="list-unstyled link-list">
                                <li><a href="#!/about">За нас</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/what-do-we-offer">Какво предлагаме</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/docs">Документи</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/clients">Клиенти</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/contacts">Контакти</a><i class="fa fa-angle-right"></i></li>
                            </ul>
                        </div><!--/col-md-3-->
                        <!-- End Link List -->

                        <!-- Address -->
                        <div class="col-md-3 col-sm-6 map-img md-margin-bottom-40">
                            <div class="headline"><h2>Свържете се с нас</h2></div>
                            <address class="md-margin-bottom-40">
                                България, град Бургас, <br />
                                квартал Сарафово, ул. Брацигово 16-а<br />
                                ТЦ «Молчето», офис «Промтех Строй»<br /><br />
                                Телефон: <a href="tel:+35956700121">+359 56 700 121</a><br />
                                Email: <a href="mailto:promtehstroy@mail.bg">promtehstroy@mail.bg</a><br />
                                Skype: <a href="skype:promtehstroy555">promtehstroy555</a>
                            </address>
                        </div><!--/col-md-3-->
                        <!-- End Address -->
                    </div>
                </div>
            </div><!--/footer-->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                2017 &copy; Всички права запазени.
                                <a target="_blank" href="http://webdelo.org/" class="webdelo-link">
                                    <span class="wb-text">Developed by </span>
                                    <span class="wb-image"><img src="https://vput.ru/images/bg/logoW.svg" alt="Webdelo" style="width: 70px; height: auto;"></span>
                                </a>
                            </p>
                        </div>
                        
                        <!-- Social Links -->
                        <div class="col-md-6">
                            <ul class="footer-socials list-inline">
                                <li>
                                    <a href="skype:promtehstroy555" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+3595670012" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Телефон">
                                        <i class="fa fa-phone"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:promtehstroy@mail.bg" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="E-mail">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social Links -->
                    </div>
                </div>
            </div><!--/copyright-->
        </div>
        <!--=== End Footer Version 1 ===-->
    </div><!--/wrapper-->

    <!-- JS Global Compulsory -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
<!--    <script src="https://code.angularjs.org/1.6.3/angular-sanitize.min.js"></script> -->
    <script>
        var app = angular.module("site", ["ngRoute"]);

        app.run(function($rootScope, $location, $http, $sce) {
            $rootScope.$on("$locationChangeStart", function(event, next, current) {
//                console.log($location);

                var locationUrl = ($location.$$url == "/") || ($location.$$url == "") ? "/index" : $location.$$url;

                console.log( "http://" + window.location.hostname + "/api/articles" + locationUrl );

                $http
                    .get("http://" + window.location.hostname + "/api/articles" + locationUrl)
                    .then(function(response) {
                        $rootScope.page = response.data;
                        $rootScope.page.text = $sce.trustAsHtml($rootScope.page.text);

                        //App.init();
                        //new WOW().init();
                        //App.initParallaxBg();
                        //FancyBox.initFancybox();

                        window.scrollTo(0, 0);
                    });

                // new WOW().init();
                // App.initParallaxBg();
            });
        });
            
        // app.config(function($routeProvider) {
        //  $routeProvider
        //      .when("/", {
        //          templateUrl: "/templates/landing.htm"
        //      })
        //      .when("/products", {
        //          templateUrl: "/templates/products.htm"
        //      })
        //      .when("/contacts", {
        //          templateUrl: "/templates/contacts.htm"
        //      })
        //      .when("/clients", {
        //          templateUrl: "/templates/clients.htm"
        //      })
        //      .when("/docs", {
        //          templateUrl: "/templates/docs.htm"
        //      })
        //      // .when("/about", {
        //      //  templateUrl: "https://promtehstroi-1328b.firebaseio.com/data/0/attributes/content.json"
        //      // })
        //      .when("/what-do-we-offer", {
        //          templateUrl: "/templates/what-do-we-offer.htm"
        //      });
        // });
    </script>

<!--     <script src="assets/plugins/jquery/jquery-migrate.min.js"></script> -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="assets/plugins/back-to-top.js"></script>
<!--     <script src="assets/plugins/smoothScroll.js"></script> -->
<!--     <script src="assets/plugins/backstretch/backstretch-ini.js"></script> -->
<!--     <script src="assets/plugins/wow-animations/js/wow.min.js"></script> -->
<!--     <script src="assets/plugins/animated-headline/js/modernizr.js"></script> -->
<!--     <script src="assets/plugins/animated-headline/js/animated-headline.js"></script> -->
<!--     <script src="assets/plugins/jquery.parallax.js"></script> -->
<!--     <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script> -->
<!--     <script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script> -->
    <!-- JS Customization -->
<!--     <script src="assets/js/custom.js"></script> -->
    <!-- JS Page Level -->
<!--     <script src="assets/js/app.js"></script> -->
<!--     <script src="assets/js/plugins/fancy-box.js"></script> -->
<!--     <script src="assets/js/plugins/owl-carousel.js"></script>
    <script src="assets/js/plugins/style-switcher.js"></script> -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->

</body>
</html>
