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
 * Template Name: BHP
 *
 */

 // Advanced Custom Fields
$tytul_strony = get_field('tytul_strony');
$tresc = get_field('tresc');
$oferta_zdanie = get_field('oferta_zdanie');
$tyt_oferta1 = get_field('tyt_oferta1');
$oferta1 = get_field('oferta1');
$tyt_oferta2 = get_field('tyt_oferta2');
$oferta2 = get_field('oferta2');
$tyt_oferta3 = get_field('tyt_oferta3');
$oferta3 = get_field('oferta3');
$tyt_oferta4 = get_field('tyt_oferta4');
$oferta4 = get_field('oferta4');
$o4pp1 = get_field('o4pp1');
$o4pp2 = get_field('o4pp2');
$o4pp3 = get_field('o4pp3');
$o4pp4 = get_field('o4pp4');
$o4pp5 = get_field('o4pp5');
$tyt_oferta5 = get_field('tyt_oferta5');
$oferta5 = get_field('oferta5');
$o5pp1 = get_field('o5pp1');
$o5pp2 = get_field('o5pp2');
$o5pp3 = get_field('o5pp3');
$o5pp4 = get_field('o5pp4');
$o5pp5 = get_field('o5pp5');
$o5pp6 = get_field('o5pp6');
$o5pp7 = get_field('o5pp7');
$tyt_oferta6 = get_field('tyt_oferta6');
$oferta6 = get_field('oferta6');
$tyt_oferta7 = get_field('tyt_oferta7');
$oferta7 = get_field('oferta7');
$tyt_oferta8 = get_field('tyt_oferta8');
$oferta8 = get_field('oferta8');
$tyt_oferta9 = get_field('tyt_oferta9');
$oferta9 = get_field('oferta9');
$nie_wyczer = get_field('nie_wyczer');
$info_cen = get_field('info_cen');

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
        <div class="row">
			<div class="col-md-10 col-12">
                <h3><?php echo $oferta_zdanie ?></h3>
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
                <ul>
                    <li><?php echo $o4pp1 ?></li>
                    <li><?php echo $o4pp2 ?></li>
                    <li><?php echo $o4pp3 ?></li>
                    <li><?php echo $o4pp4 ?></li>
                    <li><?php echo $o4pp5 ?></li>
                </ul>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta5 ?></h3>
                <p><?php echo $oferta5 ?></p>
                <ul>
                    <li><?php echo $o5pp1 ?></li>
                    <li><?php echo $o5pp2 ?></li>
                    <li><?php echo $o5pp3 ?></li>
                    <li><?php echo $o5pp4 ?></li>
                    <li><?php echo $o5pp5 ?></li>
                    <li><?php echo $o5pp6 ?></li>
                    <li><?php echo $o5pp7 ?></li>
                </ul>
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
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta8 ?></h3>
                <p><?php echo $oferta8 ?></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $tyt_oferta9 ?></h3>
                <p><?php echo $oferta9 ?></p>
			</div>
        </div>
    </div>
</section>
<section id="sec3_bhp">
    <div class="container">
        <div class="row">
			<div class="col-12">
				<p><?php echo $nie_wyczer ?></p>
                <p><?php echo $info_cen ?></p>
			</div>
        </div>
	</div>
</section>

<?php
get_footer();
?>