<?php
$products = [
    [
        'name' => 'Stumbro Degtine',
        'price' => 6.49,
        'image' => 'https://images.kaina24.lt/6423/68/stumbras-vodka-simtmecio-1-l.jpg',
    ],
    [
        'name' => 'Vilniaus Degtine',
        'price' => 7.49,
        'price_special' => 5.29,
        'image' => 'https://www.sanitex.eu/o/out/pictures/generated/product/1/380_340_75/barcodes_sa__h713a32.png',

    ],
    [
        'name' => 'Lithuanian Degtine',
        'price' => 7.89,
        'image' => 'https://www.vynomeka.lt/images/uploader/de/degtine-originali-lietuviska-auksine-07-l-2-1.jpg',

    ],
    [
        'name' => 'Sobieski Degtine',
        'price' => 6.09,
        'price_special' => 5.49,
        'image' => 'https://www.vynomeka.lt/images/uploader/de/degtine-sobieski-premium-07-l-1.jpg',

    ],
];

foreach($products as $key => $product) {
    $products[$key]['available'] = rand(0,3);
    if (array_key_exists('price_special', $product)) {
        $products[$key]['discount'] = 100 - round($product['price_special'] * 100 / $product['price']);
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
    <h1>Drink Catalogue</h1>
    <article>
        <?php foreach ($products as $product): ?>
            <div class="product-box">
                    <div class="product-img-box <?php print $product['available'] ? '' : 'grayscale'; ?>" style="background-image: url(<?php print $product['image']; ?>)">
                    <?php if (array_key_exists('price_special', $product)): ?>
                        <div class="special-price-box">-<?php print $product['discount'] ; ?>%</div>
                        <div class="price-box"><?php print $product['price_special'] ; ?> £.</div>
                    <?php else: ?>
                        <div class="price-box"><?php print $product['price'] ; ?> £.</div>
                    <?php endif; ?>
                </div>
                    <h3><?php print $product['name']; ?></h3>
                    <?php if ($product['available']): ?>
                        <h4 class="green">Available: <?php print $product['available']; ?> </h4>
                    <?php else: ?>
                        <h4 class="red">Not available</h4>
                    <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </article>
</body>
</html>