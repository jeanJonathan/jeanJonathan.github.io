<?php
/**
 * @file rnevoie.php 
 * @brief fichier presentant la date courante ainsi que le profit du joueur
 * @autor Guillaume Arricastre
 * version 
 * date 
 * 
 * */
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="profil.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MON PROFIL</title>

</head>
<header>

    <h2>Bonjour <?php echo $_SESSION['pseudo']?></h2>
    <p>Nous sommes le <?php echo date("d/m/Y") ?></p>


 
<form action="deconnexion.php" method="post">
    <button type="submit" id="envoyer" name="envoyer">Deconnexion</button>
<form>

</header>
</html>