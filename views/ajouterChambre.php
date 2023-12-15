<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Chambre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="bg-primary text-white text-center py-3">
    <h1>Ajouter une chambre</h1>
</header>

<div class="container mt-4">
    <form action="../controllers/confirmationAjout.php" method="post">
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
                    <td><input type="text" name="numeroChambre" class="form-control"></td>
                    <td><input type="text" name="NbLitSeul" class="form-control" id=""></td>
                    <td><input type="text" name="NbLitDouble" class="form-control" id=""></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Ajouter" class="btn btn-primary">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
