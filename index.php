<?php

/**
 * The main template file. It is required in all themes.
 * @author Kevin Berg <mail@kevinberg.de>
 */



get_header();
get_sidebar();
get_footer();
get_search_form();
get_template_part( 'test-part');

<div id="sidebar-primary" class="sidebar">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
        <!-- alternative sidebar replacement -->
    <?php endif; ?>
</div>
