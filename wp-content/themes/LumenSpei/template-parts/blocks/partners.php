<div class="partners">
    <div class="container">
        <div class="partners-inner">
            <?php if ( have_rows('partners') ) : 
                    $count = count(get_field('partners'));
                    $i = 1;
                ?>
            
                <?php while( have_rows('partners') ) : the_row(); ?>
            
                    <a class="partner-item" href="<?php the_sub_field('url'); ?>" target="_blank">
                        <img class="partner-logo" src="<?php echo get_sub_field('logo')['url']; ?>" alt="partner logo">
                    </a>

                    <?php if($i != $count) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/partner-delimiter.png'; ?>" alt="" class="partner-delimiter">
                    <?php endif; ?>
            
                <?php $i++; endwhile; ?>
            
            <?php endif; ?>
            
        </div>
    </div>
</div>