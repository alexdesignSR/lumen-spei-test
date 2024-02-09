<?php
add_action('acf/init', 'LumenSpei_home_hero_content');

function LumenSpei_home_hero_content() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'home-hero',
            'title' => __('Home Hero'),
            'description' => __('Block that displays big title, text and and image with CTAs'),
            'render_template' => 'template-parts/blocks/home-hero.php',
            'category' => 'lumenspei-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('home, hero'),
            'example' => [
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        '_is_preview'   => 'true'
                    )
                )
            ],
        ));
    }
}