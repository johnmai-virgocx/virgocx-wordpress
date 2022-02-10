<?php
/**
 * Template Name: Buy ANKR page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Ankr',
	'ticker' => 'ANKR',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
