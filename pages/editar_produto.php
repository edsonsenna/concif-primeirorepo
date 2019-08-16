<?php

include_once("../db/connection.php");
include_once("../db/crud.php");

$id = $_GET["id"];

$conn = null;

$conn = open();

$produto = get('produtos', $id, $conn);

close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita - <?php echo $id;?></title>
</head>
<body>
    <form action="../actions/atualiza_produto.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="hidden" name="id" value="<?php echo $produto[0]["id"]; ?>">
        <input type="text" name="nome" id="nome" value="<?php echo $produto[0]["nome"]; ?>">
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>