<?php 
/* 
    Template Name: Facilities
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );
$cat = get_post_meta( get_the_ID(), 'cat', true );

$args = array(
	'post_type'              => array( 'resort' ),
);


$args3 = array(
	'post_type' => 'resort',
	'tag' => $cat,
    'posts_per_page' => '6',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Add this line for pagination
);
$query = new WP_Query( $args3 );

?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class="py-10 lg:py-8">

    <?php 
        if ( $query->have_posts() ) { ?>

            <nav class="container px-4 sm:px-10 max-w-screen-xl mx-auto my-8 ">
                <div class="space-x-4">
                    
                    <?php
    //                     $args = array(
    //                                 'taxonomy' => 'resort_type',
    //                                 'orderby'      => 'term_order',
    //                                     'hide_empty'   => true,
    //                                 //'order'   => 'ASC'
    //                                 'category_name' => 'budget-hotels',
    //                             );

    //                         $resort = new WP_Query($args);
    // ?>

                </div>

            </nav>

    <main class="page-listings container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-12">



        <?php while ( $query->have_posts() ) {
            $query->the_post();
            // do something
            get_template_part('partials/card', 'resorts'); 
        } ?>


    </main>

    <!-- Pagination Markup -->
    <div class="pagination-container mt-10 container px-4 sm:px-10 max-w-none xl:max-w-screen-2xl mx-auto space-y-14 py-2 lg:py-14 flex item-center justify-center">
        <nav aria-label="Page navigation example">
            <?php
                echo paginate_links(array(
                    'prev_text' => __('« Previous', 'textdomain'),
                    'next_text' => __('Next »', 'textdomain'),
                    'type' => 'list',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $query->max_num_pages
                ));
            ?>
        </nav>
    </div>

    <?php } else {
	// no posts found
    echo 'not found';
}

// Restore original Post Data
wp_reset_postdata();

?>
</article>


<style>
.page-numbers{
    display: inline-flex;
    margin-left: 1px;
}
.page-numbers.prev{
    display:flex;
    align-items: center;
    justify-content: center;
    padding-left:0.75rem;
    padding-right:0.75rem;
    height:2rem;
    line-height: 1.25;
    border-width: 1px;
    border-inline-end-width: 0px;
    border-color: rgb(209 213 219);
    border-start-start-radius: 0.5rem;
    border-end-start-radius: 0.5rem;
}

.page-numbers.next{
    display:flex;
    align-items: center;
    justify-content: center;
    padding-left:0.75rem;
    padding-right:0.75rem;
    height:2rem;
    line-height: 1.25;
    border-width: 1px;
    border-inline-end-width: 0px;
    border-color: rgb(209 213 219);
    border-start-end-radius: 0.5rem;
    border-end-end-radius: 0.5rem;
}

.page-numbers.current{
    display:flex;
    align-items: center;
    justify-content: center;
    padding-left:0.75rem;
    padding-right:0.75rem;
    height:2rem;
    line-height: 1.25;
    border-width: 1px;
    border-color: rgb(3 7 18);
}

.page-numbers li a{
    display:flex;
    align-items: center;
    justify-content: center;
    padding-left:0.75rem;
    padding-right:0.75rem;
    height:2rem;
    line-height: 1.25;
    border-width: 1px;
    border-color: rgb(209 213 219);
}

</style>



<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>