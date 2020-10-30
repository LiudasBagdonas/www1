<?php

function make_deck(){
    $cards_numbers = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A',];
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
    return $full_deck;
}

function draw_cards($full_deck) {
    $cards = [];
    for ($i = 1; $i <= 5; $i++){
        $rand_numb = rand(0, count($full_deck)-1);

        $cards[] = [
            'type' => $full_deck[$rand_numb]['type'],
            'number' => $full_deck[$rand_numb]['number'],
            ];
        unset($full_deck[$rand_numb]);
        sort($full_deck);
    }
    return $cards;
}

$full_deck = make_deck();
$drawed_cards = draw_cards($full_deck);

function is_flush($drawed_cards) {
    $is_flush = 1;
    for ($i = 1; $i <= 4; $i++) {

        if ($drawed_cards[0]['type'] === $drawed_cards[$i]['type']) {
            $is_flush += 1;
        } else {
            break;
        }
    }

    if ($is_flush === 5) {
        return 'Yay, flush!';
    } else {
        return 'Fuck, no flush :(';
    }
}

$flush = is_flush($drawed_cards);

function count_pair($drawed_cards) {
    $same = [];

        for ($i = 0; $i < 5; ++$i) {
            $card = $drawed_cards[$i]['number'];
            if (isset($same[$card])) {
                $same[$card]++;
            } else {
                $same[$card] = 1;
            }

        }

    return $same;
}

$pairs = count_pair($drawed_cards);

function pair_check($pairs){
var_dump($pairs);
    $pairs_count = 0;
    foreach ($pairs as $value) {
        if ($value === 2) {
            $pairs_count += 1;
        }
        if ($value === 3) {

            if($pairs_count === 1){
                return 'Full House';
            }
            return 'Three of a kind';
        }
        if ($value === 4) {
            return 'Four of a kind';
        }
    }
    return "$pairs_count poros";
}

$fullhouse = [
        2 => 1,
        3 => 3,
        4 => 1,
];
$have_pair = pair_check($fullhouse);
var_dump($have_pair);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">
    <style>
        article {
            display: flex;
        }
        .card {
            height: 200px;
            width: 120px;
            margin: 10px;
            position: relative;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        span {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 25px;
        }
        .cirvu, .zvonku {
            color: red;
            border: 1px solid red;
        }
        .vynu, .kryziu {
            color: black;
            border: 1px solid black;
        }
        .card-img-box {
            height: 80px;
            width: 80px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .card-img-box-vynu {
            background-image: url("https://p7.hiclipart.com/preview/285/616/906/ace-of-spades-computer-icons-playing-card-symbol.jpg");
        }
        .card-img-box-zvonku {
            background-image: url("https://www.clipartkey.com/mpngs/m/16-160726_diamond-card-symbol-png.png");
        }
        .card-img-box-kryziu {
            background-image: url("https://img1.pnghut.com/7/9/8/L3AVCLXpBE/suit-playing-card-silhouette-spades-standard-52card-deck.jpg");
        }
        .card-img-box-cirvu {
            background-image: url("https://img1.pnghut.com/5/19/5/djZxQVJJU2/tree-flower-frame-cartoon-heart.jpg");
        }
    </style>
</head>
<body>
    <article>
        <?php foreach ($drawed_cards as $card): ?>
            <div class="card <?php print $card['type']; ?> ">
                <span><?php print $card['number']; ?></span>
                <div class="card-img-box card-img-box-<?php print $card['type']; ?>">
                </div>
            </div>
        <?php endforeach; ?>
    </article>
    <h1><?php print $flush; ?></h1>
    <h1><?php print $have_pair; ?></h1>
</body>
</html>
