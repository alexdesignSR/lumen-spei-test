<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="portfolio-inner">
            <?php if ( $title = get_field('title') ) : ?>
                <h2 class="portfolio-title"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php
            
                $args = array(
                    'posts_per_page' => 5,
                    'post_type' => 'portfolio',
                );
                
                $portfolio = new WP_Query( $args );
            
            ?>
            
            <?php if( $portfolio->have_posts() ) : ?>

                <div class="portfolio-list">

                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); 
                        $term = get_the_terms(get_the_ID(), 'portfolio-category')[0];
                    ?>

                        <div class="portfolio-item">
                            <a href="<?php the_permalink(); ?>" class="portfolio-item-image-wrapper">
                                <span class="portfolio-item-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></span>
                            </a>
                            <div class="portfolio-item-content">
                                <div class="portfolio-item-heading">
                                    <h3 class="portfolio-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <a class="portfolio-item-term" href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
                                </div>
                                <?php if ( $excerpt = get_field('excerpt', get_the_ID()) ) : ?>
                                    <p class="entry-content portfolio-item-excerpt"><?php echo $excerpt; ?></p>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-secondary"><?php _e('See More', 'LumenSpei'); ?><span class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                        
                    <?php endwhile; ?>
                    <div class="portfolio-view-all">
                        <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="portfolio-view-all-inner">
                            <span class="icon-plus"></span>
                            <span class="portfolio-view-all-text"><?php _e('View More', 'LumenSpei'); ?></span>
                        </a>
                    </div>
                </div>

            <?php endif; ?>
            
            <?php wp_reset_query(); ?>
            
        </div>
    </div>
</section>