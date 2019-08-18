<?php

include_once("../db/connection.php");
include_once("../db/crud.php");

$conn = null;

$conn = open();

$result = delete('produtos', $_GET["id"], $conn);

close($conn);

$_SESSION["message"] = $resul;

header("Location: /first-project/index.php");

?>