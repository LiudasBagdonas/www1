<?php
$kates = rand(1,3);
$sunys = rand(1,3);
$katasuniai = 0;

for($i = 1; $i <= $kates; $i++){
    for($j = 1; $j <= $sunys; $j++){
        if($pavyko = rand(0,1)){
            $katasuniai++;
            break;
        }
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciklai</title>
</head>
<body>
    <h1>Katasuniu Iseiga</h1>
    <h2>Dalyvavo <?php print $kates ?> kates ir <?php print $sunys ?> sunys</h2>
    <h3>Katasuniu iseiga: <?php print $katasuniai ?></h3>
</body>
</html>