<?php
try {
        $bd = new PDO('mysql:host=localhost;dbname=EquipeNationale;charset=utf8', 'root', '');
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}
$req = $bd->prepare('DELETE FROM Joueurs WHERE Num = ?');

if (isset($_POST['num']) && !empty($_POST['num']) && ($_POST['num'] > 99 || $_POST['num'] == 0)) {
?>

        <h3>Numero invalid!</h3>
        <?php
} elseif (isset($_POST['num']) && !empty($_POST['num'])) {
        $req->execute(array($_POST['num']));
        $rslt = $req->rowCount();
        if ($rslt == 0) {
        ?>
                <h3>Ce Joueur n'exist pas ...</h3>

        <?php
        } else {
        ?>
                <h3>Joueur correctement supprimé</h3>
        <?php
        }
} else {
        ?>
        <h3>Vous n'avez rien saisie !</h3>
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
        <link rel="stylesheet" href="supprimerphp.css">
</head>

<body>
        <a href="page1.html">Retourner</a>
</body>

</html>