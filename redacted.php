<?php
/*
Plugin Name: [REDACTED] Shortcode
Version: 1.0
Description: Replace content with [REDACTED].
*/

function akv3_shortcode_redacted($atts, $content) {
	if (is_single()) {
		$output = '<span class="redacted">REDACTED</span>';
	}
	else {
		$output = '[REDACTED]';
	}
	return $output;
}
add_shortcode('redacted', 'akv3_shortcode_redacted');
