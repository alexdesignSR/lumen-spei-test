<div class="statistic-number">
    <div class="container">
        <div class="statistic-number-inner">
            <?php if ( have_rows('statistics') ) : ?>
            
                <?php while( have_rows('statistics') ) : the_row(); ?>
            
                    <div class="statistic-box">
                        <span class="statistic-box-number js-statistic-number"><?php the_sub_field('number'); ?></span>
                        <p class="statistic-box-text"><?php the_sub_field('text'); ?></p>
                    </div>
            
                <?php endwhile; ?>
            
            <?php endif; ?>
            
        </div>
    </div>
</div>