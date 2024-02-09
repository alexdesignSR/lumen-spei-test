<section class="services">
    <div class="container">
        <div class="services-inner">
            <?php if ( $title = get_field('title') ) : ?>
                <h2 class="services-title"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php
            
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'service',
                );
                
                $query = new WP_Query( $args );
            
            ?>
            
            <?php if( $query->have_posts() ) : $i = 1; ?>

                <div class="services-list">

                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                        <a href="<?php the_permalink(); ?>" class="services-item">
                            <span class="services-item-number"><?php echo ($i < 10) ? '0' . $i : $i; ?></span>
                            <div class="services-item-heading">
                                <h3 class="services-item-title"><?php the_title(); ?></h3>
                                <?php if ( $additional_description = get_field('additional_description', get_the_ID()) ) : ?>
                                    <span class="services-item-description"><?php echo $additional_description; ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if ( $small_image = get_field('small_image', get_the_ID()) ) : ?>
                                <img src="<?php echo $small_image['url']; ?>" alt="services image" class="services-item-img">
                            <?php endif; ?>
                            <span class="icon-arrow-right services-item-icon"></span>
                        </a>
                        
                    <?php $i++; endwhile; ?>

                </div>

            <?php endif; ?>
            
            <?php wp_reset_query(); ?>
            
        </div>
    </div>
</section>