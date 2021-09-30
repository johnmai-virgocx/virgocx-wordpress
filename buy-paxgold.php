<?php
/**
 * Template Name: Buy Paxgold page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'PAX_Gold',
	'ticker' => 'Paxgold',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
