<?php
/**
 * @param $form
 * @return mixed
 */
function get_clean_input($form) {
    $parameters = [];
    foreach ($form['fields'] as $index => $input) {
        $parameters[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $parameters);
}