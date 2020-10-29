<?php
$size = 3;

function generate_matrix($size){
    $array = [];
    for ($i = 0; $i <= $size; $i++) {
        for ($j = 0; $j <= $size; $j++) {
            $array[$i][$j] = rand(0,1);
        }
    }

    return $array;
}

function get_winning_rows($array) {
    $winner_list = [];
    foreach ($array as $key => $row) {
           if (count(array_unique($row)) === 1) {
                $winner_list[] = $key;
           }
    }
    return $winner_list;
}

$array = generate_matrix($size);
$winner_list = get_winning_rows($array);
var_dump($winner_list);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
    <table>
    <?php foreach ($array as $index => $value): ?>
        <tr class="<?php $index = in_array($index, $winner_list) ? print 'win_border' : ''; ?>">
            <?php foreach ($value as $line): ?>
                <td class="<?php print $line ? 'green' : 'red'; ?> "></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>