<?php 
include('./config.php'); 


?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS Link -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- JQuery Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Registros Existentes</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary h-100">
    <div class="list-group w-100 m-auto form-container">

        <h1 class="h3 mb-3 fw-normal">Usuários</h1>

       <?php
            $userQuery = mysqli_query($con, "SELECT * FROM users ORDER BY RAND()");

            while ($row = mysqli_fetch_array($userQuery)) {
                echo "
                    <a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>
                        <div class='d-flex w-100 justify-content-between'>
                            <input type='text' name='username' class='form-control' id='username" . $row['id'] . "' value='" . htmlspecialchars($row['username'], ENT_QUOTES) . "'/>
                        </div>

                        <button type='button' onClick='updateData(" . $row['id'] . ")' class='btn btn-primary btn-sm' style='margin-top:10px'>Alterar Registro </button>
                        <button type='button' onClick='deleteData(" . $row['id'] . ")' class='btn btn-secondary btn-sm' style='margin-top:10px'>Deletar Registro </button>
                        <div class='phpResponse' id='phpResponse" . $row['id'] . "'></div>
                    </a>
                ";
            }
        ?>

    </div>

    <!-- JS Link -->
    <script src="./script.js"></script>
</body>
</html>