<?php

/* hook to disable the fullscreen mode in editor. */
add_action( 'enqueue_block_editor_assets','disable_editor_fullscreen_by_default' );
function disable_editor_fullscreen_by_default() {
	$script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
	wp_add_inline_script( 'wp-blocks', $script );
}
