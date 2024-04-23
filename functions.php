<?php

function enqueue_custom_block_styles() {

// Scan our styles folder to locate block styles.
$files = glob( get_template_directory() . '/assets/styles/*.css' );

foreach ( $files as $file ) {

    // Get the filename and core block name.
    $filename   = basename( $file, '.css' );
    $block_name = str_replace( 'core-', 'core/', $filename );

    wp_enqueue_block_style(
        $block_name,
        array(
            'handle' => "cm-blocks-{$filename}",
            'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
            'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
        )
    );
}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );

