<?php
/**
 * Template Name: Buy DOGE page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$args = [
    'name' => 'Dogecoin',
    'ticker' => 'DOGE',
];
get_template_part('template-parts/buy', 'coin', $args);
?>
