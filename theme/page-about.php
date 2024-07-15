<?php 
/* 
    Template Name: About us
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php

$hero_check = get_post_meta( get_the_ID(), 'hero_check', true );

$title = get_post_meta( get_the_ID(), 'main_title_a', true );

$bg_img = wp_get_attachment_url( get_post_meta( get_the_ID(), 'site_hero_a_id', 1 ));
$bg_img_mob = wp_get_attachment_url( get_post_meta( get_the_ID(), 'site_hero_mob_a_id', 1 ));
?>

<?php 
    if($hero_check) {
        get_template_part( 'partials/page-hero' );
    }
?>

<article class="py-10 lg:py-8">
    <div class="max-w-screen-xl mx-auto px-4 lg:px-10">
        <div class="text-base font-body">
            <?php echo wpautop( get_post_meta( get_the_ID(), 'a_description_1', true ), "", "", array( "class" => "lg:text-sm text-black font-body font-bold text-center text-base" ) ); ?>
        </div>
        <div class="py-6 lg:py-10">
            <h1 class="text-3xl text-center font-title lg:pb-6 pb-4"><?php echo $title; ?></h1>
            <div class="text-base font-body">
                <?php echo wpautop( get_post_meta( get_the_ID(), 'rsa_description_1', true ), "", "", array( "class" => "lg:text-sm text-black font-body font-bold text-center text-base" ) ); ?>
            </div>
        </div>
    </div>
    <?php if ( wp_is_mobile() ) : ?>
        <div class="relative text-center h-[160vh]"  style="background-image: url(<?php echo $bg_img_mob; ?>)">
    <?php else : ?>
        <div class="relative text-center h-screen"  style="background-image: url(<?php echo $bg_img; ?>)">
    <?php endif; ?>

            <div class="py-10 lg:py-28 h-screen">
                <div class="max-w-screen-xl mx-auto px-4 lg:px-10">
                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">

                        <?php 
                                $reasons = get_post_meta( get_the_ID(), 'about_group', true );

                                foreach ( (array) $reasons as $key => $entry ) {

                                    $abt_desc = $title = $numb =  '';
                                
                                    if ( isset( $entry['rsa_title'] ) ) {
                                        $title = esc_html( $entry['rsa_title'] );
                                    }
                                    if ( isset( $entry['rsa_numb'] ) ) {
                                        $numb = wpautop( $entry['rsa_numb'] );
                                    }
                                    if ( isset( $entry['rsa_description'] ) ) {
                                        $res_desc = wpautop( $entry['rsa_description'] );
                                    }
                        ?>

                            <div class="border-r border-b border-l border-slate-200 lg:border-t lg:border-slate-200  rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal" style="background-color:rgb(217 217 217 / 38%);">
                                <div class="p-4 pt-2">
                                    <div class="mb-8">
                                        <div class="relative w-36 h-36 bg-red-500 rounded-full flex justify-center items-center text-center p-5 left-[25%]">
                                            <h2 class="font-title text-3xl text-white"><?php echo $numb; ?></h2>
                                        </div>
                                    </div>
                                    <div class="text-center text-black items-center px-4">
                                        <p class="py-6 lg:py-10 text-black font-body lg:text-base text-lg font-bold"><?php echo $title; ?></p>
                                        <p class="font-body lg:text-sm text-base"><?php echo $res_desc; ?></p>
                                    </div>
                                </div>
                            </div>         
                            
                        <?php } ?>

                    </div>
                </div>
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