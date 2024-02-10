<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LumenSpei
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-footer-inner">
				<div class="site-footer-column site-footer-column-1">
					<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" class="site-footer-logo-link"><img src="<?php echo get_field('logo_footer', 'option') ? get_field('logo_footer', 'option')['url'] : get_template_directory_uri() . '/assets/images/logo-footer.png'; ?>" alt="logo"></a>
					<?php if ( $text_footer_1 = get_field('text_footer_1', 'option') ) : ?>
						<div class="site-footer-column-text">
							<?php echo $text_footer_1; ?>
						</div>
					<?php endif; ?>
					<?php if ( $address = get_field('address', 'option') ) : ?>
						<p class="site-footer-address"><?php echo $address; ?></p>
					<?php endif; ?>
				</div>
				<div class="site-footer-column site-footer-column-2">
					<?php if ( $title_column_2 = get_field('title_column_2', 'option') ) : ?>
						<h6 class="site-footer-title"><?php echo $title_column_2; ?></h6>
					<?php endif; ?>
					<nav class="site-footer-nav-menu">
						<?php wp_nav_menu([
							'theme_location' => 'footer-1',
							'menu_id' => 'footer-menu',
							'menu_class' => 'footer-menu',
							'container_class' => 'footer-menu-container'
						]); ?>
					</nav>
				</div>
				<div class="site-footer-column site-footer-column-3">
					<?php if ( $title_column_3 = get_field('title_column_3', 'option') ) : ?>
						<h6 class="site-footer-title"><?php echo $title_column_3; ?></h6>
					<?php endif; ?>
					<form class="site-footer-form" action="/">
						<input type="email" placeholder="Email Address">
						<button class="btn btn-primary" type="submit">Subscribe <span class="icon-arrow-right"></span></button>
					</form>
					<?php if ( have_rows('socials', 'option') ) : 
							$count = count(get_field('socials', 'option'));
							$i = 1;
						?>

						<div class="site-footer-soc">

							<?php while( have_rows('socials', 'option') ) : the_row(); ?>
						
								<a class="site-footer-soc-link" href="<?php echo get_sub_field('link')['url']; ?>" target="_blank"><?php echo get_sub_field('link')['title']; ?></a>
								<?php if($i != $count) : ?>
									<span class="site-footer-soc-limiter">|</span>
								<?php endif; ?>
						
							<?php $i++; endwhile; ?>

						</div>
					
					<?php endif; ?>
					
				</div>
				<div class="site-footer-bottom">
					<?php if ( $copyright = get_field('copyright', 'option') ) : ?>
						<p class="site-footer-copyright-text"><?php echo $copyright; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
