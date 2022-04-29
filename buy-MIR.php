<?php
/**
 * Template Name: Buy MIR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Mirror Protocol',
	'ticker' => 'MIR',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
