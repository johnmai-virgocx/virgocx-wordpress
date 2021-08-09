<?php
/**
 * Template Name: Sell fil page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Filecoin',
	'ticker' => 'FIL',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
