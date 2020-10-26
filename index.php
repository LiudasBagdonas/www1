<?php
$police_report = [
    [
        'subject' => 'Domantas',
        'reason' => 'Public urination',
        'amount' => rand(-50,50),

    ],
    [
        'subject' => 'Ponas Vilmanas',
        'reason' => 'Nelenda is namu',
        'amount' => rand(-50,50),
    ],
    [
        'subject' => 'Regina',
        'reason' => 'Musa savo vyra',
        'amount' => rand(-50,50),

    ],
    [
        'subject' => 'Kesha',
        'reason' => 'Bloga itaka vaikams',
        'amount' => rand(-50,50),

    ],
];

foreach($police_report as $index => $report){
    $police_report[$index]['warning_only'] = (bool)rand(0,1);
    $police_report[$index]['css_class'] = $report['amount'] >= 0 ? 'income' : 'expense';

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Palicijos irasas</h1>
    <ul>
        <?php foreach ($police_report as $report): ?>
            <li class="<?php print $report['css_class']; ?>">
                <?php print $report['subject'] .
                    ' (' . $report['reason'] . ') '; ?>
                <?php if($report['warning_only']): ?>
                    <?php print 'Ispejimas'; ?>
                <?php else: ?>
                    <?php print $report['amount']; ?>
                <?php endif; ?>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>