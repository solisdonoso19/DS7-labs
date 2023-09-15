<?php
if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {

    $size = $_FILES['nombre_archivo_cliente']['size'];
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $extensiones_permitidas = array('jpg', 'jpeg', 'gif', 'png');
    $extension = strtolower(pathinfo($nombrearchivo, PATHINFO_EXTENSION));
    if ($size > 1000000) {
        echo "Solo se admiten archivos con un máximo de 1 MB ";
    } elseif (!in_array($extension, $extensiones_permitidas)) {
        echo "Solo se admiten archivos de tipo imagen";
    } else {
        $nombreDirectorio = "archivos/";
        $nombreCompleto = $nombreDirectorio . $nombrearchivo;
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombrearchivo = $idUnico . "-" . $nombrearchivo;
            echo "Archivo repetido, se cambiará el nombre a $nombrearchivo <br><br>";
        }
        move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio<br>";
    }
} else {
    echo "No se ha podido subir el archivo <br>";
}
