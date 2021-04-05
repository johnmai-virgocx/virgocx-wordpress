<?php
/**
 * Template Name: Buy DAI page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
    'name' => 'Dai',
    'ticker' => 'DAI',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
