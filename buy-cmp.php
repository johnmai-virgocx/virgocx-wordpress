<?php
/**
 * Template Name: Buy CMP page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Compound',
	'ticker' => 'CMP',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
