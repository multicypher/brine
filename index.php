<?php
/**
 * Main template file
 *
 * @package Brine
 *
 */

get_header();
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

<?php
get_footer();

