<?php

include("../Conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM processes WHERE id = $id";
    $result = mysqli_query($conexion,$query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $Company = $row['Company'];
        $Type = $row['Type'];
        $employeeRef = $row['employeeRef'];
        $clientsRef = $row['clientsRef'];
    }
}


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $Company = $_POST['Company'];
    $Type = $_POST['Type'];
    $employeeRef = $_POST['employeeRef'];
    $clientsRef = $_POST['clientsRef'];

    $query = "UPDATE processes set ID = '$id', Company = '$Company', Type = '$Type', employeeRef = '$employeeRef', clientsRef = '$clientsRef' WHERE ID = '$id'";
    mysqli_query($conexion,$query);
    header("Location: ../../Views/Admi/Processes.php");
}
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFile</title>
    <meta name="D A CORPORATION" description="Somos una empresa de desarrollo de software especializada en el manejo de sus documentos">
    <link rel="shortcut icon" href="../../Imagenes/LOGOpeque.png" />
    <meta name="Keywords" content="Programacion, Diseño Web, GestorDocumental, Gestores, Software" />
    <meta name="Author" description="Damian Esteban Alarcon Pinzon" />

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css" />
    <!-- DASHBOARD CSS -->
    <link rel="stylesheet" href="../../Styles/dashboard.css">
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="../../Styles/Style.css" />

</head>
<body>
<header class="p-3 bg-dark text-white site-header sticky-top py-1">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="../../Views/Admi/Main.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2" src="../../Imagenes/Logo.png" width="40" height="32" alt="LogoDAFILE">
                </a>
            </div>
        </div>
    </header>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <center><h2><b>ALTER<br>PROCESSES</b></h2></center>
                <form action="edit.php?id=<?php echo$_GET['id'] ?>" method="POST">
                        <div class="form-group mt-2">
                            <input 
                            type="text" 
                            name="Company" 
                            value="<?php echo $Company; ?>" 
                            class="form-control" 
                            placeholder="Company">
                        </div>
                        <div class="form-group mt-2">
                                <input 
                                type="text"
                                name="Type"
                                value="<?php echo $Type; ?>"
                                class="form-control"
                                placeholder="Company..."
                                >
                            </div><div class="form-group mt-2">
                                <input 
                                type="number"
                                name="employeeRef"
                                value="<?php echo $employeeRef; ?>"
                                class="form-control"
                                placeholder="employeeRef..."
                                >
                            </div><div class="form-group mt-2">
                                <input 
                                type="text"
                                name="clientsRef"
                                value="<?php echo $clientsRef; ?>"
                                class="form-control"
                                placeholder="clientsRef..."
                                >
                            </div>
                        <center>
                            <button class="btn btn-success mt-2" name="update">
                            Update
                            </button>
                        </center>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- JQUERY JS-->
<script src="../../JQuery/jquery-3.6.0.min.js"></script>

<!-- BOOTSTRAP JS-->
<script src="../../Bootstrap/js/bootstrap.min.js"></script>
<script src="../../Bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- CUSTOM JS -->
<script src="../../JS/" type="module"></script>
</body>
</html>