<?php
var_dump($_POST);
$size = 100;

if (isset($_POST['input'])) {
    $size = $_POST['input'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>
    <form method="post">
        <input name="input" type="range" min="100" max="200" value ="<?php print $size; ?>">
        <input name="button" type="submit">
    </form>
    <img style="height:<?php print $size;?>; width:<?php print $size;?>" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg" alt="">
</body>
</html>
