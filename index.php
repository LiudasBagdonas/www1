<?php
var_dump($_POST);
$name = '';
$last_name = '';
$age = '';
$level = '';

$form_visibility = 'block';
$article_visibility = 'none';

function check_form() {
    if(isset($_POST['name']) && isset($_POST['last_name']) && isset($_POST['age']) && isset($_POST['level'])){
        return true;
    }
    return false;
}

if (check_form()) {
    $level = $_POST['level'];
    $age = $_POST['age'];
    $last_name = $_POST['last_name'];
    $name = $_POST['name'];
    $form_visibility = 'none';
    $article_visibility = 'block';
}

$born_year = date('Y') - intval($age);
$description = "$name $last_name yra gimes $born_year, yra $level PHP programuotojas.";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>References</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
<article style="display: <?php print $article_visibility;?>">
    <h3><?php print $name; ?></h3>
    <h3><?php print $last_name; ?></h3>
    <h3><?php print $age; ?></h3>
    <h3><?php print $level; ?></h3>
    <h3><?php print $description; ?></h3>
</article>



<form method="post" style="display: <?php print $form_visibility; ?>">
    <input type="text" name="name" placeholder="Vardas" required>
    <input type="text" name="last_name" placeholder="Pavarde" required>
    <input type="number" name="age" placeholder="Amzius" required>
    <label for="">Kaip vertinate savo zinias?</label>
    <select name="level">
        <option value="pradedantysis">Pradedantysis</option>
        <option value="vidutiniokas">Vidutinis</option>
        <option value="masteris">Masteris</option>
    </select>
    <input type="submit" name="submit_button" value="Pateikti">
</form>
</body>
</html>