<?php

// Change comment cookie text
add_filter( 'comment_form_default_fields', 'tu_filter_comment_fields', 20 );
function tu_filter_comment_fields( $fields ) {
    $commenter = wp_get_current_commenter();

    $consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

    $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent">Remember me (please note that this saves a cookie in your current browser)</label></p>';

    return $fields;
}

// Remove comment URL box
add_action( 'after_setup_theme', 'wplogout_add_comment_url_filter' );
function wplogout_add_comment_url_filter() {
    add_filter( 'comment_form_default_fields', 'wplogout_disable_comment_url', 20 );
}

function wplogout_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}

// Remove text from search box

add_filter( 'generate_search_placeholder', 'tu_change_search_placeholder' );
function tu_change_search_placeholder() {
    return '';
}


?>