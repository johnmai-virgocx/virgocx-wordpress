<?php
/**
 * Template Name: Sell MANA page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'Decentraland',
	'ticker' => 'MANA',
];
get_template_part('template-parts/sell', 'coin', $args);
?>
