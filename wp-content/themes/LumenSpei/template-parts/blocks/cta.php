<section id="contact" class="cta-block">
    <div class="container">
        <div class="cta-block-inner">
            <img class="cta-block-image" src="<?php echo get_template_directory_uri() . '/assets/images/star.png'; ?>" alt="star">
            <div class="cta-block-top">
                <?php if ( $title = get_field('title') ) : ?>
                    <h2 class="cta-block-title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if ( $text = get_field('text') ) : ?>
                    <p class="cta-block-text"><?php echo $text; ?></p>
                <?php endif; ?>
            </div>
            <?php if ( $cta = get_field('cta') ) : ?>
                <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>" class="btn btn-secondary cta-block-btn"><?php echo $cta['title']; ?><span class="icon-arrow-right"></span></a>
            <?php endif; ?>
        </div>
    </div>
</section>