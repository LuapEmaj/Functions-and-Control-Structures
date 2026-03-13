<!DOCTYPE html>

<html>
    <head>
        <title>Celsius to Farenheit Conversion Table</title>
    </head> 
    <body>
        <h1>Celsius to Farenheit Conversion Table</h1>
        <table border="1">
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
