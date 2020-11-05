<?php
function validate_field_not_empty($field_value, &$field) {
    var_dump($field_value);

    if ($field_value === '') {
        $field['error'] = 'Ble nepaeina kazkas cia';
        return false;
    }
    return true;
}

function validate_form(&$form, $form_values){
    $is_valid = true;
    foreach ($form['fields'] as $field_id => &$field) {
        foreach ($field['validators'] ?? [] as $function_name) {
            $field_is_valid = $function_name($form_values[$field_id], $field);

            if (!$field_is_valid) {
                $is_valid = false;
                break;
            }
        }
    }
    return $is_valid;
}