<!DOCTYPE html>
<html></html>
<head>
    <title>Odd and Even Numbers</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th,td
        {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
       th{
            background-color: #5c5d61;
        }    
       td{
            background-color: white;

       }
        
        </style>
</head>
<body>
        <h1 style = "text-align: center;">Odd and Even Numbers from 1-100</h1>

        <?php
            $odd_numbers = array();
            $even_numbers = array();

            for($i=0; $i<=100; $i++){
                if($i % 2 == 0){
                    $even_numbers[] = $i;
                } else {
                    $odd_numbers[] = $i;
                }
            }
        ?>
        <table>
            <thead>
            <tr>
                <th>Odd Numbers</th>
                <th>Even Numbers</th>
            </tr>
            </thead>
            <tbody>
                <?php
                for($i= 1; $i<= 50; $i++){
                echo "<tr>";
                echo "<td>".$odd_numbers[$i]."</td>";
                echo "<td>".$even_numbers[$i]."</td>";
                echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h2 style="text-align: center;">Total Odd Numbers: <?php echo count($odd_numbers); ?></h2>
        <h2 style="text-align: center;">Total Even Numbers: <?php echo count($even_numbers); ?></h2>
</body>
</html>