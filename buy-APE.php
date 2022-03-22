<?php
/**
 * Template Name: Buy APE page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'ApeCoin',
	'ticker' => 'APE',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
