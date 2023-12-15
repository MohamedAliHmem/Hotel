<?php
header("Location: ../views/hello.php");
$numeroChambre = $_POST["numeroChambre"];
$NbLitSeul = $_POST["NbLitSeul"];
$NbLitDouble = $_POST["NbLitDouble"];

include_once("../model/chambre.php");

$c = new Chambre();
$c -> insert($numeroChambre,$NbLitSeul,$NbLitDouble);


?>