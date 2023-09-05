<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>

<body>
    <?php
    define('TAM', 10);
    echo "<table border=1>";
    $n = 1;
    for ($n1 = 0; $n1 <= TAM; $n1++) {
        echo "<tr bgcolor=#bdc3d6>";
        for ($n2 = 0; $n2 <= TAM; $n2++) {
            echo "<td>", $n, "</td>";
            echo $n = $n + 1;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>