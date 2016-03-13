<?php

$commenter = wp_get_current_commenter();
$req = get_option('require_name_email');
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields = array(
    'author' => '<div class="form-group comment-form-author">' .
    '<input class="inputtext" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /><label for="author">' . __('Name') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '</div>',
    'email' => '<div class="form-group comment-form-email">' .
    '<input class="inputtext" id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /><label for="email">' . __('Email') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '</div>',
);

$comments_args = array(
    'fields' => $fields
);

comment_form($comments_args);

