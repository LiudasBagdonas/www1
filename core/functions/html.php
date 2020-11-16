<?php

/**
 * Iš duoto duomenų masyvo sukuria atributus
 * deklaruojantį tekstą HTML elementui. (pavadinimas="vertė")
 * @param array $attr masyvas HTML atributų porų.
 * @return string HTML atributai.
 */
function html_attr($attr)
{
    $value = '';
    foreach ($attr as $index => $names) {
        $value .= "$index=\"$names\" ";
    }
    return $value;
}

/**
 * Jobana funkcija kuri isspausdina formos tago atributus
 *
 * @param $form
 * @return string
 */
function form_attr($form)
{
    return html_attr(($form['attr'] ?? []) + [
            'method' => 'POST',
        ]);

}


/**
 * Iš duoto duomenų masyvo sukuria atributus
 * deklaruojantį tekstą skirtą HTML input elementui.
 *
 * Sumuojami atributai yra name, type, value ir visi likę
 * atributai iš $field['extra']['attr'] masyvo.
 *
 * @param string $field_name HTML input'o pavadinimas.
 * @param array $field masyvas HTML input atributų.
 * @return string input elemento atributai.
 */
function input_attr($field_name, $field)
{
    $attr_value = [
            'name' => $field_name,
            'type' => $field['type'],
            'value' => $field['value'] ?? '',
        ] + ($field['extra']['attr'] ?? []);

    return html_attr($attr_value);
}


/**
 * Iš duoto duomenų masyvo sukuria atributus
 * deklaruojantį tekstą HTML button elementui.
 *
 * name atributas visad turi likti 'action'.
 *
 * @param string $button_id HTML button'o value atributas.
 * @param array $button masyvas HTML button atributų.
 * @return string input elemento atributai.
 */
function button_attr($button_id, $button)
{
    $attr_value = [
            'name' => 'action',
            'type' => $button['type'],
            'value' => $button_id,
        ] + ($button['extra']['attr'] ?? []);

    return html_attr($attr_value);
}

/**
 * @param string $field_name
 * @param array $field
 * @return string
 */
function select_attr(string $field_name, array $field): string
{
    $attributes = [
            'name' => $field_name,
        ] + ($field['extra']['attr'] ?? []);
    return html_attr($attributes);
}
/**
 * @param string $option_id
 * @param array $field
 * @return string
 */
function option_attr(string $option_id, array $field): string
{
    $attributes = [
        'value' => $option_id
    ];
    if ($option_id == $field['value']) {
        $attributes['selected'] = 'selected';
    }
    return html_attr($attributes);
}

/**
 * @param string $field_id
 * @param array $field
 * @return string
 */
function textarea_attr(string $field_id, array $field): string
{
    $attr_value = [
            'name' => $field_id,
           ] + ($field['extra']['attr'] ?? []);

    return html_attr($attr_value);
}