<?php
$hurdle_jump = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10),];
$jump_height = rand(5,12);

function check_height($jump_height, $hurdle_jump) {
    foreach ($hurdle_jump as $height) {
        if($height > $jump_height){
            return false;
        }
    }
    return true;
}

var_dump(check_height($jump_height, $hurdle_jump));

$two_digits = rand(11,99);
function swap_numbers($number) {
    $reverse = strrev($number);
    if ($reverse >= $number) {
        return true;
    }
    return false;

}
var_dump(swap_numbers($two_digits));

$numbers_array = [80, 50, 60, 90, -50, 5, 0, 88,];

function sort_numbers(&$numbers_array) {
    sort($numbers_array);
}
sort_numbers($numbers_array);
var_dump($numbers_array);

$random_numbers = [rand(1,3000), rand(1,3000), rand(1,3000), rand(1,3000), rand(1,3000), rand(1,3000),];

function remove_odd(&$random_numbers) {
    foreach ($random_numbers as $index => &$number) {
        if ($number % 2 !== 0) {
            unset($random_numbers[$index]);
        }
    }
}
remove_odd($random_numbers);
var_dump($random_numbers)
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>

</body>
</html>
