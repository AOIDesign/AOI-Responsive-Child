<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'aoi-responsive-main' for the AOI Responsive theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );function exclude_category( $query ) {if ( $query->is_home() && $query->is_main_query() ) {$query->set( 'cat', '' );}}add_action( 'pre_get_posts', 'exclude_category' );//Hide categories from WordPress category widgetfunction exclude_widget_categories($args){    $exclude = "";    $args["exclude"] = $exclude;    return $args;}add_filter("widget_categories_args","exclude_widget_categories");add_action('admin_menu', 'add_appearance_menu');
?>