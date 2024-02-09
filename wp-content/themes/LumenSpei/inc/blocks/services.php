<?php
add_action('acf/init', 'LumenSpei_services_block');

function LumenSpei_services_block() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'services-block',
            'title' => __('Services'),
            'description' => __('Block that display services we do'),
            'render_template' => 'template-parts/blocks/services.php',
            'category' => 'lumenspei-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('services, list'),
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