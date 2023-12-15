<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Chambre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="bg-primary text-white text-center py-3">
    <?php
        $numeroChambre = $_GET["numeroChambre"];
        $NbLitSeul = $_GET["NbLitSeul"];
        $NbLitDouble = $_GET["NbLitDouble"];
        echo "<h1>Modification de la chambre numero $numeroChambre</h1>";
    ?>
</header>

<div class="container mt-4">
    <form action="../controllers/confirmationModifier.php?numAnc=<?php echo $numeroChambre; ?>" method="post">
        <table class="table caption-top">
            <thead>
                <tr>
                    <th scope="col">N chambre</th>
                    <th scope="col">Nombre de lits simples</th>
                    <th scope="col">Nombre de lits doubles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        echo "<td><input type='text' value='$numeroChambre' name='numeroChambre' class='form-control'></td>
                              <td><input type='text' value='$NbLitSeul' name='NbLitSeul' class='form-control'></td>
                              <td><input type='text' value='$NbLitDouble' name='NbLitDouble' class='form-control'></td>";
                    ?>
                </tr>
            </tbody>
        </table>

        <input type="submit" value="Modifier" class="btn btn-primary">
        <input type="submit" value="Supprimer cette chambre" class="btn btn-danger" formaction="../controllers/confirmationSupp.php">

        <table class="table caption-top mt-4">
            <thead>
                <tr>
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
                <tr>
                    <td><input type="radio" name="Lundi" ></td>
                    <td><input type="radio" name="Mardi"></td>
                    <td><input type="radio" name="Mercredi"></td>
                    <td><input type="radio" name="Jeudi" ></td>
                    <td><input type="radio" name="Vendredi"></td>
                    <td><input type="radio" name="Samedi" ></td>
                    <td><input type="radio" name="Dimanche" ></td>
                </tr>
            </tbody>
        </table>

        <input type="submit" value="Ajouter reservation" class="btn btn-success" formaction="../controllers/confirmationReservation.php">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
