<?php
require '../../bootloader.php';


if (!is_logged_in()) {
    header('Location: /login.php');
}

$form = [
    'attr' => [
        'method' => 'POST',
    ],
    'fields' => [
        'xaxes' => [
            'label' => 'X coordinates',
            'type' => 'number',
            'validators' => [
                'validate_field_not_empty',
                'validate_number'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'X coordinates...',
                    'class' => 'input-field',
                ]
            ]
        ],
        'yaxes' => [
            'label' => 'Y coordinates',
            'type' => 'number',
            'validators' => [
                'validate_field_not_empty',
                'validate_number'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Y coordinates...',
                    'class' => 'input-field',
                ]
            ]
        ],
        'color' => [
            'label' => 'Select color',
            'type' => 'select',
            'value' => 'option',
            'options' => ['black' => 'Black', 'red' => 'Red', 'blue' => 'Blue', 'green' => 'Green'],
            'validators' => [
                'validate_select'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'colors',
                    'class' => 'input-field',
                ]
            ]
        ],
    ],
    'buttons' => [
        'send' => [
            'title' => 'Upload',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn',
                ]
            ]
        ]
    ],
    'validators' => [
//        'validate_coordinates',
        'validate_coordinates_overlap'
    ]
];


$clean_inputs = get_clean_input($form);

if ($clean_inputs) {

    $is_valid = validate_form($form, $clean_inputs);

    if ($is_valid) {

        $user_id = [
            'id' => $_SESSION['email']
        ];

        $db->load();
        $db->createTable('items');
        $db->insertRow('items', $clean_inputs + $user_id);
        $db->save();

    }

}
$nav = nav();

?>
<html>
<head>
    <title>Add Item</title>
    <link rel="stylesheet" href="../media/styles.css">
</head>
<body>
<header>
    <?php require ROOT . './app/templates/nav.php';?>
</header>
<main>
    <?php require ROOT . './core/templates/form.tpl.php';?>
</main>
</body>
</html>
