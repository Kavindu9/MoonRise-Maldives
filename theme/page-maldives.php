<?php 
/* 
    Template Name: Maldives Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php 
$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );

$headline_1 = get_post_meta( get_the_ID(), 'm_title_1', true );
$headline_2 = get_post_meta( get_the_ID(), 'm_title_2', true );
$headline_3 = get_post_meta( get_the_ID(), 'm_title_3', true );

$climate_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'm_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[10/13] object-cover rounded-lg md:aspect-[4/5]" ) );
$flora_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'f_image_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[10/13] object-cover rounded-lg md:aspect-[9/24]" ) );

$f_headline_1 = get_post_meta( get_the_ID(), 'f_title_1', true );
$f_headline_2 = get_post_meta( get_the_ID(), 'f_title_2', true );
$f_headline_3 = get_post_meta( get_the_ID(), 'f_title_3', true );
?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<section class="lg:py-20 py-10">
    <div class="max-w-screen-xl mx-auto px-4 lg:px-10">
        <div class="lg:pb-10 pb-6 text-center">
            <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight  mb-5 lg:mb-4 text-center">
                <?php echo $headline_1; ?>
            </h3>
            <div class="text-center lg:text-sm text-base font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'm_description_1', true ) ); ?></div>
        </div>
        <div class="lg:py-10 py-6 lg:grid lg:grid-cols-2 gap-5">
            <div class="text-center">
                <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight mb-5 lg:mb-4">
                    <?php echo $headline_2; ?>
                </h3>
                <div class="text-center lg:text-sm text-base py-10 font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'm_description_2', true ) ); ?></div>
                <h3 class="page-headline text-xl sm:text-2xl font-title font-extralight mb-5 lg:mb-4">
                    <?php echo $headline_3; ?>
                </h3>
                <div class="text-center lg:text-sm text-base font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'm_description_3', true ) ); ?></div>
            </div>
            <div><?php echo $climate_image; ?></div>
        </div>

        <div class="lg:py-10 py-6 lg:grid lg:grid-cols-3 gap-5">

        <?php if ( wp_is_mobile() ) : ?>

            <div class="text-center">
                <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight mb-5 lg:mb-4">
                    <?php echo $f_headline_1; ?>
                </h3>
                <div class="text-center lg:text-sm text-base py-10 font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'f_description_1', true ) ); ?></div>
                <h3 class="page-headline text-xl sm:text-2xl font-title font-extralight mb-5 lg:mb-4">
                    <?php echo $f_headline_2; ?>
                </h3>
                <div class="text-center lg:text-sm text-base font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'f_description_2', true ) ); ?></div>
                <h3 class="page-headline text-xl sm:text-2xl font-title font-extralight mb-5 lg:my-10">
                    <?php echo $f_headline_3; ?>
                </h3>

                <div class="text-center lg:text-sm text-base font-body">
                    <?php echo wpautop( get_post_meta( get_the_ID(), 'f_description_3', true ) ); ?>
                    <div><?php echo $flora_image; ?></div>
                    <div class="flex flex-row gap-5 lg:p-10 p-2">
                        <?php 
                        $index = 1;
                        $banner_img = get_post_meta( get_the_ID(), 'grid_img', 1 );
                                                
                            foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                                $grid_Img = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                                    'class' => 'w-full object-cover object-center aspect-[9/20] rounded-lg',
                                ) );
                                                
                        ?>
                            <div class="img<?php echo $index; ?>"><?php echo $grid_Img; ?></div>

                            
                        <?php 
                        $index++;
                    
                        } ?>

                    </div>
                
                </div>
            </div>

        <?php else : ?>

            <div><figure class=""><?php echo $flora_image; ?></figure></div>
            <div class="text-center lg:col-span-2">
                <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight mb-5 lg:mb-4">
                    <?php echo $f_headline_1; ?>
                </h3>
                <div class="text-center lg:text-sm text-base py-4 font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'f_description_1', true ) ); ?></div>
                <h3 class="page-headline text-xl sm:text-2xl font-title font-extralight mb-5 lg:mb-4">
                    <?php echo $f_headline_2; ?>
                </h3>
                <div class="text-center lg:text-sm text-base font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'f_description_2', true ) ); ?></div>
                <h3 class="page-headline text-xl sm:text-2xl font-title font-extralight mb-5 lg:my-4">
                    <?php echo $f_headline_3; ?>
                </h3>

                <div class="text-center lg:text-sm text-base font-body">
                    <?php echo wpautop( get_post_meta( get_the_ID(), 'f_description_3', true ) ); ?>
                
                    <div class="flex flex-row gap-5 p-10">
                        <?php 
                        $index = 1;
                        $banner_img = get_post_meta( get_the_ID(), 'grid_img', 1 );
                                                
                            foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                                $grid_Img = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                                    'class' => 'w-full object-cover object-center aspect-[9/20] rounded-lg',
                                ) );
                                                
                        ?>
                            <div class="img<?php echo $index; ?>"><?php echo $grid_Img; ?></div>

                            
                        <?php 
                        $index++;
                    
                        } ?>

                    </div>
                
                </div>
            </div>

        <?php endif; ?>

        </div>

        <div class="lg:pb-10 pb-6 text-center">


        <?php 
                $reasons = get_post_meta( get_the_ID(), 'maldives_group', true );

                foreach ( (array) $reasons as $key => $entry ) {

                    $desc = $title = '';
                
                    if ( isset( $entry['m_title_5'] ) ) {
                        $title = esc_html( $entry['m_title_5'] );
                    }
                    if ( isset( $entry['m_description_5'] ) ) {
                        $desc = esc_html( $entry['m_description_5'] );
                    } 
        ?>

            <div class="lg:py-10 py-6">
                <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight  mb-16 lg:mb-4 text-center">
                    <?php echo $title; ?>
                </h3>
                <div class="text-center lg:text-sm text-base font-body"><?php echo $desc; ?></div>
            </div>
        
        <?php } ?>
        
        </div>

    </div>
</section>

<style>

.img2{
    padding-top: 3.5rem;
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