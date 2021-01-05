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
 * Template Name: Oferta
 *
 */

 // Advanced Custom Fields
$tytul_strony = get_field('tytul_strony');
$tresc = get_field('tresc');
$tyt_oferta1 = get_field('tyt_oferta1');
$oferta1 = get_field('oferta1');
$tyt_oferta2 = get_field('tyt_oferta2');
$oferta2 = get_field('oferta2');
$tyt_oferta3 = get_field('tyt_oferta3');
$oferta3 = get_field('oferta3');
$tyt_oferta4 = get_field('tyt_oferta4');
$oferta4 = get_field('oferta4');
$tyt_oferta5 = get_field('tyt_oferta5');
$oferta5 = get_field('oferta5');
$tyt_oferta6 = get_field('tyt_oferta6');
$oferta6 = get_field('oferta6');
$tyt_oferta7 = get_field('tyt_oferta7');
$oferta7 = get_field('oferta7');
$nie_wyczer = get_field('zapro');

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
<section id="sec2_bhp">
	<div class="container">
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta1 ?></h3>
                <p><?php echo $oferta1 ?></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta2 ?></h3>
                <p><?php echo $oferta2 ?></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta3 ?></h3>
                <p><?php echo $oferta3 ?></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta4 ?></h3>
                <p><?php echo $oferta4 ?></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta5 ?></h3>
                <p><?php echo $oferta5 ?></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta6 ?></h3>
                <p><?php echo $oferta6 ?></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta7 ?></h3>
                <p><?php echo $oferta7 ?></p>
			</div>
        </div>
    </div>
</section>
<section id="sec3_ofer">
    <div class="container">
        <div class="row">
			<div class="col-12">
				<p><?php echo $zapro ?></p>
			</div>
        </div>
	</div>
</section>

<?php
get_footer();
?>