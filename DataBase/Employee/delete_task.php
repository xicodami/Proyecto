<?php

include("../Conexion.php");


    $id = $_GET['id'];
    $query = "DELETE FROM employee WHERE ID = $id";

    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }
    
    $_SESSION['message'] = 'Task Remove Successfully';
    $_SESSION['message_type'] = 'danger';

    header("Location: ../../Views/Admi/Main.php");

    
?>