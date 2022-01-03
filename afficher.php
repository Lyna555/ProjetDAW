<?php
try
{
	 $bd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$rps = $bd->query('SELECT * FROM Joueurs');
$rps->execute();
$rslt=$rps->rowCount();

if($rslt==0){
        ?>
        <h3>Aucun joueur n'est ajoute pour le moment...</h3>
        <?php
}else{
        while ($dn = $rps->fetch())
        {
        ?>
        <table>
                <tr>
                        <th>Num</th>
                        <th>Poste</th>
                        <th>Nom</th>
                        <th>Age</th>
                        <th>Selection</th>
                        <th>Buts</th>
                        <th>Club</th>
                        <th>Annee</th>
                </tr>
        
                <tr>
                        <th><?php echo $dn['Num'];?></th>
                        <th><?php echo $dn['Poste'];?></th>
                        <th><?php echo $dn['Nom'];?></th>
                        <th><?php echo $dn['Age'];?></th>
                        <th><?php echo $dn['Selection'];?></th>
                        <th><?php echo $dn['Buts'];?></th>
                        <th><?php echo $dn['Club'];?></th>
                        <th><?php echo $dn['Annee'];?></th>
                </tr>
                <br>
        </table>
        <?php	
        }}
        
        $rps->closeCursor();
        
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="afficher.css">
</head>
<body>
        <a href="page1.html">Retourner</a>
</body>
</html>        