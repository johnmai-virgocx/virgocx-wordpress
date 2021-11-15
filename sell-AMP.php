<?php
/**
 * Template Name: Sell AMP page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Amp',
	'ticker' => 'AMP',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
