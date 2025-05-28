<?php
// Quirky Zoo Management System - Feeding Schedule

date_default_timezone_set('America/Toronto'); // Set to Toronto, Canada timezone
$currentHour = (int)date('G'); // 24-hour format without leading zeros
$meal = '';
$food = '';

if ($currentHour >= 5 && $currentHour < 9) {
    $meal = 'Breakfast';
    $food = 'Bananas, Apples, and Oats';
} elseif ($currentHour >= 12 && $currentHour < 14) {
    $meal = 'Lunch';
    $food = 'Fish, Chicken, and Vegetables';
} elseif ($currentHour >= 19 && $currentHour < 21) {
    $meal = 'Dinner';
    $food = 'Steak, Carrots, and Broccoli';
} else {
    $meal = 'No Feeding';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quirky Zoo Feeding Schedule</title>
</head>
<body>
<h1>Quirky Zoo Feeding Schedule</h1>
<p>Current Time: <?php echo date('g:i A'); ?></p>
<?php if ($meal !== 'No Feeding'): ?>
    <p>It's time for <strong><?php echo $meal; ?></strong>!</p>
    <p>The animals should eat: <strong><?php echo $food; ?></strong></p>
<?php else: ?>
    <p>The animals are not being fed at this time.</p>
<?php endif; ?>
</body>
</html> 