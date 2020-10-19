<?php
$stars_count = rand(5,80);
$line = '';

for($i = 0; $i <= $stars_count; $i++){
    for($j = 0; $j <= $i; $j++){
            $line .= '*';
    }
    $line .= '<br>';
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciklai</title>
    <style>

    </style>
</head>
<body>
    <p><?php print $line; ?></p>
</body>
</html>