<?php
get_header();
?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php
$title = get_post_meta( get_the_ID(), 'r_title_1', true );
$desc = get_post_meta( get_the_ID(), 'r_description_1', true );

$loc_check = get_post_meta( get_the_ID(), 'loc_check', true );
$location = get_post_meta( get_the_ID(), 'loc', true );

$distance_check = get_post_meta( get_the_ID(), 'air_check', true );
$distance = get_post_meta( get_the_ID(), 'distance', true );

$time_check = get_post_meta( get_the_ID(), 'trans_check', true );
$time = get_post_meta( get_the_ID(), 'time', true );

$size_check = get_post_meta( get_the_ID(), 'size_check', true );
$size = get_post_meta( get_the_ID(), 'size', true );

$map_check = get_post_meta( get_the_ID(), 'map_check', true );
$loc_title = get_post_meta(get_the_ID(), 'loc_title', true);


$hero_image_desktop = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'site_hero_r_id', 1 ), "full");
$hero_image_mobile = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'site_hero_mobile_r_id', 1 ), "full");

$hero_video_desktop = wp_get_attachment_url( get_post_meta( get_the_ID(), 'hero_video_r_id', 1 ));
$hero_video_mobile = wp_get_attachment_url( get_post_meta( get_the_ID(), 'hero_video_mobile_r_id', 1 ));

$headline = get_post_meta( get_the_ID(), 'main_title_r', true );

 $hero_image = $hero_image_desktop;
 $hero_video = $hero_video_desktop;

$button_text = get_post_meta( get_the_ID(), 'button_txt', true );
$button_url = get_post_meta( get_the_ID(), 'button_url', true );

?>

<div class="page-hero w-full mx-auto min-h-[45vh]">

    <div data-aos="zoom-out" data-aos-offset="500" class="site-hero relative h-screen overflow-hidden">
    <?php if ( wp_is_mobile() ) : ?>
        <video autoplay="" loop="" muted="" playsinline="" class="w-full h-screen object-cover" poster="<?php echo $hero_image_mobile; ?>">
            <source type="video/mp4" src="<?php echo $hero_video_mobile; ?>">
            Your browser does not support this video.
        </video>
        <div class="absolute  bg-black/20 w-full h-full md:flex flex-col justify-end bottom-0 py-20">
            <header class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-8 lg:mb-24">
                <h1 class="page-title font-body text-sm font-normal  text-paradise-pink-50 uppercase tracking-wider mx-4 text-white"><?php echo $headline; ?></h1>
                <h3 class="page-headline col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-normal text-white max-w-sm">
                <?php the_title(); ?>
                </h3>
            </header>
        </div>
        <?php else : ?>
        <video autoplay="" loop="" muted="" playsinline="" class="w-full h-screen object-cover" poster="<?php echo $hero_image_desktop; ?>">
            <source type="video/mp4" src="<?php echo $hero_video_desktop; ?>">
            Your browser does not support this video.
        </video>
        <div class="absolute  bg-black/20 w-full h-full hidden md:flex flex-col justify-end bottom-0 py-20">
            <header class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-8 lg:mb-24">
                <h1 class="page-title font-body text-sm font-normal  text-paradise-pink-50 uppercase tracking-wider mx-4 text-white"><?php echo $headline; ?></h1>
                <h3 class="page-headline col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-normal text-white max-w-sm">
                    <?php the_title(); ?>
                </h3>
            </header>
        </div>
        <?php endif; ?>
    </div>

</div>

<article class="py-10 lg:py-14">
    <div class="container px-4 sm:px-10 max-w-screen-lg mx-auto">
        <div data-aos="fade-right" class="text-left">
                <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight lg:pb-6 pb-4">
                    <?php echo $title; ?>
                </h3>
                <div class="lg:text-sm text-base font-body"><?php echo $desc; ?></div>
                <?php if($button_url) { ?>
                    <div class="pt-10">
                        <a href ="<?php echo $button_url; ?>" class="bg-[#FF0000] hover:bg-[#fa3232] text-white font-bold py-2 px-4 rounded-full">
                            <?php echo $button_text; ?>
                        </a>
                    </div>
                <?php } ?>
        </div>
        <?php if($map_check) { ?>
            <div class="text-left lg:py-6 py-4">
                    <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight">
                        <?php echo $loc_title; ?>
                    </h3>
                    <div class="lg:text-sm text-base font-body"><?php echo wpautop( get_post_meta( get_the_ID(), 'loc_url', true ) ); ?></div>
            </div>
        <?php } ?>
    </div>
