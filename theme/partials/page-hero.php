<?php 

$hero_image_desktop = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'site_hero_id', 1 ), "full");
$hero_image_mobile = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'site_hero_mobile_id', 1 ), "full");

$hero_video_desktop = wp_get_attachment_url( get_post_meta( get_the_ID(), 'hero_video_id', 1 ));
$hero_video_mobile = wp_get_attachment_url( get_post_meta( get_the_ID(), 'hero_video_mobile_id', 1 ));

$headline = get_post_meta( get_the_ID(), 'main_title', true );

 $hero_image = $hero_image_desktop;
 $hero_video = $hero_video_desktop;

 ?>



<div data-aos="zoom-out" data-aos-offset="500" class="site-hero relative h-screen overflow-hidden">
 <?php if ( wp_is_mobile() ) : ?>
    <video autoplay="" loop="" muted="" playsinline="" class="w-full h-screen object-cover" poster="<?php echo $hero_image_mobile; ?>">
        <source type="video/mp4" src="<?php echo $hero_video_mobile; ?>">
        Your browser does not support this video.
    </video>
    <div class="absolute  top-1/2 left-1/2" style="transform: translate(-50%, -50%);">
            <h3 class="page-headline text-5xl sm:text-7xl font-title font-normal text-white max-w-xl">
                <?php echo $headline; ?>
            </h3>
    </div>
    <?php else : ?>
    <video autoplay="" loop="" muted="" playsinline="" class="w-full h-screen object-cover" poster="<?php echo $hero_image_desktop; ?>">
        <source type="video/mp4" src="<?php echo $hero_video_desktop; ?>">
        Your browser does not support this video.
    </video>
    <div class="absolute  top-1/2 left-1/2" style="transform: translate(-50%, -50%);">
            <h3 class="page-headline text-5xl sm:text-7xl font-title font-normal text-white max-w-xl">
                <?php echo $headline; ?>
            </h3>
    </div>
    <?php endif; ?>
</div>