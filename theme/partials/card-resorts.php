

<div <?php post_class("item-card flex flex-col group"); ?>>

    <?php if ( has_post_thumbnail() ) { ?>


    <figure class="w-full aspect-video bg-sapphire-200 overflow-hidden rounded-lg">
        <a href="<?php the_permalink(); ?>" title=" <?php the_title(); ?>">
            <?php the_post_thumbnail( 'thumbi', array( 'class' => 'scale-100 hover:scale-110 w-full h-full object-cover transition ease-out duration-1000' ) );?>
    </figure>
    </a>
    <?php }    ?>
    <h3 class="text-3xl font-title font-extralight text-paradise-pink-500 max-w-[250px] my-8 mb-3">
        <a href="<?php the_permalink(); ?>" title=" <?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
</div>
<!-- card -->