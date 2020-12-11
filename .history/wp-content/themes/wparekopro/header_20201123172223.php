<!doctype html>
<html lang="pl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">

        <!-- Custom Styles-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">

        <title><?php echo get_bloginfo('name'); ?></title>
        <link rel = "icon" type = "image/webp" href = "<?php echo get_bloginfo('template_directory'); ?>/images/logo-min.webp">

        <?php wp_head(); ?>
    </head>
    <body>
<!-- nav-->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="navibar">
            <a class="navbar-brand" href="http://localhost:8888"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.webp" height="45" width="77" class="d-inline-block"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    <?php
                        wp_nav_menu( array(
                        'theme_location'    => 'primary-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse text-center',
                        'container_id'      => 'navbarNavAltMarkup',
                        'menu_class'        => 'navbar-nav mr-auto',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                     );
                ?>


            <!--<?php wp_nav_menu(['theme_location' => 'primary_menu', 'fallback_cb' => 'false']); ?>-->
        </nav>
<!-- end nav-->

<!--Section1-->
        <section id="sec1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center"> <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.webp" height="280" width="476" class="img-fluid"></div>
                </div>
            </div>
        </section>
        <!-- end sec1 -->