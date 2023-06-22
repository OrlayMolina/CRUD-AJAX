<?php

include("database.php");

if(isset($_POST["id"])){
    $task_id = ($_POST["id"]);
    $task_name = ($_POST["name"]);
    $task_description = ($_POST["description"]);

    $query = "UPDATE tareas SET name ='$task_name', description = '$task_description' WHERE id = '$task_id'";
    $result = mysqli_query($connection, $query);

    if(!$result){
        // si hubo un error concatenamos el mensaje con el mensaje que nos da la base de datos
        die("Hubo un error en la consulta. ".mysqli_error($connection));
    }

    echo "La tarea ha sido actualizada";
}