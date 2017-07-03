<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="bg" ng-app="site"> <!--<![endif]-->
<head>
    <title ng-bind="page.metaTitle ? page.metaTitle : page.name"></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">
    <meta name="keywords">

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
<!--     <link rel="stylesheet" href="assets/plugins/animate.css"> -->
<!--     <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css"> -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<!--     <link rel="stylesheet" href="assets/plugins/animated-headline/css/animated-headline.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-loading-bar/0.9.0/loading-bar.min.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body class="header-fixed">
    <div class="wrapper">
        <!--=== Header v6 ===-->
        <header class="header-v6 header-transparent header-dark-dropdown header-sticky header-fixed-shrink">
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
                                    <a href="#!/articles/about">
                                        За Нас
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- Blog -->
                                <li class="dropdown">
                                    <a href="#!/categories" class="dropdown-toggle" data-toggle="dropdown">
                                        Какво Предлагаме
                                    </a>
                                </li>
                                <!-- End Blog -->

                                <!-- Portfolio -->
                                <li>
                                    <a href="#!/articles/docs">
                                        Документи
                                    </a>
                                </li>
                                <!-- End Portfolio -->

                                <!-- Features -->
                                <li class="hidden-md">
                                    <a href="#!/articles/clients">
                                        Клиенти
                                    </a>
                                </li>
                                <!-- End Features -->

                                <!-- Shortcodes -->
                                <li class="mega-menu-fullwidth">
                                    <a href="#!/articles/contacts">
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
        </header>
        <!--=== End Header v6 ===-->

        <main autoscroll="true" ng-view></main>

        <!--=== Footer Version 1 ===-->
        <footer class="footer-v1">
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
                                <div class="headline"><h2>Основните направления</h2></div>
                                <ul class="list-unstyled link-list">
                                    <li><a href="#!/category-articles/8">Ядрената Енергетика</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#!/category-articles/9">Теплова енергетика</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#!/category-articles/10">Нефтогазова индустрия</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#!/category-articles/11">Металургичната индустрия</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#!/category-articles/12">ВиК</a><i class="fa fa-angle-right"></i></li>
                                </ul>
                            </div>
                        </div><!--/col-md-3-->
                        <!-- End Latest -->

                        <!-- Link List -->
                        <div class="col-md-3 col-sm-6 md-margin-bottom-40">
                            <div class="headline"><h2>Полезни връзки</h2></div>
                            <ul class="list-unstyled link-list">
                                <li><a href="#!/articles/about">За нас</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/categories">Какво предлагаме</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/articles/docs">Документи</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/articles/clients">Клиенти</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#!/articles/contacts">Контакти</a><i class="fa fa-angle-right"></i></li>
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
        </footer>
        <!--=== End Footer Version 1 ===-->
    </div><!--/wrapper-->

    <!-- JS Global Compulsory -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-loading-bar/0.9.0/loading-bar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        function setMinHeightMainElement() {
            var headerOffsetHeight = document.querySelector('header').offsetHeight,
                footerOffsetHeight = document.querySelector('footer').offsetHeight,
                windowOuterHeight = window.outerHeight,
                mainOuterHeight = (windowOuterHeight - headerOffsetHeight - footerOffsetHeight) + 4;
                
            document.querySelector('main').style.minHeight = mainOuterHeight + 'px';
        }

        setMinHeightMainElement();
    </script>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(".nav a").on("click", function(){
           $(".nav").find(".active").removeClass("active");
           $(this).parent().addClass("active");
        });
    </script>
    <!-- JS Implementing Plugins -->
    <script src="assets/plugins/back-to-top.js"></script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->

</body>
</html>
