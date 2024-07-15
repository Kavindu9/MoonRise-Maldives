<?php
$title = get_post_meta( get_the_ID(), '5_title', true );
?>

<section class="lg:py-12 py-10">
    <div class="container max-w-none px-4 lg:px-0  mx-auto py-4"> 
        <div data-aos="fade-right">
            <div><h2 class="text-3xl text-center font-title py-8"><?php echo $title; ?></h2></div>
            <div class="text-base font-body text-center"><?php echo wpautop( get_post_meta( get_the_ID(), '5_description', true ), "", "", array( "class" => "lg:text-sm text-black font-body font-bold text-center text-base" ) ); ?></div>
        </div>  
    </div>
    <div class="container max-w-screen-xl mx-auto px-4 lg:px-0 mb-6">
        <div class="swiper Swiper-act">
            <div class="swiper-wrapper">
                
            <?php 
                $reasons = get_post_meta( get_the_ID(), 'activity_group', true );

                foreach ( (array) $reasons as $key => $entry ) {

                    $img = $title = $url = '';
                
                    if ( isset( $entry['a_title_5'] ) ) {
                        $title = esc_html( $entry['a_title_5'] );
                    }
                    if ( isset( $entry['a_url_5'] ) ) {
                        $url = esc_html( $entry['a_url_5'] );
                    } 
                    if ( isset( $entry['a_image_id'] ) ) {
                        $img = wp_get_attachment_image_url( $entry['a_image_id'], 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center scale-100 group-hover:scale-110 transition ease-out duration-500',
                        ) );
                    }
            ?>
                <div class="swiper-slide activity">
                    <div class="relative act"> 
                        <a href="<?php echo $url; ?>" class="">
                            <div class="text-center">
                                <img src="<?php echo $img; ?>" class="img w-full h-full object-cover object-center scale-100 group-hover:scale-110 transition ease-out duration-500">
                                <div class="absolute top-1/2 left-1/2" style="transform: translate(-50%, -50%);"><h2 class="title text-3xl text-center font-title text-white"><?php echo $title; ?></h2></div>
                            </div>
                        </a>
                    </div>
                </div>

            <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<style>
    .activity:hover {
        filter: grayscale(100%);
        /* transform: scale(1.1); */
        font-size: 2.8rem;
    }
    .img:hover {
        font-size: 2.8rem;
    }


</style>