<?php 
        $args = array( 
            'post_type'   => 'resort',
            'tag' => 'featured',
            'posts_per_page' => '5',
        );
        $featuredArticles = new WP_Query( $args );

        if ( $featuredArticles->have_posts() ) : ?>

<?php 
$title = get_post_meta( get_the_ID(), '4_title', true );

?>
<article class="py-10">
    <div class="container max-w-none px-4 lg:px-0  mx-auto"> 
        <div data-aos="fade-right">
            <div><h2 class="text-3xl text-center font-title py-8"><?php echo $title; ?></h2></div>
            <div class="text-base font-body text-center"><?php echo wpautop( get_post_meta( get_the_ID(), '4_description', true ), "", "", array( "class" => "lg:text-sm text-black font-body font-bold text-center text-base" ) ); ?></div>
        </div>  
    </div>     
</article>
<section  class="lg:py-20 py-10">
    <div class="container max-w-screen-xl mx-auto lg:px-0  mb-24 overflow-hidden">

        <!-- <div class="swiper-container"> -->
        <div class="swiper-container lg:w-1/2 w-[75%] h-[60%] mx-auto">
          <div class="swiper-wrapper">
            <?php while( $featuredArticles->have_posts() ) : $featuredArticles->the_post(); ?>


              <div class="swiper-slide">
                <div class="why-nova-item max-w-screen-md  group">
                  <div class="relative ">
                      <a href="<?php the_permalink() ;?>" class=""><figure class="overflow-hidden w-full">
                          <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover object-center aspect-[3/2] scale-100 hover:scale-110 transition ease-out duration-500')); ?>
                      </figure></a>
                      <div class="absolute bottom-0 left-0 w-full h-1/2 flex flex-col justify-end bg-gradient-to-t from-black/60 to-black/0">
                          <a href="<?php the_permalink() ;?>" class="block p-6 sm:p-10 ">
                              <h3 class=" font-title text-3xl  sm:text-4xl text-white drop-shadow-xl  ">
                                  <?php the_title(); ?> </h3>
                          </a>
                      </div>
                  </div>
                  </div>
              </div>

            <?php endwhile ?>

          </div>
        </div>
        <!-- </div> -->

    </div>
</section>
<?php else : ?>
<!-- Content If No Posts -->
<?php endif ?>

<style>

/* .swiper-xp {
  &-button-next::after,
  &-button-prev::after {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 800;
    padding: 1rem;
    width: 2rem;
    height: 2rem;
    opacity: 0.75;
    border-radius: 50%;
    color: var(--white-100);
    background: var(--black-300);
  }
}



.swiper-container {
  max-width: 75rem;
  height: auto;
  margin-inline: auto;
  padding-inline: 1.25rem;
} */


    /* .swiper-button-prev {
  background: white;
  border-radius: 50%;
  top: 47%;
  left: -30px;
  width: 50px;
  height: 50px;
  box-shadow: 0px 2px 11px rgb(0 0 0 / 17%);

  &::after {
    font-size: 1.4rem;
    content: "";
  }

  svg {
    width: 25px;
  }
}

.swiper-button-next {
  background: white;
  border-radius: 50%;
  top: 47%;
  right: -30px;
  width: 50px;
  height: 50px;
  box-shadow: 0px 2px 11px rgb(0 0 0 / 17%);

  &::after {
    font-size: 1.4rem;
    content: "";
  }

  svg {
    width: 25px;
  }
}

.swiper-button-prev,
.swiper-button-next {
  display: none;

  @media (min-width: 760px) {
    display: flex;
  }
} */

</style>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
 var swiper = new Swiper(".Swiper-featured", {
  effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop:true,
      spaceBetween: -100,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 800,
        modifier: 1,
        slideShadows: false,
      },
      autoplay:{
        delay:3000,
        disableOnInteraction:false,
      }
    });
</script>