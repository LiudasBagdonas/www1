<?php

require '../bootloader.php';

$db->load();
$db_data = $db->getData();
$my_poo = my_poo();

if (is_logged_in()) {
    $data = $my_poo;
} else {
    $data = $db_data['items'];
}

$nav = nav();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="media/styles.css">
</head>
<body>
<header>
    <?php require ROOT . './app/templates/nav.php'; ?>
</header>
<main>
    <div class="poo_wall_box">
        <div class="hanky_box"></div>

        <?php foreach ($data as $item_index => $item): ?>

            <section class="poo_box bg_<?php print $item['color']; ?>" style="
                    top: <?php print $item['yaxes']; ?>px;
                    left: <?php print $item['xaxes']; ?>px;">
                <span></span>
            </section>

        <?php endforeach; ?>

    </div>
</main>
</body>
</html>

