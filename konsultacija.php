<?php
var_dump($_POST);
$text = '';

if (isset($_POST['input'])) {
    if (str_word_count($_POST['input']) >= 2) {
        $text = ucwords($_POST['input']);
    } else if (str_word_count($_POST['input']) < 2) {
        $text = 'Seniuk, varda ir pavarde. Su tarpu.';
    }
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
        <input name="input" type="text">
        <button name="button" type="submit">klik</button>
    </form>
<p><?php print $text; ?></p>
</body>
</html>
