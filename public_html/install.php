<?php
require '../bootloader.php';

$fileDB = new FileDB(DB_FILE);

$fileDB->createTable('credentials');
$fileDB->insertRow('credentials', ['email' => 'test@test.lt', 'password' => 'test']);

$fileDB->createTable('items');

$fileDB->save();