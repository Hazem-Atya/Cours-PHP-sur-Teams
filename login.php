<?php
session_start();
if(isset($_SESSION['user']))
{
    header('location:home.php');
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<form action="connexion.php" method="post">
    <h5>Nom:</h5>
    <input  type="text" name="username" class="form-control col-3">
    <h5>ID:</h5>
    <input type="password" name="password" class="form-control col-3">
    <button type="submit" class="btn btn-primary">Login</button>
    <?php
    if (isset($_GET['errorMessage'])) {

        ?>
        <div class="alert alert-danger">
        
            <?=$_GET['errorMessage'] ?>
        </div>
        <?php
    }
    ?>
</form>
</body>
</html>