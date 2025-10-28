<?php

/**
 * Title: Counselling
 * Slug: pixel-pro-web/counselling
 * Categories: text, featured
 * Description: A two-column layout for counselling services featuring counselor profiles and contact information. The left column contains service descriptions, while the right column displays counselor listings and additional information in a card-style format.
 * Inserter: true
 */
?>

<!-- wp:group {"metadata":{"name":"Counselling","categories":[],"patternName":"core/block/742"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading -->
                <h2 class="wp-block-heading">Heading</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <span style="text-decoration: underline;"><a href="http://test-site.local/book-now/" data-type="page" data-id="700">book an appointment</a></span>.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading -->
                <h2 class="wp-block-heading">Heading</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <span style="text-decoration: underline;"><a href="http://test-site.local/book-now/" data-type="page" data-id="700">book an appointment</a></span>.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Counsellors</h3>
            <!-- /wp:heading -->

            <!-- wp:query {"queryId":13,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-medium-posts","name":"Image at left"},"layout":{"type":"default"}} -->
            <div class="wp-block-query"><!-- wp:group {"backgroundColor":"gray","layout":{"type":"default"}} -->
                <div class="wp-block-group has-gray-background-color has-background"><!-- wp:post-template -->
                    <!-- wp:columns {"align":"wide"} -->
                    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"full"} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"66.6%"} -->
                        <div class="wp-block-column" style="flex-basis:66.6%"><!-- wp:post-title {"level":4,"isLink":true} /-->

                            <!-- wp:post-excerpt {"excerptLength":10} /-->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    <!-- /wp:post-template -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"width":75,"className":"is-style-outline"} -->
                        <div class="wp-block-button has-custom-width wp-block-button__width-75 is-style-outline"><a class="wp-block-button__link wp-element-button">Match With The Counsellors</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:query -->

            <!-- wp:group {"metadata":{"name":"For More Information"},"layout":{"type":"default"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">For More Information</h3>
                <!-- /wp:heading -->

                <!-- wp:group {"backgroundColor":"gray","layout":{"type":"default"}} -->
                <div class="wp-block-group has-gray-background-color has-background"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"5%"} -->
                        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:5%"><!-- wp:html -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope"
                                viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z">
                                </path>
                            </svg>
                            <!-- /wp:html -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"95%"} -->
                        <div class="wp-block-column" style="flex-basis:95%"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Lorem ipsum dolor sit amet</h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Lorem ipsum dolor sit amet</h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Title</h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:image {"id":423,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="http://test-site.local/wp-content/uploads/2025/10/elementor-placeholder-image-1024x683.png" alt="" class="wp-image-423" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->