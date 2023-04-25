<?php

try
{   
    // On se connecte à MySQL
	$db = new PDO('mysql:host=localhost;dbname=landingpage;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

$sqlQuery = 'SELECT * FROM pricing';
$pricingsStatement = $db->prepare($sqlQuery); //Prépare une requête à l'exécution et retourne un objet
$pricingsStatement->execute(); //Permet d'exécuter la requête
$pricings = $pricingsStatement->fetchAll(); //"Fetch" en anglais signifie « va chercher ».

?>