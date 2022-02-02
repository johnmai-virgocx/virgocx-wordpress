<?php
/**
 * Template Name: Buy ELON page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Dogelon Mars',
	'ticker' => 'ELON',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
