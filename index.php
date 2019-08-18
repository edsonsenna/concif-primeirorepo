<?php 

include_once("./db/connection.php");
include_once("./db/crud.php");

$conn = open();

$found = getAll('produtos', $conn);

close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem</title>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    <h2><?php if(isset($_SESSION["message"])) echo "Erros - ". $_SESSION["message"];?> </h2>
    <a href="./pages/novo_produto.php">Novo Produto</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data Cadastro</th>
                <th>Valor</th>
                <th>Acoes</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($found as $prod){?>
                <tr>
                    <td><?php echo $prod["id"]; ?></td>
                    <td><?php echo $prod["nome"]; ?></td>
                    <td><?php echo $prod["data_cadastro"]; ?></td>
                    <td>R$ <?php echo $prod["valor"]; ?></td>
                    <td>
                        <ul>
                            <li>
                                <a href="./pages/editar_produto.php?id=<?php echo $prod["id"]; ?>">Editar</a>
                            </li>
                            <li>
                                <a href="./actions/exclui_produto.php?id=<?php echo $prod["id"]; ?>">Excluir</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    
</body>
</html>
