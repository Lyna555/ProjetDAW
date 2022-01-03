<?php
try {
	$bd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

?>
<h1>La liste des joueurs trouve :</h1>
<?php

if (isset($_POST['chercher']) && !empty($_POST['chercher'])) {
	if ($_POST['select'] == "num") {
		$req1 = $bd->prepare('SELECT * FROM Joueurs WHERE Num = ?');
		$req1->execute(array($_POST['chercher']));

		$rslt = $req1->rowCount();

		if ($rslt == 0) {
?>
			<h3>Aucun resultat ...</h3>
		<?php
		}
	
	while ($dn = $req1->fetch()) {
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
				<th><?php echo $dn['Num']; ?></th>
				<th><?php echo $dn['Poste']; ?></th>
				<th><?php echo $dn['Nom']; ?></th>
				<th><?php echo $dn['Age']; ?></th>
				<th><?php echo $dn['Selection']; ?></th>
				<th><?php echo $dn['Buts']; ?></th>
				<th><?php echo $dn['Club']; ?></th>
				<th><?php echo $dn['Annee']; ?></th>
			</tr>
			<br>
		</table>
		<?php
	}}
	elseif ($_POST['select'] == "poste") {
		$req2 = $bd->prepare('SELECT * FROM Joueurs WHERE Poste = ?');

			$req2->execute(array($_POST['chercher']));

			$rslt = $req2->rowCount();

			if ($rslt == 0) {
		?>
				<h3>Aucun resultat ...</h3>
			<?php
			}
		while ($dn = $req2->fetch()) {
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
					<th><?php echo $dn['Num']; ?></th>
					<th><?php echo $dn['Poste']; ?></th>
					<th><?php echo $dn['Nom']; ?></th>
					<th><?php echo $dn['Age']; ?></th>
					<th><?php echo $dn['Selection']; ?></th>
					<th><?php echo $dn['Buts']; ?></th>
					<th><?php echo $dn['Club']; ?></th>
					<th><?php echo $dn['Annee']; ?></th>
				</tr>
				<br>
			</table>
	<?php
		}

		$req2->closeCursor();
	}elseif ($_POST['select'] == "nom") {
		$req3 = $bd->prepare('SELECT * FROM Joueurs WHERE Nom = ?');

			$req3->execute(array($_POST['chercher']));

			$rslt = $req3->rowCount();

			if ($rslt == 0) {
		?>
				<h3>Aucun resultat ...</h3>
			<?php
			}
		while ($dn = $req3->fetch()) {
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
					<th><?php echo $dn['Num']; ?></th>
					<th><?php echo $dn['Poste']; ?></th>
					<th><?php echo $dn['Nom']; ?></th>
					<th><?php echo $dn['Age']; ?></th>
					<th><?php echo $dn['Selection']; ?></th>
					<th><?php echo $dn['Buts']; ?></th>
					<th><?php echo $dn['Club']; ?></th>
					<th><?php echo $dn['Annee']; ?></th>
				</tr>
				<br>
			</table>
	<?php
		}

		$req3->closeCursor();
	}elseif ($_POST['select'] == "age") {
		$req4 = $bd->prepare('SELECT * FROM Joueurs WHERE Age = ?');

			$req4->execute(array($_POST['chercher']));

			$rslt = $req4->rowCount();

			if ($rslt == 0) {
		?>
				<h3>Aucun resultat ...</h3>
			<?php
			}
		while ($dn = $req4->fetch()) {
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
					<th><?php echo $dn['Num']; ?></th>
					<th><?php echo $dn['Poste']; ?></th>
					<th><?php echo $dn['Nom']; ?></th>
					<th><?php echo $dn['Age']; ?></th>
					<th><?php echo $dn['Selection']; ?></th>
					<th><?php echo $dn['Buts']; ?></th>
					<th><?php echo $dn['Club']; ?></th>
					<th><?php echo $dn['Annee']; ?></th>
				</tr>
				<br>
			</table>
	<?php
		}

		$req4->closeCursor();
	}elseif ($_POST['select'] == "selec") {
		$req5 = $bd->prepare('SELECT * FROM Joueurs WHERE Selection = ?');

			$req5->execute(array($_POST['chercher']));

			$rslt = $req5->rowCount();

			if ($rslt == 0) {
		?>
				<h3>Aucun resultat ...</h3>
			<?php
			}
		while ($dn = $req5->fetch()) {
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
					<th><?php echo $dn['Num']; ?></th>
					<th><?php echo $dn['Poste']; ?></th>
					<th><?php echo $dn['Nom']; ?></th>
					<th><?php echo $dn['Age']; ?></th>
					<th><?php echo $dn['Selection']; ?></th>
					<th><?php echo $dn['Buts']; ?></th>
					<th><?php echo $dn['Club']; ?></th>
					<th><?php echo $dn['Annee']; ?></th>
				</tr>
				<br>
			</table>
	<?php
		}

		$req5->closeCursor();
	}elseif ($_POST['select'] == "buts") {
		$req6 = $bd->prepare('SELECT * FROM Joueurs WHERE Buts = ?');

			$req6->execute(array($_POST['chercher']));

			$rslt = $req6->rowCount();

			if ($rslt == 0) {
		?>
				<h3>Aucun resultat ...</h3>
			<?php
			}
		while ($dn = $req6->fetch()) {
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
					<th><?php echo $dn['Num']; ?></th>
					<th><?php echo $dn['Poste']; ?></th>
					<th><?php echo $dn['Nom']; ?></th>
					<th><?php echo $dn['Age']; ?></th>
					<th><?php echo $dn['Selection']; ?></th>
					<th><?php echo $dn['Buts']; ?></th>
					<th><?php echo $dn['Club']; ?></th>
					<th><?php echo $dn['Annee']; ?></th>
				</tr>
				<br>
			</table>
	<?php
		}

		$req6->closeCursor();
	}elseif ($_POST['select'] == "club") {
		$req7 = $bd->prepare('SELECT * FROM Joueurs WHERE Club = ?');

			$req7->execute(array($_POST['chercher']));

			$rslt = $req7->rowCount();

			if ($rslt == 0) {
		?>
				<h3>Aucun resultat ...</h3>
			<?php
			}
		while ($dn = $req7->fetch()) {
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
					<th><?php echo $dn['Num']; ?></th>
					<th><?php echo $dn['Poste']; ?></th>
					<th><?php echo $dn['Nom']; ?></th>
					<th><?php echo $dn['Age']; ?></th>
					<th><?php echo $dn['Selection']; ?></th>
					<th><?php echo $dn['Buts']; ?></th>
					<th><?php echo $dn['Club']; ?></th>
					<th><?php echo $dn['Annee']; ?></th>
				</tr>
				<br>
			</table>
	<?php
		}

		$req7->closeCursor();
	}elseif ($_POST['select'] == "annee") {
		$req8 = $bd->prepare('SELECT * FROM Joueurs WHERE Annee = ?');

			$req8->execute(array($_POST['chercher']));

			$rslt = $req8->rowCount();

			if ($rslt == 0) {
		?>
				<h3>Aucun resultat ...</h3>
			<?php
			}
		while ($dn = $req8->fetch()) {
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
					<th><?php echo $dn['Num']; ?></th>
					<th><?php echo $dn['Poste']; ?></th>
					<th><?php echo $dn['Nom']; ?></th>
					<th><?php echo $dn['Age']; ?></th>
					<th><?php echo $dn['Selection']; ?></th>
					<th><?php echo $dn['Buts']; ?></th>
					<th><?php echo $dn['Club']; ?></th>
					<th><?php echo $dn['Annee']; ?></th>
				</tr>
				<br>
			</table>
	<?php
		}

		$req8->closeCursor();
	}
} else {
	?>
	<h3>Vous n'avez rien sesie!</h3>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="chercherphp.css">
</head>

<body>
	<br><br>
	<a href="page1.html">Retourner</a>
</body>

</html>