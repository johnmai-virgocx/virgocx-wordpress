<?php
/**
 * Template Name: Sell LUNA page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Terra Classic',
	'ticker' => 'LUNA',
];
get_template_part('template-parts/sell', 'coin', $args);
?>

