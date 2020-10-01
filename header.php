<?php
/**
 * header.php
 *
 * Header file for theme
 *
 * @package brine
 */
?>
<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>