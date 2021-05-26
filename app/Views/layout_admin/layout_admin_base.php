<!DOCTYPE html>
<html lang="en">

<head>
    <meta c harset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('theme_admin/assets/images/favicon.png')?>">
    <title>Posgrado Template - 2021</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('theme_admin/assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?= base_url('theme_admin/assets/plugins/morrisjs/morris.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('theme_admin/horizontal/css/style.css')?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url('theme_admin/horizontal/css/colors/posgrado.css')?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

 <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('theme_admin/assets/plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('theme_admin/assets/plugins/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?= base_url('theme_admin/assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('theme_admin/horizontal/js/jquery.slimscroll.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('theme_admin/horizontal/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('theme_admin/horizontal/js/sidebarmenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?= base_url('theme_admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('theme_admin/horizontal/js/custom.min.js')?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="<?= base_url('theme_admin/assets/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
    <!--morris JavaScript -->
    <script src="<?= base_url('theme_admin/assets/plugins/raphael/raphael-min.js')?>"></script>
    <script src="<?= base_url('theme_admin/assets/plugins/morrisjs/morris.min.js')?>"></script>
    <!-- Chart JS -->
    <script src="<?= base_url('theme_admin/horizontal/js/dashboard1.js')?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url('theme_admin/assets/plugins/styleswitcher/jQuery.style.switcher.js')?>"></script>
    <script src="<?= base_url('assets/js/psg_oferta.js')?>"></script>

    
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
      <!-- PONER HEADER -->
       
        <?= $header ?>

      

    

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
     <!-- PONER MENU -->
     

         <?= $menu ?>
       

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
         
            <?= $content ?>
            <!-- PONER CONTENIDO -->
          
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
          <!-- PONER INDEX -->


          
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- PONER FOOTER -->
   
            <?= $footer ?>

         

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
   

</body>

</html>