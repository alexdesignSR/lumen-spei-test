<?php
add_action('acf/init', 'LumenSpei_testimonials_block');

function LumenSpei_testimonials_block() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'testimonials-block',
            'title' => __('Testimonials'),
            'description' => __('Block that display testimonials'),
            'render_template' => 'template-parts/blocks/testimonials.php',
            'category' => 'lumenspei-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('testimonials, list'),
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