<?php
header("Location: ../views/hello.php");
$Lundi = $_POST["Lundi"];
if ($Lundi) {
    $Lundi = "1";
}
$Mardi = $_POST["Mardi"];
if ($Mardi) {
    $Mardi = "1";
}
$Mercredi = $_POST["Mercredi"];
if ($Mercredi) {
    $Mercredi = "1";
}
$Jeudi = $_POST["Jeudi"];
if ($Jeudi) {
    $Jeudi = "1";
}
$Vendredi = $_POST["Vendredi"];
if ($Vendredi) {
    $Vendredi = "1";
}
$Samedi = $_POST["Samedi"];
if ($Samedi) {
    $Samedi = "1";
}
$Dimanche = $_POST["Dimanche"];
if ($Dimanche) {
    $Dimanche = "1";
}
$numeroChambre = $_POST["numeroChambre"];


include_once("../model/chambre.php");

$c = new Chambre();
$c -> insertRes($Lundi,$Mardi,$Mercredi,$Jeudi,$Vendredi,$Samedi,$Dimanche, $numeroChambre);


?>