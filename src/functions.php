<?php
/**
 * GeneratePress child theme functions and definitions.
 */

 /* These styles will be applied to the Classic editor content */
add_editor_style(['xw-utils.css', 'editor.css']);

function fts_theme_enqueue_styles() {
    
    /* tinymce javascript, get API key form Tiny Cloud website (user admin@fifteensquared.net) and whitelist the fifteensquared.net domain there too */
    /* wp_enqueue_script( 'fts-tinymce', 'https://cdn.tiny.cloud/1/3nqk58mi7fiso6n7i8vus0p41qcmputdpdhc73fysew2qw9r/tinymce/5/tinymce.min.js', false ); */
    
    /* CSS to support blogs written with the Crossword Utilities */
    wp_enqueue_style( 'xw-utils-styles',
                      get_stylesheet_directory_uri() . '/xw-utils.css',
                      false,
                      wp_get_theme()->get('Version')
    );

    /* javascript to convert the comment form textarea input to a TinyMce rich text editor */
    /* wp_enqueue_script( 'fts_tinymce_comments',
                       get_stylesheet_directory_uri() . '/tinymce-comments.js',
                       false,
                       wp_get_theme()->get('Version',
                       true)
    ); */

}

/* register the scripts above to be enqueued at the appropriate time */
add_action( 'wp_enqueue_scripts', 'fts_theme_enqueue_styles' ); 

/* include miscellaneous php functions to support child theme */
include(__DIR__."/fifteensquared.php");

?>