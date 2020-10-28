<?php
$cards_numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A',];
$cards_type = ['Cirvu', 'Zvonku', 'Vynu', 'Kryziu'];
$full_deck = [];

foreach ($cards_type as $type) {
    foreach($cards_numbers as $number){
        $full_deck[] = [
                'type' => $type,
                'number' => $number,
        ];
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <article>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <?php for ($j = rand(0, count($full_deck)-1);$j <= count($full_deck)-1; $j = count($full_deck)): ?>
                <?php var_dump($j); ?>
                <p><?php print $full_deck[$j]['type'] . $full_deck[$j]['number']; ?></p>
                <?php unset($full_deck[$j]) ; ?>
            <?php endfor ?>
            <?php sort($full_deck); ?>
        <?php endfor; ?>
        <?php var_dump($full_deck); ?>
    </article>
</body>
</html>
