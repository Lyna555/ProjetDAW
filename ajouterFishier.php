<?php

try
{
	 $bd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$cp=0;

$req = $bd->prepare('INSERT INTO Joueurs(Num, Poste, Nom, Age, Selection, Buts, Club, Annee) VALUES(:num,:poste, :nom, :age, :selec, :buts, :club, :annee)');

$file=fopen('Joueurs.txt','r+');

if(isset($_POST['num']) && !empty($_POST['num'])){
while(!feof($file)){
    $line=fgets($file);
    $info = array_pad(explode(" | ",$line),8,null);
    list($num,$poste,$nom,$age,$selec,$buts,$club,$annee)=$info;
    if($num==$_POST['num']){
        $req->execute(array(
            'num' => $num,
            'poste' => $poste,
            'nom' => $nom,
            'age' => $age,
            'selec' => $selec,
            'buts' => $buts,
            'club' => $club,
            'annee' => $annee,
            ));
            ?>
            <h3>Insertion acomplie !</h3>
            <?php
            $cp++;
            break;
    }
}
}
else{
    ?>
	<h3>Vous n'avez rien saisie !</h3>
    <?php
}
if($cp==0 && !empty($_POST['num'])){
    ?>
    <h3>Ce numero n'existe pas !</h3>
    <?php
}

fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ajouterFishierphp.css">
</head>
<body>
        <a href="page1.html">Retourner</a>
</body>
</html>