

<?php
try
{
	 $bd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bd->prepare('INSERT INTO Joueurs(Num, Poste, Nom, Age, Selection, Buts, Club, Annee) VALUES(:num,:poste, :nom, :age, :selec, :buts, :club, :annee)');

$vrf = $bd->prepare('SELECT * FROM Joueurs WHERE Num = ?');

if(isset($_POST['num']) && ($_POST['num']>99 || $_POST['num']<0) && !empty($_POST['num'])){
	?>
	<h3>Numero invalid !</h3>
	<?php
}elseif(isset($_POST['annee']) && ($_POST['annee']<1962 || $_POST['annee']>2021) && !empty($_POST['annee'])){
	?>
	<h3>Annee invalid !</h3>
	<?php
}
elseif((isset($_POST['num']) || isset($_POST['poste']) || isset($_POST['nom']) || isset($_POST['age']) || isset($_POST['selec']) || isset($_POST['buts']) || isset($_POST['club']) || isset($_POST['annee'])) &&
(!empty($_POST['num']) && !empty($_POST['poste']) && !empty($_POST['nom']) && !empty($_POST['age']) && !empty($_POST['selec']) && !empty($_POST['buts']) && !empty($_POST['club']) && !empty($_POST['annee']))){
	$req->execute(array(
	'num' => $_POST['num'],
	'poste' => $_POST['poste'],
	'nom' => $_POST['nom'],
	'age' => $_POST['age'],
	'selec' => $_POST['selec'],
	'buts' => $_POST['buts'],
	'club' => $_POST['club'],
    'annee' => $_POST['annee']
	));

	$vrf->execute(array($_POST['num']));
	$rslt=$vrf->rowCount();

	if($rslt>0){ 
		?>
		<h3>Ce joueur existe deja !</h3>
		<?php
	}else{
		?>
		<h3>Un nouveaux joueur a été correctement rajouté</h3>
		<?php
	}
}else{
	?>
	<h3>Vous avez oublie de remplir quelque chose....</h3>
	<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="ajouterBDphp.css">
</head>
<body>
	<a href="page1.html">Retourner</a>
</body>
</html>
