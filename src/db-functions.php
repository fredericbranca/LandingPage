<?php

function connection(){
    try
    {   
        // On se connecte à MySQL
        $db = new PDO('mysql:host=localhost;dbname=landingpage;charset=utf8', 'root', '');
        return $db;
    }
    catch (Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
}

function getPricings() {
    $db = connection();
    $sqlQuery = 'SELECT * FROM pricing';
    $pricingsStatement = $db->prepare($sqlQuery); //Prépare une requête à l'exécution et retourne un objet
    $pricingsStatement->execute(); //Permet d'exécuter la requête
    return $pricingsStatement->fetchAll(); //"Fetch" en anglais signifie « va chercher ».
}


if (isset($_POST['submit']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    //Filtre
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // empèche injection de SQL ou de HTML, supprime toutes les balises
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION); //FILTER_VALIDATE_FLOAT (champ "price") : validera le prix que s'il est un nombre à virgule (pas de texte ou autre…), le drapeau FILTER_FLAG_ALLOW_FRACTION est ajouté pour permettre l'utilisation du caractère "," ou "." pour la décimale.
    $sale = filter_input(INPUT_POST, 'sale', FILTER_VALIDATE_INT);
    $bandwidth = filter_input(INPUT_POST, 'bandwidth', FILTER_VALIDATE_INT);
    $onlinespace = filter_input(INPUT_POST, 'onlinespace', FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $support = filter_input(INPUT_POST, 'support', FILTER_VALIDATE_INT);
    $domain = filter_input(INPUT_POST, 'domain', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hiddenfees = filter_input(INPUT_POST, 'hiddenfees', FILTER_VALIDATE_INT);
    
    if($id !==false && $name !==false && $price !==false && $sale !==false && $bandwidth !==false && $onlinespace !==false && $domain !==false && $support !==false  && $hiddenfees !==false) {
        $pricing = ['name' => $name, 'price' => $price, 'sale' => $sale, 'bandwidth' => $bandwidth, 'onlineSpace' => $onlinespace, 'support' => $support, 'domain' => $domain, 'hiddenFees' => $hiddenfees];
        foreach($pricing as $key => $value) {
            $db = connection();
            $sqlQuery = 'UPDATE pricing SET '.$key.' = :'.$key.' WHERE id_pricing = '.$id;
            $pricingsStatement = $db->prepare($sqlQuery);
            $pricingsStatement->execute([$key => $value]);
        }
    }
    // redirection
    header("Location: update_pricing.php");
}
    // $name = 'test';
    // $db = connection();
    // $sqlQuery = 'UPDATE pricing SET name = :abc ';
    // $pricingsStatement = $db->prepare($sqlQuery);
    // $pricingsStatement->execute(["abc" => $name]);


?>