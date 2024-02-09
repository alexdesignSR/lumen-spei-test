<?php
add_action('acf/init', 'LumenSpei_portfolio_block');

function LumenSpei_portfolio_block() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'portfolio-block',
            'title' => __('Portfolio'),
            'description' => __('Block that display our most recent portfolio'),
            'render_template' => 'template-parts/blocks/portfolio.php',
            'category' => 'lumenspei-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('portfolio, list'),
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