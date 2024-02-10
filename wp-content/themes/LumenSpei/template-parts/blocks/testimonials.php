<?php

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'testimonial',
);

$testimonials = new WP_Query( $args );

?>

<?php wp_reset_query(); ?>


<section class="testimonials">
    <div class="testimonials-bg">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="container">
        <div class="testimonials-inner">
            <?php if ( $title = get_field('title') ) : ?>
                <h2 class="testimonials-title"><?php echo $title; ?></h2>
            <?php endif; ?>
            <div class="js-testimonials-slider-top">
                <?php if( $testimonials->have_posts() ) : ?>
                    
                    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                    
                        <div class="testimonial-top-item">
                            <div class="testimonial-top-item-inner">
                                <div class="testimonial-top-item-text">
                                    <?php echo get_field('testimonial_text', get_the_ID()); ?>
                                </div>
                                <h5 class="testimonial-top-item-author"><?php the_title(); ?></h5>
                                <span class="testimonial-top-item-author-role"><?php echo get_field('author_role', get_the_ID()); ?></span>
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="js-testimonials-slider-bottom">
                <?php if( $testimonials->have_posts() ) : ?>
                    
                    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                    
                        <div class="testimonial-bottom-item">
                            <div class="testimonial-bottom-item-inner">
                                <img src="<?php echo get_field('author_image', get_the_ID())['url']; ?>" alt="author image" class="testimonial-bottom-item-img">
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>