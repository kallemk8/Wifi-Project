<!DOCTYPE html>
<!--[if IE 9]> 
<html lang="en" class="ie9"><![endif]-->
<!--[if !IE]><!-->
<html lang="en-us">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Stilus - Bootstrap Multipurpose Template">
    <meta name="keywords" content="onepage, personal, portfolio, html5, template, responsive, creative, business, corporate, landing">
    <meta name="author" content="kallem">
    <title>Wifi Website </title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>

<div id="before-load">
    <i class="fa fa-spinner fa-spin"></i>
</div>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <?php if(get_field('logo','options')=='Text'): ?>
                <div class="text-secondary text-secondary p-3 h5"><?php echo get_field('logo_text','options'); ?></div>
                <?php endif; ?>
                <?php if(get_field('logo','options')=='Image'): ?>
                <img src="<?php echo get_field('logo_image','options'); ?>">
                <?php endif; ?>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars fa-2x"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#works">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#pricing">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#support">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=== Menu end ===-->


    <!--=== Header start ===-->
    <header class="masthead" style="background-image: url('<?php echo get_field('banner_image'); ?>');">
        <h1 class="text-secondary title-large" data-aos="fade-left" data-aos-duration="1600"><?php echo get_field('banner_title'); ?></h1>
        <h5 class="text-white title-small header-spacing text-center" data-aos="fade-right" data-aos-duration="1600">
           <?php echo get_field('banner_sub_title'); ?></h5>
        <div class="pt-5">
            <a class="btn btn-outline-secondary btn-one js-scroll-trigger" href="<?php echo get_field('banner_link'); ?>" data-aos="fade-up" data-aos-duration="1800"><?php echo get_field('banner_button_text'); ?></a>
        </div>
    </header>
    <!--=== Header end ===-->
