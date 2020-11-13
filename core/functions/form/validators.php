<?php

/**
 * Funkcija patikrina ar input'o laukelis nebuvo paliktas tuščias.
 *
 * Jeigu rasta tuščia vertė - input'o duomenų masyve 'error' indeksu įrašoma
 * kilusi klaida.
 * Funkcija klaidos atveju grąžina false, kitu - true.
 *
 * @param string $field_value išvalyto input'o vertė.
 * @param array $field vieno input'o duomenų masyvas.
 * @return bool
 */
/**
 * @param $field_value
 * @param array $field
 * @return bool
 */

function validate_field_not_empty($field_value, array &$field): bool
{
    if ($field_value === '') {
        $field['error'] = 'neivedei nieko';
        return false;
    }

    return true;
}

/**
 * @param $field_value
 * @param array $field
 * @return bool
 */

function validate_age($field_value, array &$field): bool
{
    if ($field_value < 10 || $field_value > 100) {
        $field['error'] = 'amzius blogas';
        return false;
    }

    return true;

}

/**
 * @param $field_value
 * @param array $field
 * @return bool
 */

function validate_name($field_value, array &$field): bool
{
    if (str_word_count($field_value) < 2) {
        $field['error'] = 'du zodziai turi but';

        return false;
    }

    return true;
}

/**
 * @param $field_value
 * @param array $field
 * @param $params 'Array of min and max ranges'
 * @return bool
 */
function validate_field_range(string $field_value, array &$field, array $params): bool
{
    if ($field_value < $params['min'] || $field_value > $params['max']) {
        return false;
    }

    return true;
}

function validate_fields_match($form_values, &$form, $params): bool
{
    foreach($params as $field_index) {
        if ($form_values[$params[0]] !== $form_values[$field_index]) {
            $form['fields'][$field_index]['error'] = strtr('Laukelis nesutampa su @laukas ', [
                '@laukas' => $form['fields'][$params[0]]['label']
            ]);
            return false;
        }
    }
    return true;
}

/**
 * Tikrina ar pasirinktas option yra option masyve.
 *
 * @param $field_input
 * @param $field
 * @return bool
 */
function validate_select($field_input, &$field)
{
    if (!isset($field['options'][$field_input])) {
        $field['error'] = 'Tokio pasirinkimo nera';
        return false;
    }
    return true;
}