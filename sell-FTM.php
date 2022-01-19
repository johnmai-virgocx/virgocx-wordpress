<?php
/**
 * Template Name: Sell FTM page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Fantom',
	'ticker' => 'FTM',
];
get_template_part('template-parts/sell', 'coin', $args);
?>

