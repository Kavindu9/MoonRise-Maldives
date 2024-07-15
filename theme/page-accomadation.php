<?php 
/* 
    Template Name: Accomadation
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );


$args = array(
	'post_type'              => array( 'resort' ),
);

$resorts = new WP_Query( $args );
?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class="py-10 lg:py-8">

    <?php 
        if ( $resorts->have_posts() ) { ?>

            <nav class="container px-4 sm:px-10 max-w-screen-xl mx-auto my-8 ">
                <div class="space-x-4">
                    <button class="active cat-btn" id="all">All</button>
                    
                    <?php
                        $args = array(
                                    'taxonomy' => 'resort_type',
                                    'orderby'      => 'term_order',
                                        'hide_empty'   => true,
                                    //'order'   => 'ASC'
                                );

                        $cats = get_categories($args);

                        foreach($cats as $cat) {
    ?>

                    <button class="cat-btn text-slate-950 hover:text-slate-500 text-base" id="resort_type-<?php echo $cat->slug; ?>"> <?php echo $cat->name; ?></button>

                        <?php } ?>

                </div>

            </nav>

    <main class="page-listings container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-10">



        <?php while ( $resorts->have_posts() ) {
            $resorts->the_post();
            // do something
            get_template_part('partials/card', 'resorts'); 
        } ?>


    </main>

    <?php } else {
	// no posts found
    echo 'not found';
}

// Restore original Post Data
wp_reset_postdata();

?>
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