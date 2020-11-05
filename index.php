<?php
require_once './functions/html.php';
require_once './functions/form.php';
require_once './functions/validators.php';
var_dump($_POST);
$form = [
        'fields' => [
            'email' => [
                'label' => 'Email',
                'type' => 'text',
                'validators' => [
                    'validate_field_not_empty',
                ],
                'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter email',
                            'class' => 'input-field'
                        ]
                ]
            ],
            'password' => [
                'label' => 'Password',
                'type' => 'password',
                'validators' => [
                    'validate_field_not_empty',
                ],
                'extra' => [
                    'attr' => [
                        'placeholder' => 'Enter password',
                        'class' => 'input-field'
                    ]
                ]
            ],
        ],
        'buttons' => [
            'login' => [
                'title' => 'Log In',
                'type' => 'submit',
                'extra' => [
                    'attr' => [
                        'class' => 'btn'
                    ]
                ]
            ],
            'clear' => [
                'title' => 'Clear',
                'type' => 'clear',
                'extra' => [
                    'attr' => [
                        'class' => 'btn'
                    ]
                ]
            ],
        ],
];

$clean_inputs = get_clean_input($form);

if ($clean_inputs) {
    validate_form($form, $clean_inputs);

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
    <style>
        input {
            display: block;
        }
    </style>
</head>
<body>
    <form method="POST">
        <?php foreach ($form['fields'] as $input_name => $input): ?>
            <label for="">
                <span><?php print $input['label']; ?></span>
                <input <?php print input_attr($input_name, $input); ?>>
                <?php if(isset($input['error'])): ?>
                    <p><?php print $input['error']; ?></p>
                <?php endif; ?>
            </label>
        <?php endforeach; ?>
        <?php foreach ($form['buttons'] as $button_id => $button): ?>
            <button <?php print button_attr($button_id, $button); ?>>
                <?php print $button['title']; ?>
            </button>
        <?php endforeach; ?>
    </form>
</body>
</html>