<?php
$sub_title = get_post_meta( get_the_ID(), '2_sub_title', true );
$title = get_post_meta( get_the_ID(), '2_title', true );

$main_img = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'main_image_id', 1 ), "large", "", array( "class" => "w-full bg-no-repeat object-cover thumbnail border rounded-lg" ) );
$second_img = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'second_image_id', 1 ), "large", "", array( "class" => " w-full bg-no-repeat object-cover" ) );

?>

<section class="lg:py-12 py-10">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-10">
        <h2 data-aos="fade-right" class="text-base text-center font-title py-8"><?php echo $sub_title; ?></h2>
        <h1 data-aos="fade-left" class="text-3xl text-center font-title"><?php echo $title; ?></h1>
        <div class="lg:grid lg:grid-cols-3 gap-5 lg:py-20 py-10">
            <div class="text-base font-body">
                <?php echo wpautop( get_post_meta( get_the_ID(), '2_description', true ), "", "", array( "class" => "lg:text-sm text-black font-body font-bold text-center text-base" ) ); ?>
            </div>
            <div data-aos="fade-down" data-aos-easing="linear" class="lg:py-2">
                <img  data-aos-duration="1500" class="w-full bg-no-repeat object-cover border rounded-lg border-2 border-white" src="<?php echo $main_img; ?>">
            </div>
            <div data-aos="fade-right" data-aos-easing="ease-in-sine">
                <img  data-aos-offset="300" class="border-2 border-white w-full rounded-md" src="<?php echo $second_img; ?>">
            </div>
        </div>
    </div>
</section>