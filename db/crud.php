<?php

function getAll($table, $conn) {

    $sql = " SELECT * FROM ".$table;

    $result = $conn->query($sql);

    $found = [];

    if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
    }

    return $found;
}

function get($table, $id, $conn){

    $sql = " SELECT * FROM ".$table. " WHERE id = ".$id.";";
    
    $result = $conn->query($sql);

    $found = [];

    if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
    }

    return $found;
    
}

function insere($table, $obj, $conn){

    $sql = "INSERT INTO ".$table." (";

    $cols = "";
    $vals = "";

    foreach($obj as $key => $value){
        
        if($obj[$key] == end($obj)) {
            $cols .= $key;
            $vals .= "'".$value."'";
        }
        else {
            $cols .= $key.", ";
            $vals .= "'".$value."', ";
        }
    }

    $sql .= $cols.") VALUES (".$vals.");";

    $conn->query($sql);

    if ($result->affected_rows > 0) {

        return "Registro inserido com sucesso!";
    }

    return "Falha ao inserir registro!";
}

function delete($table, $id, $conn){

    $sql = "DELETE FROM ".$table." WHERE id = ".$id.";";


    $result = $conn->query($sql);

    if ($conn->affected_rows > 0) {

        return "Registro [".$id."] deletado com sucesso!";
    }

    return "Falha ao deletar registro!";

}

function atualiza($table, $obj, $conn){

    $sql = "UPDATE ".$table. " SET ";

    foreach($obj as $key => $value){
        

        if($obj[$key] == end($obj)) {
            $sql .= " ".$key." = '".$value."'  "; 
        }
        else {
            if($key != "id") {
                $sql .= " ".$key." = '".$value."', "; 
            }
        }
        
    }

    $sql .= " WHERE id = ".$obj["id"];

    $result = $conn->query($sql);

    if ($conn->affected_rows > 0) {

        return "Registro [".$id."] atualizado com sucesso!";
    }

    return "Falha ao atualizar registro!";


}



?>