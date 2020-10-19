<?php
$months = 12;
$wallet = 1000;
$month_income = 700;


for($i = 1; $i <= $months; $i++){
    $wallet += $month_income;
    $wallet -= $month_expenses = rand(300, 1100);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciklai</title>
</head>
<body>
    <h1>Wallet Forecast</h1>
    <h2>Po <?php print $months; ?> m., prognozuojamas likutis <?php print $wallet; ?>.</h2>
</body>
</html>