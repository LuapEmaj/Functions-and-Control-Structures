<!DOCTYPE html>
<html>
    <title>Quarantine Pass Checker</title>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .container{
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            h1 {
                color: #333;
                text-align: center;
            }

            .info-box {
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                padding: 15px;
                margin-top: 20px;
                border-radius: 5px;
            }
            .status-allowed{
                color: green;
                font-weight: bold;
            }
            .status-not-allowed{
                color: red;
                font-weight: bold;
            }
            .day{
                font-style: italic;
                color: yellow;
            }
            .sunday{
                color: orange;
                font-weight: bold;
            }
        </style>
</head>
<body>
    <div class="container">
        <h1>Quarantine Pass Checker</h1>


        <?php
        // configuration
        $passNumber = 12345; // change value to test
        $lastDigit = $passNumber % 10;
        $today = date('l');
        $todayDate = date('F j, Y');

    switch ($lastDigit % 2) {
        case 1:                    // odd
            $allowedDays = ["Monday", "Wednesday", "Friday"];
            $group       = 'ODD‑ENDING';
            $groupColor   = 'blue';
            $allowedDaysText = "Mondays, Wednesdays, and Fridays";

            break;
        default:                   // even
            $allowedDays = ["Tuesday", "Thursday", "Saturday"];
            $group       = 'EVEN‑ENDING';
            $groupColor = 'pink';
            $allowedDaysText = "Tuesdays, Thursdays, and Saturdays";

            break;
    }

    if ($today === 'Sunday') {
        $allowedDays = false;
        $reason      = "It's Sunday, no one is allowed to enter.";
    } else {
        $allowed = in_array($today, $allowedDays, true);
        $reason  = $allowed
                   ? 'You are allowed to go outside today.'
                   : 'You are not allowed to go outside today.';
    }

    echo "<h1 style=\"text-align: center;\">Qpass: $Qpass</h1>";
    echo "<p><strong>Pass Number:</strong> $passNumber ";
    echo "(Last digit: $lastDigit - $group)</p>";
    echo "<p><strong>Today is:</strong> $today</p>";
    echo "<p><strong>Reason:</strong> $reason</p>";
    ?>

</html>