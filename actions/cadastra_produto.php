<?php


include_once("../db/connection.php");
include_once("../db/crud.php");

$conn = null;

$conn = open();


$obj = array(
    "id" => $_POST["id"],
    "nome" => $_POST["nome"],
    "data_cadastro" => $_POST["data_cadastro"]
);

$result = insere('produtos_teste', $obj, $conn);



$_SESSION["message"] = $result;

close($conn);

header("Location: /first-project/index.php");

?>