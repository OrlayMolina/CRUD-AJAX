<?php

include("database.php");

if(isset($_POST["id"])){
    $id = $_POST["id"];

    $query = "DELETE FROM tareas WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if(!$result){
        // si hubo un error concatenamos el mensaje con el mensaje que nos da la base de datos
        die("Hubo un error en la consulta. ".mysqli_error($connection));
    }

    echo "La tarea ha sido eliminada.";
}

