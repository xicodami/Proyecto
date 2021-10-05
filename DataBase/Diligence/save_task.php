<?php

include("../Conexion.php");

if (isset($_POST['save_task'])) {

    $Address = $_POST['Address'];
    $Date = $_POST['Date'];
    $LawyerRef = $_POST['LawyerRef'];
    $ProcessesRef = $_POST['ProcessesRef'];
    
    $query = "INSERT INTO dilegences (Address, Date, LawyerRef, ProcessesRef) VALUES ('$Address','$Date','$LawyerRef','$ProcessesRef');";

    $result = mysqli_query($conexion,$query);


    
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'Success';
    
    header("Location: ../../Vistas/Admi/Diligence.php");

}

?>