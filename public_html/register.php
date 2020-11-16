<?php
require '../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST',
    ],
    'fields' => [
        'email' => [
            'label' => 'Email',
            'type' => 'email',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter email. pls',
                    'class' => 'input-field',
                ],
                'save' => true,
            ]
        ],
        'password' => [
            'label' => 'Password',
            'type' => 'password',
            'validators' => [

            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter password',
                ],
                'save' => true,
            ]
        ],
        'passwords_repeat' => [
            'label' => 'Repeat password',
            'type' => 'password',
            'validators' => [

            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Repeat password',
                ]
            ]
        ],
    ],
    'buttons' => [
        'login' => [
            'title' => 'Registruotis',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn',
                ]
            ]
        ],
    ],
    'validators' => [
        'validate_fields_match' => [
            'password',
            'passwords_repeat',
        ],
    ],
];


$clean_inputs = get_clean_input($form);


if ($clean_inputs) {
    $success = validate_form($form, $clean_inputs);

    if( $success) {
        unset($clean_inputs['passwords_repeat']);
            array_to_file($clean_inputs, '../data/db.json');
            $siuntimas_nahuj = 'mldc tu cia esi';
    } else {
        $siuntimas_nahuj = 'eik nahuj';
    }
}

$returned_arr = file_to_array('../data/db.json');
var_dump($returned_arr);
?>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="./media/style.css">
</head>
<body>
<?php require ROOT . '/core/templates/form.tpl.php'; ?>
<?php if ($clean_inputs ?? ''): ?>
    <p><?php print $siuntimas_nahuj; ?></p>
<?php endif; ?>
</body>
</html>
