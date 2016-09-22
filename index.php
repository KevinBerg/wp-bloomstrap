<?php
/**
 * The main template file. It is required in all themes.
 * @author Kevin Berg <mail@kevinberg.de>
 */

get_header();

?>

<div id="wrapper">
    <div id="main">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
        
                <h2>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
        
                <div class="entry">
                    <?php the_content(); ?>
                </div>
        
            <?php endwhile; ?>
        <?php endif; ?>

    </div><!-- main -->

    <div id="sidebar"></div><!-- sidebar --> 

    <div id="footer"></div><!-- footer -->

</div><!-- wrapper -->

</body>
</html>

<div id="sidebar-primary" class="sidebar">
    <?php if (is_active_sidebar('primary')) : ?>
        <?php dynamic_sidebar('primary'); ?>
    <?php else : ?>
        <!-- alternative sidebar replacement -->
    <?php endif; ?>
</div>
