<?php
$array = [
    [1, 0, 0,],
    [1, 1, 0,],
    [1, 0, 1,],
];

$array_reverse = [];

foreach($array as $row_index => $row) {
    foreach ($row as $col_index => $value) {
        if ($value === 1) {
            $array_reverse[$row_index][$col_index] = 0;
        } else {
            $array_reverse[$row_index][$col_index] = 1;
        }
    }
}

var_dump($array_reverse);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

</body>
</html>
