<?php
/**
 * Theme Functions for the Pixel Pro Web Block Theme
 *
 * This file contains all global theme setup and custom functionality. 
 * Think of this area acting like a wordpress plugin that will extend the functionality of the website :)
 */

// -- 1. THEME SUPPORTS
add_action('after_setup_theme', function () {

    // Enable featured images on posts and pages.
    add_theme_support('post-thumbnails');

    // Match editor styles to front-end style.css.
    add_theme_support('editor-styles');
    add_editor_style('style.css');

    // Enable responsive embeds and modern HTML5 markup.
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('custom-units'); // Allows px, em, rem, etc.
});


// -- 2. REGISTER BLOCK PATTERN CATEGORIES
add_action('init', function () {

    // Register a "Hero" pattern category for hero-type sections.
    register_block_pattern_category(
        'hero',
        ['label' => __('Hero Sections', 'pixel-pro-web')]
    );

    // Register a "Layout" pattern category for general layout sections.
    register_block_pattern_category(
        'layout',
        ['label' => __('Layout Sections', 'pixel-pro-web')]
    );

    // Register a "Content" pattern category for text/image-based sections.
    register_block_pattern_category(
        'content',
        ['label' => __('Content Sections', 'pixel-pro-web')]
    );
});


// -- 3. ENQUEUE FRONT-END STYLES AND SCRIPTS
add_action('wp_enqueue_scripts', function () {

    // Load the main theme stylesheet (style.css).
    wp_enqueue_style('pixel-pro-web-style', get_stylesheet_uri());

    // Example for custom CSS if needed later:
    wp_enqueue_style('pixel-pro-web-custom-ninjaform', get_template_directory_uri() . '/custom-ninjaform.css', [], null);

    // Example for custom JS if needed later:
    // wp_enqueue_script('pixel-pro-web-script', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
});


// -- 4. REGISTER CUSTOM BLOCK STYLES (OPTIONAL ENHANCEMENTS)
add_action('init', function () {

    // Example: Rounded image style option.
    register_block_style('core/image', [
        'name'  => 'rounded-image',
        'label' => __('Rounded Corners', 'pixel-pro-web'),
    ]);
});


// -- 5. REGISTER NAVIGATION MENUS (OPTIONAL)
// add_action('after_setup_theme', function () {
//     // Defines locations for named menus (used by navigation block if desired).
//     register_nav_menus([
//         'primary-menu' => __('Primary Menu', 'pixel-pro-web'),
//         'footer-menu'  => __('Footer Menu', 'pixel-pro-web'),
//     ]);
// });


// -- 6. ADD CUSTOM IMAGE SIZES (OPTIONAL)
add_action('after_setup_theme', function () {
    // Useful if you want consistent image cropping for blocks or cards.
    add_image_size('card-thumb', 455, 197, true); // 455x197 cropped.
    add_image_size('bio-thumb', 212, 204, true); // 212x204 cropped.
    // add_image_size('hero-bg', 1920, 800, true);   // Hero background image.
});


// -- 7. ACF BLOCK INTEGRATION (READY FOR FUTURE USE)
add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {

        // Example: Custom Hero Block.
        acf_register_block_type([
            'name'              => 'hero-section',
            'title'             => __('Hero Section', 'pixel-pro-web'),
            'description'       => __('A custom hero block for page headers.'),
            'render_template'   => 'blocks/hero/hero.php',
            'category'          => 'layout',
            'icon'              => 'cover-image',
            'keywords'          => ['hero', 'banner', 'header'],
            'enqueue_style'     => get_template_directory_uri() . '/blocks/hero/hero.css',
            'supports'          => ['align' => ['full', 'wide']],
        ]);
    }
});
