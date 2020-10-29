<?php

function make_deck(){
    $cards_numbers = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A',];
    $cards_type = ['cirvu', 'zvonku', 'vynu', 'kryziu'];
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
            height: 300px;
            width: 120px;
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
</body>
</html>
