<?php
$x = rand(1,10);
$y = rand(1,10);

function sum($x, $y){
    return $x + $y;

}

$sum = sum($x, $y);

$h1 = "$x + $y = $sum";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
    <h1><?php print $h1; ?></h1>
</body>
</html>