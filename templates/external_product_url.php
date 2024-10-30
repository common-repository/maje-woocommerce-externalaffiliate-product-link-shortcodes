<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

$url = esc_url( $product_url . $link_params_prop );

$return = <<<EOT
<a href="{$url}" {$link_target_prop} {$link_title_prop} {$link_rel_prop} >{$content}</a>
EOT;
