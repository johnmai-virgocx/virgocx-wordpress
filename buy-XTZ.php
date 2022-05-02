<?php
/**
 * Template Name: Buy XTZ page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Tezos',
	'ticker' => 'XTZ',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
