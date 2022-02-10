<?php
/**
 * Template Name: Buy LPT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Livepeer',
	'ticker' => 'LPT',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
