<?php

/**
 *  This is where our theme functions go!
 */

// This function will register block pattern catagories that we define, the first one is for the Hero Section, which will recognize patterns under 'hero'

add_action('init', function () {

    // ✅ Register a "Hero" category for hero sections
    register_block_pattern_category(
        'hero',
        ['label' => __('Hero Sections', 'my-theme')]
    );
});
