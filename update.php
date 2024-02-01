<?php echo "A função de alterar foi chamada com sucesso!"; ?>

<?php

//    function sanitizeFormString($inputText) {
//        $inputText = strip_tags($inputText);
//        $inputText = str_replace(" ", "", $inputText);
//        $inputText = ucfirst(strtolower($inputText));
//        return $inputText;
//    }
//
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
//
//        if ($id === false || $id === null) {
//            echo "ID inválido.";
//            exit();
//        }
//
//        $username = sanitizeFormString($_POST['username']);
//
//        // Utilizar prepared statement para evitar SQL injection
//        $oldUsernameQuery = $con->prepare("SELECT username FROM users WHERE id = ?");
//        $oldUsernameQuery->bind_param("i", $id);
//        $oldUsernameQuery->execute();
//
//        $result = $oldUsernameQuery->get_result();
//        $row = $result->fetch_assoc();
//
//        $oldUsernameQuery->close();
//
//        if ($row['username'] == $username) {
//            echo "Nome de usuário não alterado.";
//        } else {
//            // Utilizar prepared statement para evitar SQL injection
//            $sqlUpdate = $con->prepare("UPDATE users SET username = ? WHERE id = ?");
//            $sqlUpdate->bind_param("si", $username, $id);
//
//            if ($sqlUpdate->execute()) {
//                echo "Dado alterado com sucesso";
//            } else {
//                echo "Erro ao alterar o dado: " . $sqlUpdate->error;
//            }
//
//            $sqlUpdate->close();
//        }
//    } else {
//        echo "Método inválido.";
//    }

?>
