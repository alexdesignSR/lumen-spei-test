<?php
add_action('acf/init', 'LumenSpei_partners_block');

function LumenSpei_partners_block() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'partners-block',
            'title' => __('Partners'),
            'description' => __('Block that display our partners logos'),
            'render_template' => 'template-parts/blocks/partners.php',
            'category' => 'lumenspei-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('partners, logos'),
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