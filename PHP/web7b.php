<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table,td {
            border: 1px solid black;
            padding: 2px;
        }

        html,body {
            height: 100%;
            width: 100%;
        }
        table {
            width: 70%;
            height: 100%;
            text-align: center;
            font-size: 50px;

        }  
        
        tr:nth-child(even) {
            background-color: pink;
        }

        tr:nth-child(odd) {
            background-color: violet;
        }

        body {
            font-family: 'Patrick Hand', cursive;
        }


    </style>
</head>

<body>
    <?php
    if (isset($_POST["rows"]) && isset($_POST["columns"])) {
        $rows = intval($_POST["rows"]);
        $columns = intval($_POST["columns"]);

        if (($rows >= 3 && $rows <= 12) && ($columns >= 3 && $columns <= 12)) {
            echo '<div><table>';
            echo '<h4> </h4>';
            for ($row = 1; $row <= $rows; $row++) {
                print '<tr>';
                for ($col = 1; $col <= $columns; $col++) {
                    $prod = $row * $col;
                    echo "<td>$prod</td>\n";
                }
                echo '</tr>';
            }
            echo '</table></div>';
        } else
            echo '<p>Rows & Cols must be in range 3-12</p>';
    }
    ?>
</body>

</html>