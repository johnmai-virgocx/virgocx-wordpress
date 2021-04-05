<?php
/**
 * Template Name: Sell EOS page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
	'name' => 'EOS',
	'ticker' => 'EOS',
];
get_template_part('template-parts/sell', 'coin', $args);
?>

