<?php
/**
 * Title: Hero with button
 * Slug: pixel-pro-web/hero-with-button
 * Categories: hero, featured
 * Block Types: core/group
 * Inserter: true
 */
?>

<!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light"><span aria-hidden="true"
        class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:heading -->
        <h2 class="wp-block-heading">Heading</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"body","fontFamily":"nunito"} -->
        <p class="has-text-align-left has-nunito-font-family has-body-font-size">Lorem ipsum dolor sit amet
            consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi
            pretium tellus duis convallis.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Insert Link Title</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->