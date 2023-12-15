<?php
header("Location: ../views/hello.php");
$username = $_POST["username"];
$password= $_POST["password"];
$email= $_POST["email"];
$numero= $_POST["numero"];

include_once("../model/chambre.php");


$c = new Chambre();
$authenticated = false;
$res = $c->listeLog() ;
      while($row = $res->fetch()){
        if($username == $row["0"] and $password==$row["1"]){
            $authenticated = true;
            break;
        }
    }
    if ($authenticated) {
        header("Location: ../views/loginReg.php");
    } else {
        $c = $c->insertLog($username, $password,$email,$numero);
    }
?>