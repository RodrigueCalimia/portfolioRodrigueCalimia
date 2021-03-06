<!DOCTYPE html>
<html>
    <head <?php language_attributes(); ?>>
        <meta 
            name="viewport" content="width=device-width, initial-scale=1.0"
            charset="<?php bloginfo('charset'); ?>"
        >
        <title><?php the_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrap"> 
            <header>
                <div class="container">
                    <div class="logo">
                        <h1><a><?php bloginfo('name'); ?></a></h1>
                        <h2><?php bloginfo('description'); ?></h2>
                    </div>
                    <div class="nav-toggle">
                        <div class="nav-toggle-bar"></div>
                    </div>
                    <nav class="nav-menu">
                        <?php wp_nav_menu ( array (
                            'theme_location' => 'header-menu'
                            ) );
                        ?>
                        <!--
                        <li><a href="https://rodrigue-calimia.fr#portrait">Accueil</a></li>
                        <li><a href="https://rodrigue-calimia.fr#projets">Projets</a></li>
                        <li><a href="https://rodrigue-calimia.fr#a-propos">À Propos</a></li>
                        <li><a href="https://rodrigue-calimia.fr#contactez">Contact</a></li>
                        -->
                    </nav>
                </div>
            </header>