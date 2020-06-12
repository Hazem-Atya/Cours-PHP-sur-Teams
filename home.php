<?php
require "Personne.php";
//je teste git

session_start();
$personne = new Personne();
$personnes = $personne->findAll();

if (!isset($_SESSION['user'])) {

    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
</head>
<body>
<div class="jumbotron">
    <h1 class="display-4">Hello <?= $_SESSION['user'] ?></h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
        featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="logout.php" role="button">Se déconnecter</a>
    </p>
</div>
<table class="table">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>ID</th>
        <th>Supprimer</th>
    </tr>
    <?php
    foreach ($personnes as $pers) {
        ?>
        <tr>
            <td><?= $pers->nom ?> </td>
            <td><?= $pers->prenom ?> </td>
            <td><?= $pers->age ?> </td>
            <td><?= $pers->id ?> </td>
            <td>
                <a href="deletePersonne.php?id=<?=$pers->id?>">
                    <i class="fa fa-trash fa-3x" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>
