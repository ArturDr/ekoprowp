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
 * Template Name: Ubezpieczenia
 *
 */

 // Advanced Custom Fields
$tytul_strony = get_field('tytul_strony');
$tresc = get_field('tresc');
$tytul_1 = get_field('tytul_1');
$tresc1 = get_field('tresc1');
$oferta_zdanie = get_field('oferta_zdanie');
$o1pp1 = get_field('o1pp1');
$o1pp2 = get_field('o1pp2');
$o1pp3 = get_field('o1pp3');
$o1pp4 = get_field('o1pp4');
$o1pp5 = get_field('o1pp5');
$o1pp6 = get_field('o1pp6');
$tytul_2 = get_field('tytul_2');
$tresc2 = get_field('tresc2');
$o2pp1 = get_field('o2pp1');
$o2pp2 = get_field('o2pp2');
$o2pp3 = get_field('o2pp3');
$o2pp4 = get_field('o2pp4');
$o2pp5 = get_field('o2pp5');
$o2pp6 = get_field('o2pp6');
$kontakt = get_field('kontakt');
$imie_nazwisko = get_field('imie_nazwisko');
$adres = get_field('adres');
$mail = get_field('mail');
$tel = get_field('tel');
$nip = get_field('nip');
$regon = get_field('regon');


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
    <div class="container">
		<div class="row">
			<div class="col-md-10 col-12">
				<h1><?php echo $tytul_1 ?></h1>
                <p><?php echo $tresc1 ?></p>
			</div>
        </div>
        <div class="row">
			<div class="col-md-10 col-12">
                <h3><?php echo $oferta_zdanie ?></h3>
                <ul>
                    <li><?php echo $o1pp1 ?></li>
                    <li><?php echo $o1pp2 ?></li>
                    <li><?php echo $o1pp3 ?></li>
                    <li><?php echo $o1pp4 ?></li>
                    <li><?php echo $o1pp5 ?></li>
                </ul>
			</div>
        </div>
    </div>
    <div class="container">
		<div class="row">
			<div class="col-md-10 col-12">
				<h1><?php echo $tytul_2 ?></h1>
                <p><?php echo $tresc2 ?></p>
                <ul>
                    <li><?php echo $o2pp1 ?></li>
                    <li><?php echo $o2pp2 ?></li>
                    <li><?php echo $o2pp3 ?></li>
                    <li><?php echo $o2pp4 ?></li>
                    <li><?php echo $o2pp5 ?></li>
                </ul>
			</div>
        </div>
    </div>
</section>
<section id="sec2_ubez">
	<div class="container">
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<h3><?php echo $kontakt ?></h3>
                <p><?php echo $imie_nazwisko ?></p>
                <p><?php echo $adres ?></p>
                <p><a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></p>
                <p><a href="tel:<?php echo $tel ?>"><?php echo $tel ?></a></p>
                <p><?php echo $nip ?></p>
                <p><?php echo $regon ?></p>
			</div>
        </div>
    </div>
</section>

<?php
get_footer();
?>