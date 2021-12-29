<?php
/**
 * Template Name: Buy OMG page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'OMG Network',
	'ticker' => 'OMG',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
