<?php include("../../DataBase/Conexion.php");?>

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
        
    <header class="py-3 barra">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto sm-12 text-dark text-decoration-none">
                <img class="bi me-2" src="../../Imagenes/LogoPrograma.png" width="60" height="60"/>
                <p class="h4">DA FILE MANAGER</p>
            </a>
        </div>
    </header>

<div class="container-fluid">
    <div class="row">
        <div class="barra-lateral col-12 col-sm-auto">
            <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                <a href="Main.php">
                    <img src="../../Imagenes/Dashboard/Employees.png" alt="Employees" class="rounded-circle me-3" width="45" height="45">
                    <b>EMPLOYEE</b>
                </a>
                <a href="Diligence.php">
                    <img src="../../Imagenes/Dashboard/Cliente.png" alt="Diligence" class="rounded-circle me-3" width="45" height="45">
                    <b>DILIGENCE</b>
                </a>
                <a href="Files.php">
                    <img src="../../Imagenes/Dashboard/Caja.png" alt="Caja" class="rounded-circle me-3" width="45" height="45">
                    <b>FILES</b>
                </a>
                <a href="Processes.php">
                    <img src="../../Imagenes/Dashboard/Manos.png" alt="Processes" class="rounded-circle me-3" width="45" height="45">
                    <b>PROCESSES</b>
                </a>
                <a href="../../DataBase/Logout.php">
                    <img src="../../Imagenes/Dashboard/Exit.png" alt="Processes" class="rounded-circle me-3" width="45" height="45">
                    <b>EXIT</b>
                </a>
            </nav>
        </div>
        <main class="main col">
            <div class="row justify-content-center align-content-center text-center mb-4">
                <div class="col-sm-8">
                    
                <?php  if(isset($_SESSION['message'])) { ?>

                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php session_unset(); } ?>

                <div class="card card body px-4 py-4">
                        <h2 class="mb-4">NEW EMPLOYEE!!</h2>
                        <form action="../../DataBase/Employee/save_task.php" method="POST">
                            <div class="form-group">
                                <input 
                                type="text"
                                name="Position_input"
                                class="form-control mb-2"
                                placeholder="Position..."
                                >
                            </div>
                            <div class="form-group">
                                <input 
                                type="text"
                                name="UserName_input"
                                class="form-control mb-2"
                                placeholder="UserName..."
                                >
                            </div><div class="form-group">
                                <input 
                                type="text"
                                name="Password_input"
                                class="form-control mb-2"
                                placeholder="Password."
                                >
                            </div><div class="form-group">
                                <input 
                                type="number"
                                name="PeopleRef_input"
                                class="form-control mb-2"
                                placeholder="PeopleRef.."
                                >
                            </div><div class="form-group">
                                <input 
                                type="number"
                                name="DependenceRef_input"
                                class="form-control mb-2"
                                placeholder="DependenceRef..."
                                >
                            </div>
                            <input type="submit" 
                                class="btn btn-success btn-block"
                                name="save_task"
                                value="Save Task"
                                >
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-content-center text-center">
                <div class="columna col-sm-12 ">
                    <table Id="TableJs" class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="table-primary">#</th>
                                <th scope="col" class="table-primary">Position</th>
                                <th scope="col" class="table-primary">UserName</th>
                                <th scope="col" class="table-primary">Password</th>
                                <th scope="col" class="table-primary">PeopleRef</th>
                                <th scope="col" class="table-primary">DependenceRef</th>
                                <th scope="col" class="table-primary">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="rowsContact" >
                            <?php
                            $query = "SELECT * FROM employee";
                            $result_employee = mysqli_query($conexion, $query);

                            while ($row = mysqli_fetch_array($result_employee)) { ?>
                                <tr>
                                    <td><?php echo $row['ID']  ?></td>
                                    <td><?php echo $row['Position']  ?></td>
                                    <td><?php echo $row['UserName']  ?></td>
                                    <td><?php echo $row['Password']  ?></td>
                                    <td><?php echo $row['PeopleRef']  ?></td>
                                    <td><?php echo $row['DependenceRef']  ?></td>
                                    <td>
                                        <a href="../../DataBase/Employee/edit.php?id=<?php echo $row['ID'] ?>" class="btn btn-secondary">
                                            <img src="../../Imagenes/Dashboard/editar.png" alt="Edit">
                                        </a>
                                        <a href="../../DataBase/Employee/delete_task.php?id=<?php echo $row['ID'] ?>"class="btn btn-danger">
                                            <img src="../../Imagenes/Dashboard/Trash.png" alt="Trash">
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>       
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