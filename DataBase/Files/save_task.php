<?php

include("../Conexion.php");

if (isset($_POST['save_task'])) {

    $Name = $_POST['Name'];
    $Company = $_POST['Company'];
    $Type = $_POST['Type'];
    $employeeRef = $_POST['employeeRef'];
    $clientsRef = $_POST['clientsRef'];
    
    $query = "INSERT INTO Files (Name,Company,Type,employeeRef,clientsRef) VALUES ('$Name','$Company','$Type','$employeeRef','$clientsRef');";

    $result = mysqli_query($conexion,$query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'Success';
    
    header("Location: ../../Vistas/Admi/Files.php");

}

?>