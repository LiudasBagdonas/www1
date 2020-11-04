<?php
var_dump($_POST);

$form = [
        'email' => [
            'label' => 'Email',
            'placeholder' => 'email@email.com',
            'type' => 'text',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Password...',
            'type' => 'password',
    ],
];

function get_clean_input($form) {
    $parameters = [];

    foreach ($form as $index => $input) {
        $parameters[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $parameters);
}
$clean_inputs = get_clean_input($form);
var_dump($clean_inputs);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
   <form method="POST">
        <?php foreach($form as $input_name => $input): ?>
            <label>
                <?php print $input['label'];?>
                <input name="<?php print $input_name;?>" type="<?php print $input['type'];?>" placeholder="<?php print $input['placeholder'];?>">
            </label>
        <?php endforeach; ?>
        <button name="button">Log In</button>
    </form>
</body>
</html>