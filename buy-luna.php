<?php
/**
 * Template Name: Buy LUNA page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Terra',
	'ticker' => 'LUNA',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
