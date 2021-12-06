<?php
/**
 * Template Name: Buy AMP page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Amp',
	'ticker' => 'AMP',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
