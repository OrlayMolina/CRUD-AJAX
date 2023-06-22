<?php

include("database.php");

if(isset($_POST["name"])){
    $task_name = $_POST["name"];
    $task_description = $_POST["description"];

    $query = "INSERT into tareas (name, description) VALUES ('$task_name', '$task_description')";
    $result = mysqli_query($connection, $query);

    if(!$result){
        // si hubo un error concatenamos el mensaje con el mensaje que nos da la base de datos
        die("Hubo un error en la consulta. ".mysqli_error($connection));
    }

    echo "Tarea agregada existosamente.";
}