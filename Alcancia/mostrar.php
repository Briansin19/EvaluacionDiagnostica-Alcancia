
<?php
require_once 'Alcancia.php';

$alcancia = new Alcancia();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['denominacion'])) {
        $alcancia->agregarMoneda($_POST['denominacion']);
    } elseif (isset($_POST['accion']) && $_POST['accion'] === 'calcularTotal') {
        echo $alcancia->calcularTotal();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcancía</title>
</head>
<body>
    <form action="mostrar.php" method="post">
        <label for="denominacion">Denominación:</label><br>
        <input type="number" id="denominacion" name="denominacion"><br>
        <input type="submit" value="Agregar moneda">
    </form>
    <form action="mostrar.php" method="post">
        <input type="hidden" name="accion" value="calcularTotal">
        <input type="submit" value="Ver total">
    </form>
    <div id="total"></div>
</body>
</html>
