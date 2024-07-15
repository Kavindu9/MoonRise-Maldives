<?php 

?>

<section>
  <div class="page-hero w-full mx-auto">
    <div class="hero-image relative h-screen overflow-hidden">

      <?php if ( wp_is_mobile() ) : ?>
        <!-- Slider main container -->
        <div class="swiper mySwiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
          
            <?php 
                $banner_img = get_post_meta( get_the_ID(), 'banner_img_mob', 1 );
                                        
                    foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                        $main_mob_Img = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                            'class' => 'w-full h-screen object-cover object-center ',
                        ) );
                                        
                ?>
                  <div class="swiper-slide"><?php echo $main_mob_Img; ?></div>

                <?php } ?>

          </div>

        </div>

      <?php else : ?>
        <!-- Slider main container -->
        <div class="swiper mySwiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
          
            <?php 
                $banner_img = get_post_meta( get_the_ID(), 'banner_img', 1 );
                                        
                    foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                        $main_dsk_Img = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center ',
                        ) );
                                        
                ?>
                  <div class="swiper-slide"><?php echo $main_dsk_Img; ?></div>

                <?php } ?>

          </div>

        </div>

      <?php endif; ?>

    </div>
  </div>
</section>

<script>

</script>