<?php
session_start();
$i=0;
if(!isset($_SESSION['user']))
{
    echo "Bonjour Mr Hazem ! C'est votre première visite <br>";
    $_SESSION['nbVisite']=1;
}else {
    $_SESSION['user']='Hazem';
    $i=$_SESSION['nbVisite']++;
    echo "Bonjour Mr Hazem Atya c'est votre visite n°$i";
}
//print_r ($_SESSION);