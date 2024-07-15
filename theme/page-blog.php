<?php 
/* 
    Template Name: Blog
*/ ?>

<?php get_header(); ?>
<main class="py-20 lg:py-36">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto  gap-6 sm:gap-10 sm:gap-y-2 mb-24">
        <h1 class="page-headline text-center  text-5xl sm:text-7xl font-title font-extralight text-paradise-pink-500  mb-16 lg:mb-4 "><?php the_title(); ?></h1>
    </div>


    <?php get_template_part('partials/section-hero', 'articles'); ?>

    <nav id="artciles" class="container px-4 sm:px-10 max-w-screen-xl mx-auto my-8   mt-0 pt-8">
        <div class="space-x-4">
            <a class="active cat-btn" id="all">All</a>

            <?php 
    $categories = get_categories( [
      'taxonomy'     => 'category',
      'type'         => 'post',
      'child_of'     => 0,
      'parent'       => '',
      'orderby'      => 'name',
      'order'        => 'ASC',
      'hide_empty'   => 1,
      'hierarchical' => 1,
      'exclude'      => '',
      'include'      => '',
      'number'       => 0,
      'pad_counts'   => false,
    ] );

    if( $categories ) {
      foreach( $categories as $cat ) {

    ?>
            <a href="<?php echo get_category_link($cat->term_id); ?>/#articles" class="cat-btn ">
                <?php echo $cat->name; ?>
            </a>
            <?php
      }
    }
  ?>
        </div>
    </nav>
    <?php 
        $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => '16',
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Add this line for pagination
        );

        $the_query = new WP_Query( $query_args ); ?>
    <section class="page-listings container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-12">




        <?php 
        if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('partials/card', 'article'); 
        }
        /* Restore original Post Data */
        wp_reset_postdata(); ?>
        <?php } else {
        // no posts found
        } ?>

    </section>

    <!-- Pagination Markup -->
    <div class="pagination-container mt-10">
        <nav aria-label="Page navigation example">
        <?php
        echo paginate_links(array(
            'prev_text' => __('« Previous', 'textdomain'),
            'next_text' => __('Next »', 'textdomain'),
            'type' => 'list',
            'current' => max(1, get_query_var('paged')),
            'total' => $the_query->max_num_pages
        ));
        ?>
        </nav>
    </div>


</main>

<?php get_footer(); ?>