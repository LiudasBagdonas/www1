<?php
//$gatve = [];
$letters = ['g', 's', 'r', 'p', 'F', 'r', 'R', 'Q',];
$value = 'r';
$to = '8';

/**
 * @param array $letters
 * @param string $value
 * @return int
 */
function count_values($letters, $value) {
    $count = 0;
    foreach ($letters as $letter) {
        if ($letter === $value) {$count += 1;}
    }
    return $count;
}

$result = count_values($letters, $value);
var_dump($result);

function change_values(&$letters, $value, $to) {
    foreach ($letters as &$letter) {
        if ($letter === $value) {
            $letter = $to;
        }
    }
}
change_values($letters, $value, $to);
var_dump($letters);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>References</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>

</body>
</html>