<?php
$my_memories = [
    'Baras',
    'First beer',
    'Second beer',
    'Third beer',
    'Fourth beer',
    '2',
    '2',
    'Fifth beer',
    'Sixth beer',
    'Seventh beer',
    'Eighth beer',
    'Ninth beer',
    'Taxi',

];

$friend_memories = [
    'Baras',
    'First Cider',
    'Second beer',
    '2',
    'Third Cider',
    '2',
    'Fourth beer',
    'Fifth Cider',
    'Sixth Cider',
    'Seventh beer',
    'Eighth Cider',
    'Ninth beer',
    'Blackout',
];

$common_memories = [];

foreach($my_memories as $memorie) {

   if(in_array($memorie, $friend_memories) && !in_array($memorie, $common_memories)){
       $common_memories[] = $memorie;
   }

}

var_dump($common_memories);

$fb_index = rand(0, count($my_memories) -1);
$fb_text = $my_memories[$fb_index];
$h3_my = "Flashback ($fb_index): $fb_text";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <style>
    </style>
</head>
<body>
    <h1>Kas buvo penktadieni?</h1>
    <h2>Mano prisiminimai</h2>
    <ul>
        <?php foreach($my_memories as $memorie): ?>
        <li><?php print $memorie; ?></li>
        <?php endforeach; ?>
    </ul>
    <h3><?php print $h3_my; ?></h3>
    <h2>Draugo prisiminimai</h2>
    <ul>
        <?php foreach($friend_memories as $memorie): ?>
            <li><?php print $memorie; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>