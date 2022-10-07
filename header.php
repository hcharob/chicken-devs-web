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
        <section class="site__header__titre">
            <?php the_custom_logo(); ?>
            <h1 class="header__titre">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
                    <?php bloginfo('name'); ?></h1>
                </a>
            <h2 class="header__description"></h2>
        </section>

    </header>
