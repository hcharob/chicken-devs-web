<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>
    <?php show_admin_bar(true); ?>
</head>
<body  <?php body_class("site"); ?>>


    <header class="site__header">
        <section class="site__logo">
            <?php the_custom_logo(); ?>
        </section>
        <section class="site__nav">
            <?php get_template_part('composents/template','mainNav');?>
        </section>
    </header>