<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                padding-top: 20px;
            }
        </style>
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>resources/bootstrap/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header id="header">      
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <h1><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" style="width: 210px; "></h1>
                </a>

            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>

                    <li class="dropdown">
                        <?php echo anchor('blog/learning', 'Artikel'); ?>
                    </li>  

                    <li class="dropdown"><a href="forum.html">Forum <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="#">Coming Soon</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="gallery.html">Gallery <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="#">Coming Soon</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="download.html">Download <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="#">Coming Soon</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="tentang.html">Tentang Kami</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('digidu/profile'); ?> "><i class="fa fa-user"></i>&nbsp;&nbsp;Akun Saya </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</header>

