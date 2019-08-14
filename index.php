<?php 

include_once("./db/connection.php");
include_once("./db/crud.php");

$conn = open();


$conn = null;

$conn = open();

$obj = array(
    "id" => 8,
    "nome" => "'Produto 8'",
    "data_cadastro" => "'2019-09-01 12:00:00'"
);

$result = insere('produtos_teste', $obj, $conn);

$found = getAll('produtos_teste', $conn);

close($conn);

echo $result;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    <h1>Hello World!</h1>
    <form action="./cadastra_produto.php" method="POST">
        <input type="number" name="id" id="id">
        <input type="text" name="nome" id="nome">
        <input type="text" name="data_cadastro" id="data_cadastro">
        <input type="submit" value="Cadastrar">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($found as $prod){?>
                <tr>
                    <td><?php echo $prod["id"]; ?></td>
                    <td><?php echo $prod["nome"]; ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    
</body>
</html>
