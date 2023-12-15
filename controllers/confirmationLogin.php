<?php

$username = $_POST["username"];
$password= $_POST["password"];

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
        header("Location: ../views/hello.php");
    } else {
        header("Location: ../views/login.php");
    }

?>