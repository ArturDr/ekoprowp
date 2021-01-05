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
 * Template Name: Kwalifikacje
 *
 */

 // Advanced Custom Fields
$tytul_strony = get_field('tytul_strony');
$imie_nazwisko = get_field('imie_nazwisko');
$tresc = get_field('tresc');

get_header();
?>

<section id="sec1_bhp">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-12">
				<h1><?php echo $tytul_strony ?></h1>
				<h3><?php echo $imie_nazwisko ?></h3>
                <p><?php echo $tresc ?></p>
			</div>
        </div>
    </div>
</section>
<section id="sec2_bhp">
	<div class="container">
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
                <p>Studia pierwszego stopnia (inżynierskie) ukończył na Wydziale Nauk Technicznych Wyższej Szkoły Zarządzania
				Ochroną Pracy w Katowicach na kierunku: <strong>Zarządzanie i Inżynieria Produkcji</strong> i specjalności:
				<span class="specjal">bezpieczeństwo i higiena pracy</span> w lipcu 2011 roku spełniając tym samym wymagania kwalifikacyjne określone w
				<strong>Rozporządzeniu Rady Ministrów w sprawie służby bezpieczeństwa i higieny pracy z dnia 2 listopada 2004 r.</strong>
				(Dz. U. Nr 246, poz. 2468 z dnia 18 listopada 2004).</p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
                <p>W 2012 roku rozpoczął studia drugiego stopnia (magisterskie) w tej samej uczelni na kierunku:
				<strong>Zarządzanie i Inżynieria Produkcji</strong> i specjalności:
				<span class="specjal">zarządzanie środowiskiem i gospodarka odpadami.</span> Studia magisterskie ukończył w marcu 2014 roku.</p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
				<p>W roku 2014 ukończył szkolenie <strong>„Budynki Pasywne”</strong> oraz
				<strong>„Finansowanie rozwiązań proekologicznych w budownictwie”</strong> organizowane przez NS Konsulting
				Sp. z o. o. finansowane przez Unię Europejską, (Europejski Fundusz Społeczny).</p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
                <p>W 2017 roku Ukończył podyplomowe studia w zakresie <strong>
				Prawo Pracy i Ubezpieczeń Społecznych</strong> w Wyższej Szkole Zarządzania Ochroną Pracy w Katowicach.</p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
                <p>Ponadto posiada dodatkowe kwalifikacje: <strong>Inspektora Ochrony Przeciwpożarowej,
				Pełnomocnika i Audytora Wewnętrznego  Systemu Zarządzania Bezpieczeństwem i Higieną Pracy wg PN-N 18001:2004
				oraz OHSAS 18001:2007 Systemy zarządzania bezpieczeństwem i higieną pracy.</strong></p>
			</div>
        </div>
        <div class="row justify-content-center">
			<div class="col-md-10 col-12">
                <p>W marcu 2015 roku uzyskał kwalifikacje: <strong>Audytora zintegrowanego systemu zarządzania
				ISO 9001 Systemy zarządzania jakością, ISO 14001 Systemy zarządzania środowiskowego, PN-N/OHSAS 18001,
				Systemy zarządzania bezpieczeństwem i higieną pracy.</strong></p>
			</div>
        </div>
    </div>
</section>

<?php
get_footer();
?>