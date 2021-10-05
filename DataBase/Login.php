<?php

session_start();
include("Conexion.php");

$u = $_POST['usuario'];
$c = $_POST['password'];

$_SESSION['usuario'] = $u;

if ($u == null || $c == null){

    echo "<script>alert('Error: usuario y/o clave vacios!!');</script>";
    header('location:../Views/Pag_login.php');

} else {

    $sql = "SELECT * FROM employee WHERE UserName = '$u' AND Password = '$c'";

    if (!$consulta = $conexion->query($sql)){
        echo "ERROR: no se pudo ejecutar la consulta!";
    }else{

        $filas = mysqli_num_rows($consulta);

        if ($filas == 0){
            echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            sleep(10);
            header("Location: ../Views/Pag_login.php");
        } else {
            header('location:../Views/Admi/Main.php');
        }

    }
}

?>