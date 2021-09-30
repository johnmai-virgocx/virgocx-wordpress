<?php
/**
 * Template Name: Sell MKR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Maker',
	'ticker' => 'MKR',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
