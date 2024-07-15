<?php 
/* 
    Template Name: Contact Us
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );

?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class="py-10 lg:py-8">
    <div class="max-w-screen-xl mx-auto px-4 lg:px-10">
        <div class="text-base font-body">
            <?php the_content(); ?>
        </div>
    </div>

</article>

<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>