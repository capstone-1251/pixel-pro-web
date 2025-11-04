<?php

/**
 *  This is where our theme functions go!
 *  Think of this area acting like a wordpress plugin that will extend the functionality of the website
 */

// This function will register block pattern catagories that we define, the first one is for the Hero Section, which will recognize patterns under 'hero'

add_action('init', function () {

    // ✅ Register a "Hero" category for hero sections
    register_block_pattern_category(
        'hero',
        ['label' => __('Hero Sections', 'my-theme')]
    );
});
