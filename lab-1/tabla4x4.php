<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 4x4</title>
</head>

<body>
    <?php
    define('TAM', 4);
    function potencia($v1, $v2)
    {
        $rdo = pow($v1, $v2);
        return $rdo;
    }
    echo "<table border=1>";
    for ($n1 = 0; $n1 <= TAM; $n1++) {
        echo "<tr>";
        for ($n2 = 0; $n2 <= TAM; $n2++) {
            echo "<td>" . potencia($n1, $n2) . "<td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>