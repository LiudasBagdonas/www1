<?php
$words = [
    'Penis','ananasas','Aidas', 'kiausai','alus','baras', 'triusis', 'bega','kukulis','papai','niekina',
];
$text = [];
$esey = '';
$words_amount = rand(5,30);

for($i = 1; $i <= $words_amount; $i++){
    $rand_word = rand(0, count($words) -1);
    $esey .= $words[$rand_word] . ' ';
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <style>
    </style>
</head>
<body>
    <h1>Lietuviu Egzaminas</h1>
    <p>
            <?php print $esey; ?>
    </p>
</body>
</html>