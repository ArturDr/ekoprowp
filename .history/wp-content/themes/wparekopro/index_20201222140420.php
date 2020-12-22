<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ekoprojekt
 */

get_header(); ?>
<section class="content">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-10 col-12 text-left">
                <?php get_template_part('content'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
