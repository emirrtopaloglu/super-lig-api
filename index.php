<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $json = "https://api.lunayazilim.com/standings.json"; // Your JSON file
        $json = file_get_contents($json);
        $json = json_decode($json, true);
        
        echo "<table>";
        echo "<tr>";
        echo "<th>Takım</th>";
        echo "<th>O</th>";
        echo "<th>G</th>";
        echo "<th>B</th>";
        echo "<th>M</th>";
        echo "<th>A</th>";
        echo "<th>Y</th>";
        echo "<th>Av</th>";
        echo "<th>P</th>";
        echo "</tr>";

        for ( $i = 0; $i < count($json); $i++ ) {
            echo "<tr>";
            echo "<td>". ($i + 1). '. ' . $json[$i]['team']."</td>";
            echo "<td>". $json[$i]['games']."</td>";
            echo "<td>". $json[$i]['wins']."</td>";
            echo "<td>". $json[$i]['draws']."</td>";
            echo "<td>". $json[$i]['losses']."</td>";
            echo "<td>". $json[$i]['goals_for']."</td>";
            echo "<td>". $json[$i]['goals_against']."</td>";
            echo "<td>". $json[$i]['goal_difference']."</td>";
            echo "<td style='font-weight: bold;'>". $json[$i]['points_per_game']."</td>";
            echo "</tr>";
        }

        echo "</table>";

        //  Custom Styles (Optional)
        echo '<style>
            table {
                border-collapse: collapse;
                width: 40%;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even){background-color: #f2f2f2}
            th {
                background-color: #4CAF50;
                color: white;
            }</style>';
    ?>
    
</body>
</html>
>>>>>>> a509c6a (added source code)
