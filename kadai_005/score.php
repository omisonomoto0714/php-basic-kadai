<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP課題5</title>
</head>
<body>

<?php

$score1 = '80';
$score2 = '60';
$score3 = '55';
$score4 = '40';
$score5 = '100';
$score6 = '25';
$score7 = '80';
$score8 = '95';
$score9 = '30';
$score10 = '60';

$total = $score1 + $score2 + $score3 + $score4 + $score5 +
         $score6 + $score7 + $score8 + $score9 + $score10;

echo '合計点数：' . $total . '点';

echo '<br>';

$average = $total / 10;

echo '平均点：' . $average. '点';




?>
  
</body>
</html>