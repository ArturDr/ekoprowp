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
        <link rel = "icon" type = "image/png" href = "<?php echo get_bloginfo('template_directory'); ?>/images/logo.png">

        <?php wp_head(); ?>
    </head>
    <body>
<!-- nav-->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="navibar">
            <a class="navbar-brand" href="http://zebrzydowickatax.pl"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" height="35" width="35" class="d-inline-block"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php
                        wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => '',
                        'container_id'      => '',
                        'menu_class'        => 'navbar-nav mr-auto',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                     );
                ?>
                </div>
            </div>

            <!--<?php wp_nav_menu(['theme_location' => 'primary_menu', 'fallback_cb' => 'false']); ?>-->
        </nav>
<!-- end nav-->

<!--Section1-->
        <section id="sec1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center"> <img src="<?php echo get_bloginfo('template_directory'); ?>/images/zebrzydowickaTAX2.png" height="105" width="876" class="img-fluid"></div>
                </div>
            </div>
        </section>
        <!-- end sec1 -->