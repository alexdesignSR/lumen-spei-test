<?php

function text_with_cta($atts, $text = '') { 
  
    // Things that you want to do.
    $message = '<span class="text-with-switch">' . esc_attr($text) . '<span class="switch"></span></span>';
      
    // Output needs to be return
    return $message;
}
    // register shortcode
add_shortcode('switch', 'text_with_cta');