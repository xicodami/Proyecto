<?php

include("../Conexion.php");

if (isset($_POST['save_task'])) {

    $Company = $_POST['Company'];
    $Type = $_POST['Type'];
    $employeeRef = $_POST['employeeRef'];
    $clientsRef = $_POST['clientsRef'];
    
    $query = "INSERT INTO processes (Company , Type, employeeRef, clientsRef) VALUES ('$Company','$Type','$employeeRef','$clientsRef');";

    $result = mysqli_query($conexion,$query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'Success';
    
    header("Location: ../../Vistas/Processes/Admi.php");

}

?>