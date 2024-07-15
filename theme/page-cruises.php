<?php 
/* 
    Template Name: Cruises handling
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );
$cat = get_post_meta( get_the_ID(), 'cat', true );


?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class="py-10 lg:py-8">
    <div class="max-w-screen-xl mx-auto px-4 lg:px-10">
        <div class="text-lg font-body">
            <?php the_content(); ?>
        </div>

        <div class="container py-10">
            <div class="swiper single-Swiper">
                <div class="swiper-wrapper">
                    
                <?php 
                $banner_img = get_post_meta( get_the_ID(), 'cr_gallery', 1 );
                                        
                    foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                        $main_Img = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center ',
                        ) );
                                        
                ?>

                    <div class="swiper-slide"><?php echo $main_Img; ?></div>

                    <?php } ?>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <div class="lg:pb-10 pb-6 text-left">

            <?php 
                    $reasons = get_post_meta( get_the_ID(), 'cruise_group', true );

                    foreach ( (array) $reasons as $key => $entry ) {

                        $desc = $title = '';
                    
                        if ( isset( $entry['c_title_1'] ) ) {
                            $title = esc_html( $entry['c_title_1'] );
                        }
                        if ( isset( $entry['c_description_1'] ) ) {
                            $desc = esc_html( $entry['c_description_1'] );
                        }
            ?>

                <div class="lg:py-10 py-6">
                    <h3 class="page-headline lg:text-xl sm:text-2xl font-title font-bold text-left">
                        <?php echo $title; ?>
                    </h3>
                    <div class="text-left lg:text-sm text-base font-body"><?php echo $desc; ?></div>
                </div>

            <?php } ?>

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