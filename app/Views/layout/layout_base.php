<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Posgrado - UPEA</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->

    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/stylesheets/bootstrap.css') ?>">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/stylesheets/shortcodes.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/stylesheets/style.css') ?>">


    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/stylesheets/responsive.css') ?>">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/stylesheets/colors/color1.css') ?>" id="colors">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/revolution/css/layers.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/revolution/css/settings.css') ?>">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme/stylesheets/animate.css') ?>">


    <!-- Favicon and touch icons  -->
    <link href="<?= base_url('theme/icon/apple-touch-icon-48-precomposed.png') ?>" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="<?= base_url('theme/icon/apple-touch-icon-57-precomposed.png') ?>" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="<?= base_url('theme/icon/favicon.png') ?>" rel="shortcut icon">


    <meta property="og:type" content="website">
    <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/es/img/apple-touch-icon@2.png?v=62634cce9d6c">
    <meta property="og:url" content="https://es.stackoverflow.com/questions/66388/poner-una-imagen-de-preview-y-titulo-en-mi-pagina-para-que-se-visualice-en-face">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>

<body class="header-sticky">

    <div class="boxed">
        <div class="windows8">
            <div class="preload-inner">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
        <!-- PONER HEADER -->

        <!-- PONER MENU -->
        <?= $menu ?>

        <!-- PONER CONTENIDO -->
        <div class="boxed">
            <div class="content">
                <?= $content ?>
            </div>

        </div> <!-- Footer -->


        <footer class="footer">
            <!-- PONER FOOTER -->
            <?= $footer ?>
        </footer>

        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

        <!-- Bottom -->
        <div class="bottom">
            <div class="container">
                <ul class="flat-socials-v1">
                    <li class="facebook">
                        <a href="https://www.facebook.com/estudiaenposgradoupea"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/posgradoupea"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="vimeo">
                        <a href="https://www.youtube.com/channel/UCk9-wr2u8t1Kc-5B3Cvp45Q"><i class="fa fa-youtube-play"></i></a>
                    </li>
                    <li class="rss">
                        <a href="https://www.instagram.com/upeaposgrado/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
                <div class="row">
                    <div class="container-bottom">
                        <div class="copyright">
                            <p> © 2021 <span><a href="#">Posgrado UPEA</a></span></p>
                        </div>
                    </div><!-- /.container-bottom -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div><!-- /. boxed -->


    <!-- Javascript -->

    <script type="text/javascript" src="<?= base_url('theme/javascript/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/jquery.easing.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/owl.carousel.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/jquery-waypoints.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/jquery-countTo.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/parallax.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/jquery.cookie.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/jquery-validate.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/javascript/main.js') ?>"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/slider.js') ?>"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>
    <?php $js = str_replace('\\', '/', FCPATH . 'assets/js/layout/' . strtolower(explode('\\', (\Config\Services::router())->controllerName())[3]) . '/' . (\Config\Services::router())->methodName() . '.js');
    if (is_file($js)) : ?>
        <script src="<?php echo base_url('assets/js/layout/' . strtolower(explode('\\', (\Config\Services::router())->controllerName())[3]) . '/' . (\Config\Services::router())->methodName() . '.js'); ?>"></script>
    <?php endif; ?>
</body>

</html>