</article>

<section class="container px-4 py-10 sm:px-10 max-w-screen-xl mx-auto">
    <div class="flex justify-center space-x-10 ">

    <?php if($loc_check) { ?>
        <div class="feature-item text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 fill-current text-smoke-white-900 mx-auto my-4" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M2370 5109 c-699 -81 -1278 -584 -1455 -1264 -75 -289 -70 -630 12
                -915 99 -345 264 -611 817 -1315 108 -137 196 -253 196 -256 0 -4 -23 -10 -52
                -13 -260 -35 -616 -159 -784 -274 -84 -57 -180 -161 -212 -229 -23 -49 -27
                -71 -27 -143 1 -108 29 -174 112 -261 142 -150 360 -257 688 -338 286 -71 520
                -96 900 -95 312 0 471 12 705 54 495 90 855 277 958 497 22 48 26 72 27 143 0
                109 -28 174 -117 267 -75 78 -140 124 -268 188 -152 77 -454 167 -637 191 -29
                3 -53 9 -53 13 0 3 111 147 245 320 450 575 607 818 721 1111 77 202 109 382
                108 625 0 210 -15 317 -65 488 -234 787 -1007 1299 -1819 1206z m485 -219
                c526 -111 953 -485 1123 -985 59 -172 76 -280 76 -485 1 -279 -44 -465 -173
                -725 -124 -251 -219 -387 -699 -1004 -173 -222 -382 -494 -464 -605 -82 -110
                -153 -201 -158 -201 -4 0 -89 109 -188 241 -99 133 -287 378 -418 545 -466
                595 -605 793 -719 1023 -73 148 -114 264 -146 416 -33 153 -33 449 0 600 100
                468 380 834 801 1049 150 77 311 126 490 151 106 15 361 4 475 -20z m-607
                -3932 c87 -117 177 -241 201 -274 55 -80 103 -102 158 -71 12 7 78 89 145 182
                68 94 159 217 202 274 l78 103 57 -7 c118 -14 358 -67 479 -106 257 -84 452
                -212 483 -317 79 -272 -662 -542 -1491 -542 -635 0 -1237 156 -1437 373 -88
                95 -82 173 21 272 135 130 417 240 783 304 174 31 141 51 321 -191z"/>
                <path d="M2521 4706 c-90 -50 -50 -186 55 -186 38 0 94 59 94 100 0 23 -9 42
                -34 66 -37 37 -73 43 -115 20z"/>
                <path d="M2898 4621 c-27 -24 -33 -36 -33 -69 0 -51 29 -83 93 -107 249 -92
                482 -310 597 -558 63 -135 105 -319 105 -454 0 -49 4 -59 34 -89 47 -47 86
                -46 133 1 l36 36 -6 107 c-25 435 -257 821 -630 1047 -91 55 -230 115 -269
                115 -17 0 -41 -12 -60 -29z"/>
                <path d="M2415 4104 c-109 -21 -243 -92 -331 -176 -231 -220 -288 -533 -148
                -818 39 -79 62 -110 133 -181 71 -71 102 -94 181 -133 206 -101 411 -101 620
                1 79 38 109 60 181 132 72 72 94 102 132 181 102 209 102 411 0 620 -38 79
                -60 109 -132 181 -71 71 -102 94 -181 133 -148 72 -294 92 -455 60z m247 -195
                c92 -19 177 -66 249 -138 199 -199 199 -503 0 -702 -71 -70 -138 -109 -236
                -134 -304 -78 -615 167 -615 485 0 225 164 433 383 486 66 16 152 17 219 3z"/>
                </g>
            </svg>
            <span class="font-body block uppercase tracking-wide text-xs">Location: <?php echo $location; ?></span>
        </div>
    <?php } ?>

    <?php if($distance_check) { ?>
        <div class="feature-item text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 fill-current text-smoke-white-900 mx-auto my-4" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1906 4193 c-47 -47 -38 -68 168 -416 104 -175 184 -322 180 -327 -9
                -8 -305 -60 -339 -60 -11 0 -76 43 -145 95 -69 52 -141 99 -160 105 -32 9
                -130 6 -187 -6 -25 -5 -53 -50 -53 -85 0 -13 41 -85 92 -162 90 -137 91 -141
                76 -166 -8 -14 -50 -79 -92 -145 -42 -65 -76 -127 -76 -138 0 -33 28 -75 59
                -88 19 -7 62 -11 114 -9 l84 4 136 103 c75 56 145 102 154 102 41 1 343 -55
                343 -63 0 -5 -85 -154 -190 -331 -134 -227 -190 -331 -190 -353 0 -18 10 -41
                25 -57 24 -26 25 -26 175 -26 93 0 159 4 172 11 12 6 194 180 406 385 l384
                374 132 0 c157 1 184 6 343 72 146 60 174 86 181 172 8 100 -27 136 -199 208
                l-124 52 -168 4 -168 4 -372 362 c-204 199 -385 371 -401 384 -27 21 -39 22
                -181 22 l-152 0 -27 -27z m599 -430 c271 -263 314 -308 294 -311 -66 -10 -93
                -92 -43 -131 26 -20 39 -21 295 -21 l269 0 115 -46 c66 -26 114 -51 112 -58
                -2 -6 -50 -31 -108 -56 l-104 -45 -515 -3 -515 -3 -211 37 c-247 42 -210 50
                -389 -84 -66 -50 -121 -89 -123 -87 -2 2 26 47 62 102 90 134 89 145 -26 315
                -21 31 -38 59 -38 62 0 3 60 -39 133 -93 73 -54 142 -101 154 -105 12 -4 113
                9 225 29 112 19 236 35 276 35 102 0 132 17 132 78 0 30 -7 40 -52 74 -14 11
                -368 601 -368 614 0 2 24 4 54 4 l54 0 317 -307z m315 -827 c0 -2 -142 -141
                -316 -310 l-315 -306 -55 0 c-30 0 -54 2 -54 4 0 3 241 414 357 609 4 7 383
                11 383 3z"/>
                <path d="M542 3769 c-105 -18 -277 -102 -301 -148 -17 -32 -13 -60 14 -86 33
                -34 55 -31 133 15 97 59 158 75 277 74 79 -1 113 -6 160 -24 272 -104 396
                -370 311 -665 -35 -120 -146 -343 -241 -485 -83 -124 -225 -310 -237 -310 -12
                0 -150 180 -234 306 -136 204 -229 402 -260 558 -16 77 -16 119 2 262 5 44 3
                55 -15 73 -27 27 -82 28 -105 2 -22 -24 -46 -139 -46 -221 0 -250 170 -610
                464 -985 100 -128 134 -155 191 -155 58 0 95 27 182 137 276 347 440 668 473
                924 54 434 -332 800 -768 728z"/>
                <path d="M4325 3765 c-295 -64 -505 -310 -522 -610 -15 -262 147 -621 461
                -1020 100 -128 134 -155 191 -155 59 0 95 27 184 139 336 422 505 808 471
                1078 -20 158 -76 271 -194 389 -65 65 -98 89 -166 122 -139 67 -289 87 -425
                57z m300 -166 c271 -101 396 -368 310 -664 -34 -119 -145 -342 -240 -485 -83
                -123 -225 -310 -236 -310 -13 0 -149 178 -233 303 -177 265 -276 510 -276 679
                1 228 166 437 392 494 75 19 208 11 283 -17z"/>
                <path d="M4370 3385 c-61 -19 -125 -76 -157 -139 -36 -69 -38 -169 -4 -238 45
                -95 148 -158 256 -158 74 0 167 48 209 107 42 60 54 97 55 168 2 184 -182 317
                -359 260z m177 -179 c97 -106 -32 -261 -155 -186 -82 50 -76 177 11 216 51 23
                106 11 144 -30z"/>
                <path d="M570 3385 c-61 -19 -125 -75 -157 -139 -36 -69 -37 -169 -4 -239 67
                -138 232 -195 369 -126 142 71 193 228 120 370 -64 122 -193 175 -328 134z
                m177 -179 c97 -106 -32 -261 -155 -186 -82 50 -76 177 11 216 51 23 106 11
                144 -30z"/>
                <path d="M2665 2539 c-51 -29 -60 -85 -20 -124 30 -30 64 -32 99 -4 66 52 -6
                169 -79 128z"/>
                <path d="M2952 2503 c-7 -3 -19 -18 -28 -35 -41 -79 70 -151 125 -82 28 35 26
                69 -4 99 -23 24 -61 31 -93 18z"/>
                <path d="M1758 2423 c-26 -29 -30 -60 -14 -91 25 -49 82 -57 121 -17 30 30 32
                64 4 99 -25 32 -87 37 -111 9z"/>
                <path d="M3227 2423 c-28 -32 -26 -84 5 -113 30 -27 73 -26 103 5 30 30 32 64
                4 99 -25 32 -86 37 -112 9z"/>
                <path d="M1503 2340 c-55 -22 -65 -88 -21 -130 67 -62 168 35 106 103 -27 30
                -55 39 -85 27z"/>
                <path d="M3533 2340 c-49 -20 -59 -96 -17 -129 15 -12 38 -21 51 -21 34 0 73
                42 73 80 0 28 -29 70 -49 70 -5 0 -15 2 -23 4 -7 3 -23 1 -35 -4z"/>
                <path d="M1224 2208 c-22 -10 -44 -47 -44 -73 0 -22 42 -64 72 -71 22 -5 34 0
                59 25 26 27 30 37 25 64 -11 56 -60 81 -112 55z"/>
                <path d="M3786 2199 c-20 -16 -26 -29 -26 -58 0 -61 55 -95 108 -67 49 25 57
                82 17 121 -30 30 -64 32 -99 4z"/>
                <path d="M973 2060 c-49 -20 -59 -96 -17 -129 35 -28 69 -26 99 4 61 60 -4
                157 -82 125z"/>
                <path d="M4039 2041 c-32 -32 -35 -47 -18 -85 16 -35 61 -52 98 -37 28 12 51
                47 51 77 0 23 -55 74 -80 74 -12 0 -35 -13 -51 -29z"/>
                <path d="M710 1870 c-12 -12 -20 -33 -20 -55 0 -72 86 -104 129 -49 28 35 26
                69 -4 99 -30 31 -77 33 -105 5z"/>
                <path d="M4292 1883 c-21 -8 -43 -61 -36 -88 14 -57 97 -75 133 -29 28 35 26
                69 -4 99 -23 24 -61 31 -93 18z"/>
                <path d="M485 1675 c-51 -50 -20 -129 50 -129 71 0 104 90 49 133 -35 28 -69
                26 -99 -4z"/>
                <path d="M4505 1675 c-41 -40 -30 -96 22 -124 76 -40 145 69 79 126 -35 30
                -71 29 -101 -2z"/>
                <path d="M90 1512 c-19 -9 -45 -32 -57 -51 -22 -33 -23 -42 -23 -245 0 -236 5
                -255 72 -296 33 -20 56 -20 2476 -20 2743 0 2489 -8 2538 76 25 42 25 44 22
                248 -3 227 -5 234 -78 283 l-33 23 -839 0 -839 0 -26 -26 c-20 -20 -24 -31
                -19 -57 13 -68 4 -67 449 -67 l402 0 -165 -165 -165 -165 -660 0 -660 0 165
                165 165 165 92 0 c51 0 103 5 117 11 51 23 55 103 7 128 -14 8 -465 11 -1463
                11 -1354 0 -1445 -1 -1478 -18z m830 -297 l-165 -165 -300 2 -300 3 -3 150
                c-1 82 0 155 2 162 4 10 99 13 468 13 l463 0 -165 -165z m1520 0 l-165 -165
                -655 0 -655 0 165 165 165 165 655 0 655 0 -165 -165z m2530 0 l0 -165 -477 0
                -478 0 165 165 165 165 312 0 313 0 0 -165z"/>
                </g>
            </svg>
            <span class="font-body block uppercase tracking-wide text-xs">Airport Distance: <?php echo $distance; ?>km</span>
        </div>
    <?php } ?>

    <?php if($time_check) { ?>
        <div class="feature-item text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 fill-current text-smoke-white-900 mx-auto my-4" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M2442 4470 c-26 -24 -29 -66 -6 -98 11 -16 25 -22 54 -22 29 0 43 6
                54 22 35 50 4 118 -54 118 -14 0 -36 -9 -48 -20z"/>
                <path d="M4095 4426 c-60 -28 -87 -56 -114 -116 -39 -85 -24 -181 39 -253 143
                -162 412 -63 412 152 1 74 -25 133 -78 179 -74 66 -171 80 -259 38z m165 -131
                c5 -3 17 -20 26 -37 46 -89 -57 -183 -143 -129 -34 21 -53 67 -45 108 5 29 47
                71 75 75 22 4 68 -5 87 -17z"/>
                <path d="M683 4278 c-12 -6 -27 -24 -34 -40 -34 -83 86 -136 130 -57 19 33 1
                81 -35 98 -29 13 -32 13 -61 -1z"/>
                <path d="M1435 3952 c-86 -41 -135 -122 -135 -219 0 -73 24 -127 77 -174 52
                -47 99 -62 179 -57 75 5 130 37 179 107 28 39 30 49 30 126 0 77 -2 87 -30
                126 -17 24 -50 57 -73 74 -37 25 -54 30 -115 33 -55 2 -82 -2 -112 -16z m151
                -131 c70 -43 63 -146 -12 -177 -44 -18 -77 -12 -109 21 -49 48 -40 120 19 156
                39 24 63 24 102 0z"/>
                <path d="M3113 3800 c-32 -13 -43 -41 -43 -115 0 -57 3 -69 26 -91 19 -20 31
                -24 52 -19 48 12 57 29 57 115 0 57 -4 83 -15 94 -21 20 -51 26 -77 16z"/>
                <path d="M2846 3538 c-22 -31 -20 -64 4 -88 16 -16 33 -20 95 -20 85 0 115 18
                115 68 0 48 -26 62 -118 62 -72 0 -83 -2 -96 -22z"/>
                <path d="M3237 3542 c-22 -25 -21 -75 1 -95 14 -13 38 -17 95 -17 70 0 77 2
                96 26 26 33 27 58 1 84 -28 28 -168 29 -193 2z"/>
                <path d="M3092 3397 c-18 -19 -22 -35 -22 -95 0 -82 18 -112 69 -112 47 0 71
                39 71 117 0 55 -4 67 -25 88 -30 31 -65 32 -93 2z"/>
                <path d="M3973 3122 c-54 -8 -71 -87 -27 -121 53 -41 114 -13 114 52 0 48 -38
                77 -87 69z"/>
                <path d="M2115 2978 c-28 -16 -35 -28 -35 -65 0 -41 42 -77 80 -68 60 14 80
                88 34 124 -30 24 -50 26 -79 9z"/>
                <path d="M770 2930 c-19 -19 -20 -33 -20 -553 l0 -533 -55 -23 c-58 -24 -109
                -73 -131 -127 -19 -46 -17 -131 5 -180 23 -49 88 -107 140 -122 27 -9 207 -12
                620 -12 l581 0 0 -100 0 -100 -428 0 c-424 0 -428 0 -451 -21 -30 -28 -25 -65
                24 -181 40 -95 86 -152 150 -183 38 -19 69 -20 560 -25 l520 -5 68 -49 c126
                -90 82 -86 955 -86 726 0 769 1 807 19 58 27 269 245 285 295 23 72 -9 162
                -73 204 l-41 27 -403 3 -403 3 0 99 0 100 335 0 c355 0 390 4 457 51 l27 20 3
                -52 c2 -43 8 -55 30 -72 22 -17 33 -19 55 -11 45 15 53 45 53 197 l0 137 39 0
                c51 0 91 31 91 71 0 43 -31 69 -84 69 l-45 0 -3 151 c-3 145 -4 152 -27 170
                -30 25 -66 24 -91 -1 -17 -17 -20 -33 -20 -104 l0 -85 -66 35 c-58 30 -74 34
                -143 34 l-78 0 -31 44 c-41 56 -94 99 -169 134 l-58 27 -960 0 c-689 0 -970
                -3 -996 -11 l-37 -12 -315 362 c-173 198 -326 373 -341 389 l-25 27 -146 0
                c-132 0 -147 -2 -165 -20z m545 -452 c160 -183 291 -337 293 -343 2 -6 -144
                -59 -345 -124 -191 -63 -354 -116 -360 -118 -10 -4 -13 91 -13 456 l0 461 68
                0 67 0 290 -332z m667 -542 c-4 -141 7 -177 72 -234 95 -84 250 -52 305 61 20
                41 22 59 19 171 l-3 126 45 0 45 0 -3 -127 c-3 -119 -1 -131 21 -173 63 -119
                227 -141 318 -43 54 57 61 84 57 219 l-3 124 40 0 40 0 0 -127 c0 -118 2 -132
                25 -173 64 -115 214 -140 311 -53 58 53 71 99 67 237 l-3 116 184 0 c195 0
                240 -7 287 -46 l29 -23 -54 -1 c-36 0 -61 -6 -73 -17 -22 -20 -23 -70 -1 -95
                15 -16 35 -18 216 -18 184 0 204 -2 245 -21 63 -31 97 -87 97 -160 0 -65 -18
                -98 -75 -136 l-33 -23 -1706 0 c-1868 0 -1737 -4 -1759 58 -13 37 6 89 38 108
                27 15 1030 347 1096 363 21 5 66 9 99 10 l60 1 -3 -124z m234 116 c24 -16 34
                -54 34 -130 0 -65 -4 -84 -21 -106 -24 -31 -57 -34 -90 -7 -22 18 -24 26 -24
                114 0 79 3 98 19 116 19 21 61 28 82 13z m490 -13 c16 -18 19 -37 19 -116 0
                -88 -2 -96 -24 -114 -33 -27 -66 -24 -90 7 -36 46 -27 209 13 236 21 15 63 8
                82 -13z m476 4 c15 -14 18 -32 18 -119 0 -95 -2 -104 -22 -118 -31 -22 -64
                -20 -88 4 -17 17 -20 33 -20 115 0 82 3 98 20 115 24 24 67 26 92 3z m-1061
                -718 c-32 -30 -61 -55 -64 -55 -4 0 -7 25 -7 55 l0 55 64 0 65 0 -58 -55z
                m947 -42 l127 -98 -258 -3 c-141 -1 -372 -1 -513 0 l-256 3 108 98 108 97 278
                0 279 0 127 -97z m272 31 c0 -49 -3 -63 -12 -58 -13 8 -134 100 -152 116 -6 4
                29 8 77 8 l87 0 0 -66z m918 -286 c27 -27 11 -55 -91 -156 l-102 -102 -763 0
                c-857 0 -786 -6 -902 80 l-67 49 -526 3 c-513 3 -526 3 -553 24 -33 24 -60 60
                -69 92 l-6 22 1533 0 c1180 0 1537 -3 1546 -12z"/>
                </g>
            </svg>
            <span class="font-body block uppercase tracking-wide text-xs">Transfer: <?php echo $time; ?></span>
        </div>
    <?php } ?>

    <?php if($size_check) { ?>
        <div class="feature-item text-center">
            <svg class="w-10 h-10 fill-current text-smoke-white-900 mx-auto my-4" fill="#000000" width="800px" height="800px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
            </svg>
            <span class="font-body block uppercase tracking-wide text-xs">Size: <?php echo $size; ?></span>
        </div>
    <?php } ?>

    </div>
