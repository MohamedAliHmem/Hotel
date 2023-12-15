<?php
header("Location: ../views/hello.php");
$numeroChambre = $_POST["numeroChambre"];

include_once("../model/chambre.php");

$c = new Chambre();
$c -> delete($numeroChambre);


?>