<?php
/**
 * Template Name: Buy FTM page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Fantom',
	'ticker' => 'FTM',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
