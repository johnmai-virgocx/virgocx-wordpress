<?php
/**
 * Template Name: Buy Filecoin page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Filecoin',
	'ticker' => 'FIL',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
