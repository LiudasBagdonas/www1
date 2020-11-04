<?php

/**
 * @param $field_name
 * @param $field
 * @return string
 */
function input_attr($field_name, $field) {
    $attributes = [
            'name' => $field_name,
            'type' => $field['type'],
            'value' => $field['value'] ?? '',
        ] + ($field['extra']['attr'] ?? []);

    return html_attr($attributes);
}

/**
 * @param string $button_id
 * @param array $button
 * @return string
 */
function button_attr(string $button_id, array $button): string {

    $attributes = [
            'name' => 'action',
            'type' => $button['type'] ?? 'submit',
            'value' => $button_id,
        ] + ($button['extra']['attr'] ?? []);

    return html_attr($attributes);
}

/**
 * @param $form
 * @return string
 */
function html_attr($form){
    $string = '';
    foreach ($form as $index => $attribute) {
        $string .= " $index=\"$attribute\" ";
    }
    return $string;
}
