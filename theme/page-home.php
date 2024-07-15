<?php 
/* 
    Template Name: Home Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/section', 'hero'); ?>
<?php get_template_part('partials/section', 'explore'); ?>
<?php get_template_part('partials/section', 'facilities'); ?>
<?php get_template_part('partials/section', 'activities'); ?>
<?php get_template_part('partials/section', 'featured'); ?>

<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>



<?php get_footer(); ?>