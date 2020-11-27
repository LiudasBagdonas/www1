<?php
/**
 * Check if login is successful. Input values must match values in credentials array.
 *
 * @param $form_values
 * @param array $form
 * @return bool
 */
function validate_login($form_values, array &$form): bool
{
    $db = new FileDB(DB_FILE);
    $db->load();
    $credentials = $db->getRowWhere('credentials',
        ['email' => $form_values['email'], 'password' => $form_values['password']]);

    if ($db->getRowWhere('credentials',[
        'email' => $form_values['email'],
        'password' => $form_values['password']])) {
        return true;
    }

    $form['error'] = 'Unable to login: check your email and/or password';

    return false;
}

/**
 * Check if email is available for registration, i.e. if it is not already taken
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool
{
    $db = new FileDB(DB_FILE);
    $db->load();

    if ($db->tableExists('credentials')) {
        $email_taken = $db->getRowWhere('credentials', ['email' => $field_value]);
        if ($email_taken) {
            $field['error'] = 'Email is already taken: enter new email.';

            return false;
        }

        return true;
    }
}