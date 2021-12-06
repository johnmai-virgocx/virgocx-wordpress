<?php
/**
 * Template Name: Buy SHIB page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Shiba Inu',
	'ticker' => 'SHIB',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
