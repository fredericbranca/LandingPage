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

//fonction pour afficher onlinespace en MB ou GB
function convert($number) {
    if ($number < 1) {
        return $number * 1000 . 'MB';
    }
    else {
        return $number . 'GB';
    }
}

//fonction pour afficher un booléen en texte
function getYesNoBool($number) {
    if ($number) {
        return 'Yes';
    }
    else{
        return 'No';
    }
}

//fonction pour afficher les icones v ou x
function getIconeCheck($number) {
    if ($number) {
        return '<i class="fa-sharp fa-regular fa-circle-check"></i>';
    }
    else {
        return '<i class="fa-sharp fa-regular fa-circle-xmark"></i>';
    }
}
// On affiche chaque pricing un à un
// foreach ($pricings as $pricing) {

//     echo '<p>Nom : ' . $pricing['name'] . ', Prix : ' . $pricing['price'] . '$, Promotion : ' . $pricing['sale'] . '%, Bande passante : ' . $pricing['bandwidth'] . 'GB, Stockage : ' . $pricing['online_space'] . 'GB, Support : ' . $pricing['support'] . ', Domaine : ' . $pricing['domain'] . ', HF : ' . $pricing['hidden_fees'] . '</p>';
// }

?>