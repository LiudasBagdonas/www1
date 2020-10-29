<?php
$size = 3;
$array = [
    'stringas',
    'vardas' => [
        'stringas',
        'dar viena verte' => [
            1,
            2,
            4,
            'random' => [
                'veikia?'
            ]
        ]
    ],
    1000
];

function print_array($array) {
    $string = '';

    foreach ($array as $index => $value) {
        if (substr($string, -1) === '.') {
            $string = substr_replace($string, ', ', -1);
        }

        if (!is_array($value)) {
            $string .= "$index: $value.";
        } else {
            $string .= "$index: " . print_array($value);
        }
    }
        
    return $string;
}
$array_formated = print_array($array);
var_dump($array_formated);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>

</body>
</html>