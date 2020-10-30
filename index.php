<?php
var_dump($_POST);
$answer = '';

if(isset($_POST['number']) && isset($_POST['mygtukas_kvadratas'])) {
    $answer = $_POST['number'] ** 2;
}
if(isset($_POST['number']) && isset($_POST['mygtukas_saknis'])) {
    $answer = sqrt($_POST['number']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>References</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
<h1><?php print $answer; ?></h1>
<form method="post">
    <input type="text" name="number">
    <input type="submit" name="mygtukas_kvadratas" value="kvadratas">
    <input type="submit" name="mygtukas_saknis" value="saknis">
</form>
</body>
</html>