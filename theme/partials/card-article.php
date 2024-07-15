<?php


$terms = get_the_terms( get_the_ID() , 'category' ); 

?>

<div <?php post_class("item-card group flex flex-col"); ?>>

    <?php if ( has_post_thumbnail() ) { ?>


    <figure class="w-full aspect-[334/384] bg-sapphire-200 overflow-hidden">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail( 'thumbi', array( 'class' => 'scale-100 group-hover:scale-110 w-full h-full object-cover transition ease-out duration-1000' ) );?>
        </a>
    </figure>


    <?php }    ?>

    <h3 class="text-3xl font-title font-extralight text-paradise-pink-500 max-w-[250px] mt-5 mb-6">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
    <div class=" flex text-sm">
        <p><?php echo get_the_date( 'd M y', '', '' ); ?></p>
        <spa class="text-smoke-white-900 px-2">|</spa>
        <div>
            <?php 
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
				echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
			}
			?>
        </div>
    </div>



</div>
<!-- card -->