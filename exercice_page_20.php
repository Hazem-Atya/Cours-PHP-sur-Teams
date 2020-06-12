<?php
function compter($chaine)
{
    $tab=[];
    $nb=count_chars($chaine,1);


    return $nb;
}
$test= compter('Je suis Hazem Atya');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2">
    <tr>
        <th>Caractère</th>
        <th>Nombre d'occurence</th>
    </tr>
    <?php
    foreach ($test as $indice=>$el) {
        ?>
        <tr>
            <td><?= chr($indice) ?></td>
            <td><?= $el ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
