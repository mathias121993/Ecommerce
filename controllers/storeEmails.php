<?php
   require('../classes/connectDataBase.php');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $consulta = $_POST["msg"];
    if (isset ($_POST["newsletter"]) ) {
        $newletters = "true";
    }else {
        $newletters = "false";
    }
    $almacenarEmails = new Email();
    if($almacenarEmails->setEmails($email,$consulta,$newletters)){
        header("Location: ../contacto.php");
    }
?>