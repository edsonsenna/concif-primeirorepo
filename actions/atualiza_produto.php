<?php


include_once("../db/connection.php");
include_once("../db/crud.php");

$conn = null;

$conn = open();


$obj = array(
    "id" => $_POST["id"],
    "nome" => $_POST["nome"],
    "valor" => $_POST["valor"]
);

$result = atualiza('produtos', $obj, $conn);


$_SESSION["message"] = $result;

close($conn);

header("Location: /first-project/index.php");

?>