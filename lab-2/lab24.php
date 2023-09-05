<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.4</title>
</head>

<body>
    <?php
    $personas = array(
        "juan" => "Panama",
        "john" => "USA",
        "eica" => "finlandia",
        "kusanagi" => "japon"
    );
    foreach ($personas as $persona => $pais) {
        print "$persona as de $pais<br>";
    }
    echo "<br>" . $personas["juan"];
    echo "<br>" . $personas["eica"];
    ?>

</body>

</html>