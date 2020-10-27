<?php
$string = "20.3k 3.8k 7.7k 992";
$string_arr = explode(' ', $string);
$new_arr = [];

foreach ($string_arr as $value) {
    if(substr($value, - 1) === 'k'){
        $value = rtrim($value, "k");
        $value *= 1000;
        $new_arr[] = intval($value);
    } else {
        $value *= 1;
        $new_arr[] = $value;
    }
}

var_dump($new_arr)
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
