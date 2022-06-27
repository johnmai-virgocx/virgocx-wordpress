<?php
/**
 * Template Name: Buy BNT page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Bancor',
	'ticker' => 'BNT',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
