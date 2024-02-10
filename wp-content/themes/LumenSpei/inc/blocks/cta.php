<?php
add_action('acf/init', 'LumenSpei_cta_block');

function LumenSpei_cta_block() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'cta-block',
            'title' => __('Cta Block'),
            'description' => __('Block that orange box with CTA'),
            'render_template' => 'template-parts/blocks/cta.php',
            'category' => 'lumenspei-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('cta, block'),
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