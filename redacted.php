<?php
/*
Plugin Name: [REDACTED] Shortcode
Version: 1.0
Description: Replace content with [REDACTED].
*/

function akv3_shortcode_redacted($atts, $content) {
// allows for styling as desired in the single post view
	if (is_single() || apply_filters('akv3_shortcode_redacted_forced', false)) {
		$output = '<span class="redacted">'.__('REDACTED', 'ak-redacted').'</span>';
	}
// handles situations where tags are stripped (feeds, excerpts, etc.)
	else {
		$output = __('[REDACTED]', 'ak-redacted');
	}
	return $output;
}
add_shortcode('redacted', 'akv3_shortcode_redacted');
