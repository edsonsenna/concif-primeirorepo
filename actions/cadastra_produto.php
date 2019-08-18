<?php


include_once("../db/connection.php");
include_once("../db/crud.php");

$conn = null;

$conn = open();


$obj = array(
    "nome" => $_POST["nome"],
    "valor" => $_POST["valor"],
    "data_cadastro" => date("Y-m-d h:i:s")
);

$result = insere('produtos', $obj, $conn);

$_SESSION["message"] = $result;

close($conn);

header("Location: /first-project/index.php");

?>