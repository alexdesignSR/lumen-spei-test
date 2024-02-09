<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" class="site-header-logo-link"><img src="<?php echo get_field('logo_header', 'option') ? get_field('logo_header', 'option')['url'] : get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo"></a>
                <nav class="site-header-nav-menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-header-menu',
                        'menu_class' => 'primary-menu-header',
                        'container_class' => 'primary-header-menu-container'
                    ]); ?>
                </nav>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
<!-- #masthead -->