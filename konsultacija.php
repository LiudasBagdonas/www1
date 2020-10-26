<?php
$car_brand = 'Audi';
$car_price = 15000;
$cars_filtered = [];
$cars = [
    [
        'image' => 'https://image.shutterstock.com/image-photo/amsterdam-netherlands-august-10-2014-260nw-1151879282.jpg',
        'brand' => 'Multipla',
        'model' => 'Good',
        'year' => 1562,
        'price' => 12305,
        'on_sale' => (bool)rand(0,1),
    ],
    [
        'image' => 'https://cdn.motor1.com/images/mgl/wMvkL/s1/fiat-multipla.jpg',
        'brand' => 'Multipla',
        'model' => 'Good',
        'year' => 1256,
        'price' => 15623,
        'on_sale' => (bool)rand(0,1),
    ],
    [
        'image' => 'https://ssl.caranddriving.com/f2/images/used/big/fiatmultipla.jpg',
        'brand' => 'Multipla',
        'model' => 'Good',
        'year' => 1998,
        'price' => 14752,
        'on_sale' => (bool)rand(0,1),
    ],
    [
        'image' => 'https://www.motorbiscuit.com/wp-content/uploads/2020/04/Fiat-Multipla-1024x683.jpg',
        'brand' => 'BMW',
        'model' => 'Bad',
        'year' => 1258,
        'price' => 12365,
        'on_sale' => (bool)rand(0,1),
    ],
    [
        'image' => 'https://i.pinimg.com/originals/51/c2/6f/51c26f0ab7d87a39285e6bbe4cbaa9c6.jpg',
        'brand' => 'BMW',
        'model' => 'Bad',
        'year' => 1444,
        'price' => 15896,
        'on_sale' => (bool)rand(0,1),
    ],
    [
        'image' => 'https://media.istockphoto.com/photos/fiat-multipla-in-police-version-picture-id655158938',
        'brand' => 'BMW',
        'model' => 'Average',
        'year' => 1337,
        'price' => 14325,
        'on_sale' => (bool)rand(0,1),
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQNj2G8Cn6h_pVAP99Gj0_H1mZAAVFZBvuE5w&usqp=CAU',
        'brand' => 'Audi',
        'model' => 'Average',
        'year' => 1596,
        'price' => 16785,
        'on_sale' => (bool)rand(0,1),
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdk1rY6yYagW1lLaBx-41QCZJTfihZ7xp0LA&usqp=CAU',
        'brand' => 'Audi',
        'model' => 'Gay',
        'year' => 1236,
        'price' => 12578,
        'on_sale' => (bool)rand(0,1),
    ],
];
shuffle($cars);
//foreach ($cars as $value) {
//    if ($value['brand'] === $car_brand) {
//        $cars_filtered[] = $value;
//    }
//}
foreach ($cars as $value) {
    if ($value['price'] >= $car_price) {
        $cars_filtered[] = $value;
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            text-align: center;
        }
        .car-img {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 200px;
            width: 200px;
        }
        article {
            padding: 0 100px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        section {
            border: 1px solid black;
            padding: 20px;
            margin-top: 20px;
        }
        .on-sale {
            background-color: green;
            padding: 20px;
        }
        .sold-out {
            background-color: red;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Automobiliu skelbimukai</h1>
    </header>
    <main>
        <article>
            <?php foreach($cars_filtered as $car): ?>
                <section>
                        <div class="car-img" style="background-image: url(<?php print $car['image']; ?>)"></div>
                        <h2><?php print $car['brand'] . ' ' . $car['model']; ?></h2>
                        <h4>Year: <?php print $car['year']; ?></h4>
                        <?php if ($car['on_sale']): ?>
                            <div class="on-sale">Price: <?php print $car['price']; ?></div>
                        <?php else: ?>
                            <div class="sold-out">SOLD OUT!</div>
                        <?php endif; ?>
                </section>
            <?php endforeach; ?>
        </article>
    </main>
    <footer>

    </footer>
</body>
</html>
