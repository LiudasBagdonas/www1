<?php

require '../bootloader.php';

$db->load();
$db_data = $db->getData();

$table = [
    'headers' => [
        'Username',
        'Password'
    ],
    'rows' => $db_data['credentials']
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="media/styles.css">
</head>
<body>
<?php require ROOT . '/core/templates/table.tpl.php'; ?>
</body>
</html>