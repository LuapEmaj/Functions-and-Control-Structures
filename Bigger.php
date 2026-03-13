<!DOCTYPE html>
<html>
<head>
    <title>Make it Bigger</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
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
    </style>
</head>
    <?php
        $i = 1;
        do {
             echo "<span style='font-size:".$i."px;'>$i</span><br>";
             $i++;
        }

        while($i <= 30)
        ?>
</html>