<html>
<head></head>
<body>
<?php
$nombres = ["Ana", "Carlos", "Luis", "María", "Pedro"];
$nombreBuscado = "Carlos";
$encontrado = false;
foreach ($nombres as $nombre) {
    if ($nombre == $nombreBuscado) {
        $encontrado = true;
        break;
    }
}
if ($encontrado) {
    echo "El nombre '$nombreBuscado' está en la lista.";
} else {
    echo "El nombre '$nombreBuscado' no está en la lista.";
}
?>
</body>
</html>