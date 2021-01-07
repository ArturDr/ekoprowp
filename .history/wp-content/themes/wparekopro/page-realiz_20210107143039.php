<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ekoprojekt
 * Template Name: Realizacje
 *
 */

 // Advanced Custom Fields
$tytul_strony = get_field('tytul_strony');
$tresc = get_field('tresc');


get_header();
?>

<section id="sec1_bhp">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-12">
				<h1><?php echo $tytul_strony ?></h1>
                <p><?php echo $tresc ?></p>
			</div>
        </div>
    </div>
</section>
<section id="sec2_realiz">
	<div class="container">
        <div class="row justify-content-evenly">
			<div class="col-md-5 col-12">
                <iframe width="320" height="300" src="https://www.youtube.com/embed/vBFB0O7bZpI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-5 col-12">
                <iframe width="320" height="300" src="https://www.youtube.com/embed/vD4cHwWhHYY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>