</section>

<section>
    <div class="container px-4 py-10 sm:px-10 max-w-screen-lg mx-auto">
        <div class="swiper single-Swiper">
            <div class="swiper-wrapper">
                
            <?php 
              $banner_img = get_post_meta( get_the_ID(), 'r_gallery', 1 );
                                      
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

</section>

<section class="lg:py-14 py-10">
    <div class="max-w-screen-lg mx-auto px-4">
        <div class="text-left lg:grid lg:grid-cols-2 gap-3">


            <?php 
                    $reasons = get_post_meta( get_the_ID(), 'resorts_group', true );

                    foreach ( (array) $reasons as $key => $entry ) {

                        $res_desc = $title = '';
                    
                        if ( isset( $entry['rs_title_1'] ) ) {
                            $title = esc_html( $entry['rs_title_1'] );
                        }
                        if ( isset( $entry['rs_description_1'] ) ) {
                            $res_desc = wpautop( $entry['rs_description_1'] );
                        }
            ?>

            <div class="lg:py-10 py-6">
                <h3 class="page-headline text-3xl sm:text-4xl font-title font-extralight  mb-16 lg:mb-4 text-left">
                    <?php echo $title; ?>
                </h3>
                <div class="text-left lg:text-sm text-base font-body list-disc"><?php echo $res_desc; ?></div>
            </div>

            <?php } ?>

        </div>
    </div>

</section>

<style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
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