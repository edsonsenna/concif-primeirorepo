<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$data_cadastro = $_POST["data_cadastro"];

mysqli_report(MYSQLI_REPORT_STRICT);


$conn = null;


$conn = new mysqli("localhost", "edson", "meme4593", "estudoif");

if($conn->connect_error) {
	printf( 'Connect failed: '. $conn->connect_error);
	exit();
}
else {
	printf( 'No erro! ');
}

$sql = "INSERT INTO produtos_teste VALUES (".$id.",'".$nome."','".$data_cadastro."');";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>