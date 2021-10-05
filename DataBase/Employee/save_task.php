<?php

include("../Conexion.php");

if (isset($_POST['save_task'])) {

    $ID = $_POST['ID'];
    $Position = $_POST['Position_input'];
    $UserName = $_POST['UserName_input'];
    $Password = $_POST['Password_input'];
    $PeopleRef = $_POST['PeopleRef_input'];
    $DependenceRef = $_POST['DependenceRef_input'];
    
    $query = "INSERT INTO employee (ID,DependenceRef,Position,UserName,Password,PeopleRef) VALUES ('$ID','$DependenceRef','$Position','$UserName','$Password','$PeopleRef');";

    $result = mysqli_query($conexion,$query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'Success';
    
    header("Location: ../../Vistas/Admi/Admi.php");

}

?>