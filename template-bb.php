<?php /*Template Name: Beaverbuilder Template */?>

<?php get_header(); ?>

<div id="main-content" class="the-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
</div>

<?php get_footer(); ?>




