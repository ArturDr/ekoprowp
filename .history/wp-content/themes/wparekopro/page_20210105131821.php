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
 * Template Name: Podstrona
 *
 */

 // Advanced Custom Fields
$tytul_strony = get_field('tytul_strony');
$tresc = get_field('tresc');
$zapro = get_field('zapro');

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
		<div class="row">
			<div class="col-md-10 col-12">
				<h2><strong><?php echo $zapro ?></strong></h2>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>