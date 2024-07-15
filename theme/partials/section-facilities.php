<?php
$title = get_post_meta( get_the_ID(), '3_title', true );
?>

<section class="lg:py-12 py-10">
    <div class="max-w-screen-xl mx-auto facility sm:px-10 px-4">
        <div data-aos="fade-down" class="">
            <div><h2 class="text-3xl text-center font-title py-8"><?php echo $title; ?></h2></div>
            <div class="text-base font-body text-center"><?php echo wpautop( get_post_meta( get_the_ID(), '3_description', true ), "", "", array( "class" => "lg:text-sm text-black font-body font-bold text-center text-base" ) ); ?></div>
        </div>

        <div class="lg:grid lg:grid-cols-4 gap-5 lg:py-10 py-5">

            <?php 
                $reasons = get_post_meta( get_the_ID(), 'why_nova_group', true );

                foreach ( (array) $reasons as $key => $entry ) {

                    $img1 = $img2 = $img3 = $mob_img = $title = $url = '';
                
                    if ( isset( $entry['f_title'] ) ) {
                        $title = esc_html( $entry['f_title'] );
                    }
                    if ( isset( $entry['f_image_1_id'] ) ) {
                        $img1 = wp_get_attachment_image_url( $entry['f_image_1_id'], 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center ',
                        ) );
                    } 

                    if ( isset( $entry['f_image_2_id'] ) ) {
                        $img2 = wp_get_attachment_image_url( $entry['f_image_2_id'], 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center ',
                        ) );
                    }

                    if ( isset( $entry['f_image_3_id'] ) ) {
                        $img3 = wp_get_attachment_image_url( $entry['f_image_3_id'], 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center ',
                        ) );
                    }

                    if ( isset( $entry['f_image_m_id'] ) ) {
                        $mob_img = wp_get_attachment_image_url( $entry['f_image_m_id'], 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center ',
                        ) );
                    }
                    if ( isset( $entry['3_url'] ) ) {
                        $url = esc_html( $entry['3_url'] );
                    }
            ?>

                    <a href="<?php echo $url; ?>" class=" "><div class="card card--2 py-8">
                        <div class="swiper  facility-Swiper">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-img">
                                <img src="<?php echo $img1; ?>" />
                            </div>
                            <div class="swiper-slide swiper-img">
                                <img src="<?php echo $img2; ?>" />
                            </div>
                            <div class="swiper-slide swiper-img">
                                <img src="<?php echo $img3; ?>" />
                            </div>
                            </div>
                        </div>
                        <div class="card-content py-10">
                            <h2 class="text-black font-title lg:text-2xl text-5xl text-center"><?php echo $title; ?></h2>
                        </div>
                    </div></a>



            <?php } ?>
        </div>


    </div>
</section>

<style>

.card {
  max-width: 320px;
  box-shadow: 0px 14px 20px rgb(0 0 0 / 23%);
  width: 90%;
  margin-inline: auto;

  &-content {
    text-align: center;
    background: #fff;
    padding: 25px 30px;

    h2 {
      margin-bottom: 5px;
      font-size: 1.25rem;
      font-family: "Lora", serif;
      font-weight: 500;
      letter-spacing: 0.2px;
    }
  }
}

.facility-Swiper {
  max-width: 320px;
  height: 400px;
}

.swiper-img img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

</style>