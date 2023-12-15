<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Chambres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="bg-primary text-white text-center py-3">
    <h1>Gestion des Chambres</h1>
</header>

<div class="container mt-4">
    <form action="" method="post">
        <table class="table caption-top">
    <thead>
      <tr>
        <th scope="col">chambre</th>
        <th scope="col">Lundi</th>
        <th scope="col">Mardi</th>
        <th scope="col">Mercredi</th>
        <th scope="col">Jeudi</th>
        <th scope="col">Vendredi</th>
        <th scope="col">Samedi</th>
        <th scope="col">Dimanche</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
      include_once("../model/chambre.php");

      $c = new Chambre();
      $res = $c->liste() ;
      while($row = $res->fetch()){
        echo "<tr>
        <th scope='row'>
        <a href='modifierChambre.php?numeroChambre=$row[0]&NbLitSeul=$row[1]&NbLitDouble=$row[2]' class='list-group-item list-group-item-action'>$row[0]</a>
        </th>";
        for($i= 3;$i<10;$i++){
          echo "<td>";
          if($row[$i]==1){
            echo "Reserved";
          }
          echo "</td>";
        }
        echo "</tr>";
    }

?>
    </tbody>
    </table>
        <h5 class="text-center mt-4">Cliquez pour modifier, supprimer ou ajouter une reservation</h5>
        <input type="submit" value="Ajouter Chambre" formaction="ajouterChambre.php" class="btn btn-primary">
        <input type="submit" value="Log out" formaction="index.php" class="btn btn-danger">
    </form>
</div>

<footer class="bg-light text-dark text-center py-3 mt-4">
    <p>Contactez-nous: info@paloma.com</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>