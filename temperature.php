<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Celsius to Farenheit Conversion Table</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                background: #f7f7f7;
                line-height: 1.4;
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
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 12px;
            }
            th, td {
                border: 1px solid #ccc;
                padding: 8px;
                text-align: center;
            }
            th {
                background: #f0f0f0;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h1>Celsius to Farenheit Conversion Table</h1>
        <table>
            <tr>
                <th>Celsius</th>
                <th>Farenheit</th>
            </tr>
            <?php
                for ($celsius = 0; $celsius <= 100; $celsius += 10) {
                    $farenheit = ($celsius * 9 / 5) + 32;
                    echo "<tr><td>$celsius</td><td>$farenheit</td></tr>";
                }
            ?>
        </table>
    </body>
