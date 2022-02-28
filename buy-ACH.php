<?php
/**
 * Template Name: Buy ACH page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Alchemy Pay',
	'ticker' => 'ACH',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
