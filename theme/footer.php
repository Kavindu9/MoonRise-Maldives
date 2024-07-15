<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moonrise-mv
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

AOS.init();

// const button = document.querySelector('#menu-button');
// const menu = document.querySelector('#navbar-solid-bg');


// button.addEventListener('click', () => {
//   menu.classList.toggle('hidden');
// });

// // Close mobile menu
// function closeMobileMenu() {
//     menu.classList.add("hidden");
// }


$("#navbar-toggle").click(function(){
    $("#navbar-dropdown").toggleClass("hidden");
});

$("#dropdownNavbarLink").click(function(){
    $("#dropdownNavbar").toggleClass("hidden");
});

$("#dropdownNavbarLink2").click(function(){
    $("#dropdownNavbar2").toggleClass("hidden");
});

$("#doubleDropdownButton").click(function(){
    $("#doubleDropdown").toggleClass("hidden");
});


//Swiper slider home
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
        delay: 8500,
        disableOnInteraction: false
    }
});

//Home Facilities
var swiper = new Swiper(".facility-Swiper", {
  effect: "cube",
  grabCursor: true,
  cubeEffect: {
    shadow: false,
    slideShadows: false
  },
  autoplay: {
        delay: 8500,
        disableOnInteraction: false
    },
});


var swiper = new Swiper(".Swiper-act", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
    delay: 8500,
    disableOnInteraction: false
    },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });

    var swiper = new Swiper(".single-Swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        freeMode: true,
        parallax: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });

        //Swiper 3D slider
var swiper = new Swiper(".swiper-container", {
	slidesPerView: 1,
	loop: true,
	effect: "coverflow",
	grabCursor: true,
	centeredSlides: true,
	spaceBetween: -100,
	coverflowEffect: {
		rotate: 0,
		stretch: 0,
		depth: 800,
		modifier: 1,
		slideShadows: false
	},
});

</script>



<script>

var $btns = $('.cat-btn').click(function() {
    if (this.id == 'all') {
        $('.page-listings > div').fadeIn(450);
    } else {
        var $el = $('.' + this.id).fadeIn(450);
        $('.page-listings > div').not($el).hide();
    }
    $btns.removeClass('active');
    $(this).addClass('active');
})


var image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
	delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});

</script>

</body>
</html>
