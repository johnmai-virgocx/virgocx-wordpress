<?php
/**
 * Template Name: Sell OCEAN page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Ocean Protocol',
	'ticker' => 'OCEAN',
];
get_template_part('template-parts/sell', 'coin', $args);
?>

