<?php

mysqli_report(MYSQLI_REPORT_STRICT);

$conn = null;

function open() {

    $conn = new mysqli("localhost", "edson", "meme4593", "estudoif");

    if($conn->connect_error) {
        $conn = null;
    }
    return $conn;

}

function close($conn) {

    $conn->close();
    
}
?>