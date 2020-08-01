<?php

    /* Carga dinámicamente el title de la página, el logo y las imágenes */
    function register_titles() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails'); 
    }

    add_action('after_setup_theme', 'register_titles');

    /* Carga los menús tanto el header como el footer */
    function register_menus() {
        $locations = array(
            'primary' => 'Desktop Primary Left Sidebar',
            'footer' => 'Footer Menu Items'
        );
        register_nav_menus($locations);
    }

    add_action('init', 'register_menus');

    /* Carga los styles del sitio para que no esten hardcode, se envia el array de priority y su versión por el tema del cache */
    function register_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('customStyle', get_template_directory_uri()."/style.css", array('bootstrap'), $version, 'all');
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), $version, 'all');
        wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), $version, 'all');
        wp_enqueue_style('fontGoogle', 'https://fonts.googleapis.com/css2?family=Krona+One&family=Roboto:ital,wght@0,100;1,500&display=swap"', array(), $version, 'all');
    }

    add_action('wp_enqueue_scripts', 'register_styles');

    /* Carga los scripts teniendo en cuenta la prioridad de cada uno... */
    function register_scripts() {
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
        wp_enqueue_script('customJs', get_template_directory_uri()."/assets/js/main.js", array(), '1.0.0', true);
    }

    add_action('wp_enqueue_scripts', 'register_scripts');

    /* Carga las zonas donde el template va poder cargar widgets de terceros como propios (Redes Sociales) */
    function register_widgets_areas() {
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar widget area'
            ),
        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Footer Area',
                'id' => 'footer-1',
                'description' => 'Footer widget area'
            )
        );
    }

    add_action('widgets_init', 'register_widgets_areas');

?>