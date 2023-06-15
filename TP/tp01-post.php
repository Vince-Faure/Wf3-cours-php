<?php
/*
    Créer un petit programme qui permet de saisir un prix HT
    et d'afficher le prix TTC correspondant


    // INFORMATIONS
    - Le prix HT, doit être renseigné directement sur le formulaire sur la page (POST)

    - Vous allez faire le calcul et stocker le montant TTC sur une variable

    - Vous allez faire un echo affichant :
        Le prix HT est = (ajouter la variable du prixHT), le prix TTC est = (ajouter la variable du prix TTC), le montant total de la TVA est = (ajoutez le montant de la TVA)

    - Taux TVA = 20%

    // EXEMPLE
    Si le prix HT est 10, vous devez afficher :
    Le prix HT est = 10€, le prix TTC est = 12€, le montant total de la TVA est = 2€

*/

// Le prix HT doit être récupéré directement sur le formulaire

// Ternaire = if, else sur une seule ligne
// if(!empty($_GET['prixht'])){
//     $prixHT = $_GET['prixht'];
// } else {
//     $prixHT = null;
// }

// Ternaire :
// laVariable = (condition a tester) ? valeur si vraie : valeur si faux
$prixHT = (!empty($_GET['prixht'])) ? $_GET['prixht'] : null;
// $prixHT = $_GET['prixht'];
$TVA = 20;
$montantTVA = $prixHT * $TVA/100;
$prixTTC = $prixHT + $montantTVA;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Prix TTC</title>
</head>
<body>
    <h1>Calculer le prix TTC</h1>
    <?php 
        if(!empty($prixHT)){
            echo "<p>Le prix HT est = $prixHT €, le prix TTC est = $prixTTC €, le montant total de la TVA est = $montantTVA €</p>";
        }
    ?>
    <form action="#" method="get">
        <label for="prix">Entrez un prix HT :</label>
        <input type="number" name="prixht" id="prix">
        <input type="submit" value="Calculer !">
    </form>
</body>
</html>