<?php 
/* 
    Template Name: Services Page
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
<section class="lg:py-20 py-10">
    <div class="max-w-screen-xl mx-auto px-4 lg:px-10">
        <div class="lg:pb-10 pb-6 text-center">


            <?php 
                    $reasons = get_post_meta( get_the_ID(), 'services_group', true );

                    foreach ( (array) $reasons as $key => $entry ) {

                        $desc = $title = $img = $desc2 = '';
                    
                        if ( isset( $entry['s_title_1'] ) ) {
                            $title = esc_html( $entry['s_title_1'] );
                        }
                        if ( isset( $entry['s_description_1'] ) ) {
                            $desc = esc_html( $entry['s_description_1'] );
                        }
                        if ( isset( $entry['s_image_id'] ) ) {
                            $img = wp_get_attachment_image_url( $entry['s_image_id'], 'large', null, array(
                                'class' => 'w-full h-full object-cover object-center',
                            ) );
                        } 
                        if ( isset( $entry['s_description_3'] ) ) {
                            $desc2 = wpautop( $entry['s_description_3'] );
                        }
            ?>

            <div class="lg:py-10 py-6">
                <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight  mb-16 lg:mb-4 text-center">
                    <?php echo $title; ?>
                </h3>
                <div class="text-center lg:text-sm text-base font-body"><?php echo $desc; ?></div>
                <img src="<?php echo $img; ?>" class="w-full h-full object-cover object-center lg:py-10 py-6">
            </div>
            <?php if($desc2){ ?>
                <div class="text-left lg:text-sm text-base font-body"><?php echo $desc2; ?></div>
            <?php } ?>
            <?php } ?>

        </div>
    </div>

</section>


<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>