<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;
$price_ttl = 0;
$cigs_mon_fri_ttl = 0;
$time_per_cig = 5;
$pack = "<div></div>";

for($i = 0; $i <= $days; $i++){

    $day_of_weak = date('N', strtotime("+$i days"));

    if($day_of_weak === '6'){
        $cigs_sat = rand(10,20);
        $count_ttl += $cigs_sat;
    }else if($day_of_weak === '7'){
        $cigs_sun = rand(1,3);
        $count_ttl += $cigs_sun;
    }else {
        $cigs_mon_fri = rand(3,4);
        $count_ttl += $cigs_mon_fri;
        $cigs_mon_fri_ttl += $cigs_mon_fri;
    }
}


$price_ttl = ceil($count_ttl / 20 * $pack_price);
$price_mon_fri_ttl = ceil($cigs_mon_fri_ttl / 20 * $pack_price);
$time_total = ceil($count_ttl * $time_per_cig / 60);
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu us $price_ttl eur.";
$h3 = "Nerukydamas darbo dienomis sutaupysi $price_mon_fri_ttl eurus.".'<br>'." Viso traukdamas prastovesiu $time_total valandu.";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciklai</title>
    <style>
        div {
            height: 25px;
            width: 50px;
            background-image: url("https://img.lovepik.com/element/40172/8627.png_300.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        section {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 200px;
            border: 1px solid black;
            margin: 5px;
        }
        article {
            display: flex;
            flex-wrap: wrap;
            width: 850px;
        }
    </style>
</head>
<body>
    <h1>Mano dumu skaiciuokle</h1>
    <h2><?php print $h2; ?></h2>
    <h3><?php print $h3; ?></h3>
    <article>
        <?php for(; $count_ttl >= 0; ):?>
            <section>
            <?php for($c = 1; $c <= 20 && $count_ttl >= 0; $c++, $count_ttl--):?>
                <div></div>
            <?php endfor; ?>
            </section>
        <?php endfor; ?>
    </article>
</body>
</html>