<?php
$speed_of_sound = 333;
$sec = 60;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciklai</title>
    <style>
    </style>
</head>
<body>
    <h1>Griaustinio zona</h1>
    <article><?php for($i = 1; $i <= 60; $i++){
        $db_max = 120;
        $dist = $speed_of_sound * $i;
        $leftover = $dist % 100 * 0.01;
        for($j = 1; $j <= $dist / 100; $j++){
                $db_max -= $db_max / 100 * 9;
        }
            $db_max -= $db_max / 100 * 9 * $leftover;
            print "<p>Po $i sec. ($dist m.): $db_max</p>" ;
        }
        ?>
    </article>
</body>
</html>