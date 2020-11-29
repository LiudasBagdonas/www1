<?php

// //////////////////////////////
// [1] FORM VALIDATORS
// //////////////////////////////

/**
 * Check if field values are the same
 *
 * @param $form_values
 * @param array $form
 * @param array $params
 * @return bool
 */
function validate_fields_match($form_values, array &$form, array $params): bool
{
    foreach ($params as $field_index) {
        if ($form_values[$params[0]] !== $form_values[$field_index]) {
            $form['fields'][$field_index]['error'] = strtr('Field does not match with @field field', [
                '@field' => $form['fields'][$params[0]]['label']
            ]);

            return false;
        }
    }

    return true;
}

// //////////////////////////////
// [2] FIELD VALIDATORS
// //////////////////////////////

/**
 * Check if field is not empty
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_not_empty(string $field_value, array &$field): bool
{

    if ($field_value == '') {
        $field['error'] = 'Field must be filled';
        return false;
    }

    return true;
}

/**
 * Chef if field contains space
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_contains_space(string $field_value, array &$field): bool
{
    if (str_word_count(trim($field_value)) < 2) {
        $field['error'] = 'Field must contain space';
        return false;
    }

    return true;
}

/**
 * Chef if number is within the min and max range.
 *
 * @param string $field_value
 * @param array $field
 * @param array $params
 * @return bool
 */
function validate_field_range(string $field_value, array &$field, array $params): bool
{
    if ($field_value < $params['min'] || $field_value > $params['max']) {
        $field['error'] = strtr('Insert a number between @min - @max!', [
            '@min' => $params['min'],
            '@max' => $params['max']
        ]);

        return false;
    }

    return true;
}

/**
 * Check if selected value is one of the possible options in options array
 *
 * @param string $field_input
 * @param array $field
 * @return bool
 */
function validate_select(string $field_input, array &$field): bool
{
    if (!isset($field['options'][$field_input])) {
        $field['error'] = 'Color doesn\'t exist';

        return false;
    }

    return true;
}

/**
 * Check if provided email is in correct format
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_email(string $field_value, array &$field): bool
{
    if (!preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/', $field_value)) {
        $field['error'] = 'Invalid email format';

        return false;
    }

    return true;
}

/**
 * Function checks if input area is filled with numbers.
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_number(string $field_value, array &$field): bool
{
    if (is_numeric($field_value)) {

        return true;
    }
    $field['error'] = 'Price must be written by numbers.';
    return false;
}

/**
 * Check if coordinate is not taken and coordinates are in appropriate range.
 * @param $form_values
 * @param array $form
 * @return bool
 */
function validate_coordinates_overlap($form_values, array &$form): bool
{
    $db = new FileDB(DB_FILE);
    $db->load();
    $db_data = $db->getData();
    $result = true;

    if (($form_values['xaxes'] < 0 || $form_values['xaxes'] > 490) ||
        ($form_values['yaxes'] < 0 || $form_values['yaxes'] > 490)) {

        $form['error'] = 'Coordinates must be between 0 and 490';
        return false;
    }

    if (count($db_data['items']) > 0) {
        foreach ($db_data['items'] as $item) {
            $xaxes = $item['xaxes'] - $form_values['xaxes'];
            $yaxes = $item['yaxes'] - $form_values['yaxes'];

            if ($xaxes <= -10 || $xaxes >= 10) {
                $result = true;
            } else if ($yaxes <= -10 || $yaxes >= 10) {
                $result = true;
            } else {
                $form['error'] = 'Coordinates taken';

                return false;
            }

        }
    }
    if($result) {
        return true;
    }
    $form['error'] = 'Coordinates taken';

    return false;
}

