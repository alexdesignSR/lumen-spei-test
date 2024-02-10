<?php
    $cta_1 = get_field('cta_1');
    $cta_2 = get_field('cta_2');
?>
<section id="about" class="home-hero">
    <div class="container">
        <div class="home-hero-inner">
            <?php if ( $title = get_field('title') ) : ?>
                <h1 class="home-hero-title"><?php echo $title; ?></h1>
            <?php endif; ?>
            <?php if ( $text = get_field('text') ) : ?>
                <p class="home-hero-text"><?php echo $text; ?></p>
            <?php endif; ?>
            <div class="home-hero-image-wrapper">
                <div class="home-hero-image-placeholder">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/circle-star.png'; ?>" alt="circle star">
                </div>
                <?php if ( $image = get_field('image') ) : ?>
                    <img class="home-hero-image" src="<?php echo $image['url']; ?>" alt="home image">
                <?php endif; ?>
                <?php if ( $cta_1 ) : ?>
                    <div class="home-hero-ctas-wrapper">
                        <a class="btn btn-primary" href="<?php echo $cta_1['url']; ?>" target="<?php echo $cta_1['target']; ?>"><?php echo $cta_1['title']; ?> <span class="icon-arrow-right"></span></a>
                        <a class="btn btn-secondary" href="<?php echo $cta_2['url']; ?>" target="<?php echo $cta_2['target']; ?>"><?php echo $cta_2['title']; ?> <span class="icon-arrow-right"></span></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>