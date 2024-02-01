<?php 
include('./config.php'); 
include('./includes/classes/User.php'); 
include('./includes/classes/Constants.php'); 
include('./includes/classes/Account.php');

$account = new Account($con);

include('./includes/handlers/register-handler.php');


?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>CRUD</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary h-100">
    <main class="w-100 m-auto form-container">
        <form id="registerForm" action="index.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Inscreva-se</h1>

            <div class="form-floating" style="margin-top:10px">
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<?php echo $account->getError(Constants::$usernameTaken); ?>
                <input type="text" name="username"  class="form-control" id="username" placeholder="Nome Usuário"/>
            </div>

            <div class="form-floating" style="margin-top:10px">
				<?php echo $account->getError(Constants::$fullNameCharacters); ?>
                <input type="text" name="fullName"  class="form-control" id="fullName" placeholder="Nome Completo"/>
            </div>

            <div class="form-floating" style="margin-top:10px">
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<?php echo $account->getError(Constants::$emailTaken); ?>
                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail"/>
            </div>
            <div class="form-floating" style="margin-top:10px">
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
                <input type="password" name="password" class="form-control" id="password" placeholder="Senha"/>
            </div>

            <button type="submit" name="registerButton" class="btn btn-primary btn-lg btn-block" style="margin-top:10px"> Registrar</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block"> <a href="listRegisters.php">Registros Existentes</a> </button>
        </form>
    </main>
</body>
</html>