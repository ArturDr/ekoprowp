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
$oferta1 = get_field('oferta1');
$oferta2 = get_field('oferta2');
$oferta3 = get_field('oferta3');
$oferta4 = get_field('oferta4');
$o4pp1 = get_field('o4pp1');
$o4pp2 = get_field('o4pp2');
$o4pp3 = get_field('o4pp3');
$o4pp4 = get_field('o4pp4');
$o4pp5 = get_field('o4pp5');
$oferta5 = get_field('oferta5');
$o5pp1 = get_field('o5pp1');
$o5pp1 = get_field('o5pp2');
$o5pp1 = get_field('o5pp3');
$o5pp1 = get_field('o5pp4');
$o5pp1 = get_field('o5pp5');
$o5pp1 = get_field('o5pp6');
$o5pp1 = get_field('o5pp7');
$oferta6 = get_field('oferta6');
$oferta7 = get_field('oferta7');
$oferta8 = get_field('oferta8');
$oferta9 = get_field('oferta9');
$nie_wyczer = get_field('nie_wyczer');
$info_cen = get_field('info_cen');

get_header();
?>

<section id="sec2">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-12">
				<h1><?php echo $tytul_strony ?></h1>
				<p><?php echo $tresc ?></p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>