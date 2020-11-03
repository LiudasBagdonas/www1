<?php
$count = 0;
$size = 100;

if (isset($_POST['button'])) {
    $count = intval($_POST['button']) + 1;
    $size += $count * 10;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>References</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
    <form method="POST">
        <button type="submit" name="button" value="<?php print $count; ?>">
            <?php print $count; ?>
        </button>
        <img style="height:<?php print $size; ?>; width:<?php print $size; ?>" src="https://lh3.googleusercontent.com/proxy/zZUaeICX4nxLY2cxxD_XL9m7MQdklkWlA1AV0zm5dCeFCOsMjitNLft0gXgqPhgw0tqnsEF3LjyKM-N6JsIAwwYD188AlKhYLP1WvQjnZ2jnZxqbJbKvVsetwV5GpAplD4RczKo" alt="">
    </form>
</body>
</html>