<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php if (isset($page_title)) echo strip_tags($page_title) . ' | '; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/assets/ico/favicon.png">
        <link href="<?php echo base_url(); ?>/assets/css/lavish-bootstrap.css" rel="stylesheet" media="screen">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/css/sticky-footer-navbar.css" rel="stylesheet">  
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url(); ?>/assets/css/styles.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="/assets/js/html5shiv.js"></script>
          <script src="/assets/js/respond.min.js"></script>
        <![endif]-->
        <?php if (isset($head_content)) echo $head_content; ?>
    </head>
    <body>

        <!-- Wrap all page content here -->
        <div id="wrap">

            <!-- Fixed navbar -->
            <div id="mast" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="h1"><a class="navbar-brand" href="<?php echo base_url(); ?>"> <?php if (isset($site_name)) echo $site_name; ?></a></span>
                    </div>

                    <div class="collapse navbar-collapse">
                        <?php if($this->auth->is_logged_in()) { ?>
                            <?php if ($this->session->userdata('level') == 1) { ?>  
                                    <ul class="nav navbar-nav"> <!--
                                      <li><a href="#contact">Contact</a></li>              
                                       
                                   

<li> <a href="<?php echo base_url()?>forum/user/cek_login/aaaaa/aaaaa">Forum</a></li>//--> 
                                </ul>
                                <ul class="nav navbar-nav pull-right">
                                    <li id="login-name"><a title="Last login: <?php echo "";?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?></a></li>
                                    <li><a href="<?php echo base_url('blog/home/logout'); ?>">Logout <i class="fa fa-sign-out"></i></a></li>
                                </ul>
                            <?php } } ?> 
                         
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- Begin page content -->
            <div id="main-container" class="container">
                <div class="page-header">
                    <h1><?php if(isset($page_title)) echo $page_title; ?></h1>
                </div> 
