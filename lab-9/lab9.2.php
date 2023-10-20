<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 9.5</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <h1>Consulta de Noticia</h1>

    <form action="http://localhost:3000/lab9.2.php" name="formFiltro" method="POST">
        <br>
        <p>Filtrar por: </p>
        <select name="campos" id="">

            <option value="titulo">Titulo</option>
            <option value="texto" selected>Descripcion</option>
            <option value="categoria">Categoria</option>

        </select>

        <p>con el valor</p>
        <input type="text" name="valor">
        <input type="submit" name="consultarTodos" value="Ver todos">
        <input type="submit" name="consultarFiltro" value="Filtrar Datos">
    </form>
    <?php
    require_once("class/noticias.php");

    $obj_noticia = new noticia();
    $noticia = $obj_noticia->consultar_noticias();

    if (array_key_exists('consultarTodos', $_POST)) {
        $obj_noticia = new noticia();
        $noticia = $obj_noticia->consultar_noticias();
    }
    if (array_key_exists('consultarFiltro', $_POST)) {
        $obj_noticia = new noticia();
        $noticia = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'], $_REQUEST['valor']);
    }



    $rows = count($noticia);

    if ($rows > 0) {
        print("<table>\n");
        print("<tr>\n");
        print("<th>Titulo</th>\n");
        print("<th>Texto</th>\n");
        print("<th>Categoria</th>\n");
        print("<th>Fecha</th>\n");
        print("<th>Imagen</th>\n");
        print("</tr>\n");

        foreach ($noticia as $resultado) {
            print("<tr>\n");
            print("<td>" . $resultado['titulo'] . "</td>\n");
            print("<td>" . $resultado['texto'] . "</td>\n");
            print("<td>" . $resultado['categoria'] . "</td>\n");
            print("<td>" . date("j/n/y", strtotime($resultado['fecha'])) . "</td>\n");

            if ($resultado['imagen'] != "") {
                print("<td><a target = '_blank' href= 'img/" . $resultado['imagen'] . "'><img border = '0' src='img/icontexto.gif'></a></td>\n");
            } else {
                print("<td>&nbsp;</td>\n");
            }

            print("</tr>\n");
        }

        print("</table>\n");
    } else {
        print("No hay noticias disponibles");
    }

    ?>
</body>

</html>