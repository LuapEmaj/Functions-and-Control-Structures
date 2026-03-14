<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quarantine Pass Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.4;
            background: #f7f7f7;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 16px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        h1 {
            color: #333;
            margin-top: 0;
        }
        p {
            margin: 8px 0;
        }
    </style>
</head>
<body>
<div class="container">
<?php
$passNumber = 12345; // change value to test
$lastDigit = $passNumber % 10;
$today = date('l');

if ($today === 'Sunday') {
    $allowed = false;
    $reason = "It's Sunday, no one is allowed to go outside.";
    $group = 'NONE';
} else {
    $oddDays = ['Monday', 'Wednesday', 'Friday'];
    $evenDays = ['Tuesday', 'Thursday', 'Saturday'];

    if ($lastDigit % 2 === 1) {
        $allowed = in_array($today, $oddDays, true);
        $group = 'ODD-ENDING';
        $allowedDaysText = 'Mondays, Wednesdays, Fridays';
    } else {
        $allowed = in_array($today, $evenDays, true);
        $group = 'EVEN-ENDING';
        $allowedDaysText = 'Tuesdays, Thursdays, Saturdays';
    }

    $reason = $allowed
        ? 'You are allowed to go outside today.'
        : 'You are not allowed to go outside today.';
}

echo "<h1>Quarantine Pass Checker</h1>";
echo "<p><strong>Pass Number:</strong> $passNumber (Last digit: $lastDigit - $group)</p>";
echo "<p><strong>Today is:</strong> $today</p>";
echo "<p><strong>Allowed today:</strong> " . ($allowed ? 'Yes' : 'No') . "</p>";
echo "<p><strong>Reason:</strong> $reason</p>";
?>
</div>
</body>
</html>