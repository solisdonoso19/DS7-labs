<!DOCTYPE html>
<html>

<head>
    <title>Parcial #1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Universidad Tecnológica de Panamá</h1>
            <h1>Licenciatura en Desarrollo de Software</h1>
            <h1>Desarrollo de Software VII</h1>
            <h1>Parcial #1</h1>
            <div class="name">
                <h2>Nombre: Carlos Solís</h2>
                <h2>Cedúla: 6-723-1380</h2>
            </div>
        </div>
        <form action="parcial-1.php" method="POST">
            <p class="label">Introduzca el tamaño de la tabla</p>
            <input type="number" name="n" id="n">
            <button type="submit" name="calc">Calcular</button>
        </form>
        <div class="table-container">
            <p>Matriz con Diagonal Inversa</p>
            <?php
            echo "<table>";
            if (array_key_exists('calc', $_POST)) {
                if ($_REQUEST['n'] != '' && $_REQUEST['n'] % 2 != 0) {
                    $n = $_REQUEST['n'];
                    $matriz = array();
                    for ($i = 0; $i < $n; $i++) {
                        $fila = array();
                        echo "<tr>";
                        for ($j = 0; $j < $n; $j++) {
                            if ($i + $j == $n - 1) {
                                // Genera un número aleatorio entre 101 y 200 para la diagonal inversa
                                $numero = rand(101, 200);
                                echo "<td>$numero</td>";
                                //Agrega el numero resultante a la matriz
                                $fila[] = $numero;
                            } else {
                                echo "<td>0</td>";
                                //Agrega el numero resultante a la matriz
                                $fila[]  = 0;
                            }
                        }
                        $matriz[] = $fila;
                        echo "</tr>";
                    }

                    // Calcular la suma de la diagonal principal
                    $sum_p = 0;
                    for ($i = 0; $i < $n; $i++) {
                        $sum_p += $matriz[$i][$i];
                    }

                    // Calcular la suma de la diagonal inversa
                    $sum_i = 0;
                    for ($i = 0; $i < $n; $i++) {
                        $sum_i += $matriz[$i][($n - 1) - $i];
                    }
                    echo "</table>";
                    echo "<p>Suma de la diagonal principal:  $sum_p </p>";
                    echo "<p>Suma de la diagonal inversa:  $sum_i</p>";
                } else {
                    echo "<p>SOLO SE PERMITEN NUMEROS IMPARES</p>";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>