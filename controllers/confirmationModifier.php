<?php
header("Location: ../views/hello.php");
$numeroChambre = $_POST["numeroChambre"];
$NbLitSeul = $_POST["NbLitSeul"];
$NbLitDouble = $_POST["NbLitDouble"];
$numAnc = $_GET["numAnc"];

include_once("../model/chambre.php");

$c = new Chambre();
$c -> modifier($numeroChambre,$NbLitSeul,$NbLitDouble,$numAnc);


?>