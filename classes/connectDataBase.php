<?php
 class Email {
    public $hostname = 'localhost';
    public $user = 'root';
    public $password = '';
    public $dbName = 'ecommercewhatsapp';

    public function setEmails($email,$consulta,$newletter) {
        $email = "'" . $email . "'";
        $consulta = "'" . $consulta . "'";
        $enlace = new mysqli('localhost','root','','ecommercewhatsapp');
        if($enlace->connect_error) {
            die("Connection failed: " . $enlace->connect_error);
        } else {
            echo "coneccion correcta";
        }
        $sql ="INSERT INTO `consultas_email` (`email`,`consulta`,`newletter`) VALUES ($email,$consulta,$newletter)";
        if ($enlace->query($sql) === TRUE) {
            return true;
          } else {
            echo "Error: " . $sql . "<br>" . $enlace->error;
          }
    }
 }

?>