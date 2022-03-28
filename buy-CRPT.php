<?php
/**
 * Template Name: Buy CRPT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Crypterium',
	'ticker' => 'CRPT',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
