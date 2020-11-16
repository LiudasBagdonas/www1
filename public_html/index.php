<?php
require '../bootloader.php';

//$form = [
//    'attr' => [
//        'method' => 'POST',
//    ],
//    'fields' => [
//        'email' => [
//            'label' => 'Email',
//            'type' => 'text',
//            'value' => 'lauris@gmail.com',
//            'validators' => [
//                'validate_field_not_empty',
//            ],
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'lauris@gmail.com',
//                    'class' => 'input-field',
//                ]
//            ]
//        ],
//        'password' => [
//            'label' => 'Password',
//            'type' => 'password',
//            'validators' => [
//                'validate_field_not_empty',
//            ],
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'password',
//                    'class' => 'input-field',
//                ]
//            ]
//        ],
//    ],
//    'buttons' => [
//        'login' => [
//            'title' => 'Log in',
//            'type' => 'submit',
//            'extra' => [
//                'attr' => [
//                    'class' => 'btn',
//                ]
//            ]
//        ],
//        'clear' => [
//            'title' => 'Clear',
//            'type' => 'reset',
//            'extra' => [
//                'attr' => [
//                    'class' => 'btn',
//                ]
//            ]
//        ],
//    ]
//];
//
//$clean_inputs = get_clean_input($form);
//
//if ($clean_inputs) {
//    validate_form($form, $clean_inputs);
//}
$form = [
    'attr' => [
        'method' => 'POST',
    ],
    'fields' => [
//        'password' => [
//            'label' => 'Password',
//            'type' => 'text',
//            'validators' => [
//
//                'validate_field_range' => [
//                    'min' => 100,
//                    'max' => 200
//                ]
//            ],
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter password',
//                ]
//            ]
//        ],
//        'passwords_repeat' => [
//            'label' => 'Repeat password',
//            'type' => 'text',
//            'validators' => [
//
//                'validate_field_range' => [
//                    'min' => 50,
//                    'max' => 100
//                ]
//            ],
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Repeat password',
//                ]
//            ]
//        ],
        'head' => [
            'label' => 'Head',
            'type' => 'select',
            'options' => [
                'head_afro' => 'Afro',
                'head_skinhead' => 'Skinhead',
            ],
            'value' => 'head',
            'validators' => [
                'validate_select',
            ]
        ],
        'body' => [
            'label' => 'Body',
            'type' => 'select',
            'options' => [
                'body_slim' => 'Slim',
                'body_muscular' => 'Muscular',
            ],
            'value' => 'body',
            'validators' => [
                'validate_select',
            ]
        ],
        'message' => [
            'label' => 'Message area',
            'type' => 'textarea',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter message...',
                    'rows' => 5,
                    'cols' => 20,
                ]
            ],
            'value' => 'Tai yra verte.',
        ],
    ],
    'buttons' => [
        'login' => [
            'title' => 'Log in',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn',
                ]
            ]
        ],
    ],
//    'validators' => [
//        'validate_fields_match' => [
//            'password',
//            'passwords_repeat',
//        ]
//    ]
];


$clean_inputs = get_clean_input($form);


if ($clean_inputs) {
    $success = validate_form($form, $clean_inputs);
    if ($success) {
        $body_parts = $clean_inputs;
    }
}
array_to_file($clean_inputs, ROOT . '/data/db.json');
var_dump($clean_inputs);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./media/style.css">
    <title>Forms</title>
</head>
<body>
<?php require ROOT . '/core/templates/form.tpl.php'; ?>
<article>
    <?php if ($clean_inputs ?? false) : ?>
        <section class="character">
            <?php foreach ($body_parts as $parts) : ?>
                <div class="<?php print $parts; ?>"></div>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>
</article>
</body>
</html>