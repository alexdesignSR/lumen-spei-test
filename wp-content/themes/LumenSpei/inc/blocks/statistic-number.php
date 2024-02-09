<?php
add_action('acf/init', 'LumenSpei_statistic_number_block');

function LumenSpei_statistic_number_block() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'statistic-number',
            'title' => __('Statistic Number'),
            'description' => __('Block that displays our statistics in numbers'),
            'render_template' => 'template-parts/blocks/statistic-number.php',
            'category' => 'lumenspei-blocks',
            'icon' => 'layout',
            'mode' => 'edit',
            'keywords' => array('number, statistic'),
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