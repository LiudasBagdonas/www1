<?php
$x = rand(1,101);
$h1 = '';
function is_prime($x){
   if ($x === 1){
       return false;
   }
   for ($i = 2; $i <= $x/2; $i++){
       if($x % $i == 0){
           return false;
       }
   }
    return true;

}
if(is_prime($x)){
    $h1 = "$x is prime";
} else {
    $h1 = "$x is not prime";
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
</head>
<body>
   <?php print $h1; ?>
</body>
</html>