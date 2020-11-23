<?php
    //ajouter une nouvelle zone de menu à mon thème
    function register_my_menu() {
        register_nav_menus(
            array(
            'header-menu',__( 'Menu De Tete' ),
            'footer-menu'  => __( 'Menu De Pied'),
            )
        );
    }
    add_action( 'init', 'register_my_menu' );
    /**
     * Enqueues stylesheet and scripts.
     */
    /* ------------ Appel du JS et Style ------------ */
    add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );
    function custom_enqueue_scripts(){
        // chargement du script
        wp_enqueue_script(
            'jsportfolio', 
            get_template_directory_uri() . '/js/portfolio.js', 
            array( 'jquery' ), 
            '1.0', 
            true
        );     
        // chargement des CSS
        wp_enqueue_style( 
            'stylePortfolio', 
            get_template_directory_uri() . '/css/normalize.css',
            array(), 
            '1.0'
        );
        wp_enqueue_style( 
            'stylePortfolio', 
            get_template_directory_uri() . '/css/responsive.css',
            array(), 
            '1.0'
        );
    }