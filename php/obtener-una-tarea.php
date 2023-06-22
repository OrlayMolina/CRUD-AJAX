<?php

include("database.php");


if(isset($_POST["id"])){

    $id = $_POST["id"];

    $query = "SELECT * FROM tareas WHERE id = {$id}";
    $result = mysqli_query($connection, $query);

    if(!$result){
        // si hubo un error concatenamos el mensaje con el mensaje que nos da la base de datos
        die("Hubo un error en la consulta. ".mysqli_error($connection));
    }

    $json = array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            "id" => $row["id"],
            "name" => $row["name"],
            "description" => $row["description"]
        );
    }

    $jsonstring =json_encode($json[0]);
    echo $jsonstring;
}