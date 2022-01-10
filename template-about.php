<?php 
/*Template Name: About*/
?>

<?php get_header(); ?>
<?php $url = get_stylesheet_directory_uri(); ?>

<?php do_action('cover'); ?>

<div id="main-content" class="container-fluid w-75 ml-auto mr-auto mt-7">
    <!-- Title -->
    <div class="row">
        <div class="col text-center">
        <h3 class="sans-serif mb-5"><? get_the_title(); ?></h3>
        </div>
    </div>

    <div class="row">
        <!-- Sidbar --> 
        <div class="col-md-3">
            <?php get_template_part('templates/about','sidebar'); ?>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <?php get_template_part('templates/about','content'); ?>
        </div>
    </div>
</div><!-- #main-content -->

<?php get_footer(); ?>

