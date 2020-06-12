<?php
require "Personne.php";

session_start();

if ($_POST['username'] == '' || $_POST['password'] == '')
    header('location:login.php?errorMessage=Il y a au moins un champ vide');
elseif (!is_numeric($_POST['password']))
    header('location:login.php?errorMessage=Le mot de passe doit etre numérique');
else {
    $personne=new Personne();
    $user=$personne->login($_POST['username'],$_POST['id']);
    if ($user) {

        $_SESSION['user'] = $user->prenom;

        header('location:home.php');
    } else {
        header('location:login.php?errorMessage=Merci  de vérifier vos coordonnés');
    }
}
