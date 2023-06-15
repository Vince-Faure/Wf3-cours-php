<!--
/*
    Créer un petit programme qui permet de saisir un prix HT
    et d'afficher le prix TTC correspondant


    // INFORMATIONS
    - Le prix HT, doit être renseigné directement sur le formulaire sur la page (get)

    - Vous allez faire le calcul et stocker le montant TTC sur une variable

    - Vous allez faire un echo affichant :
        Le prix HT est = (ajouter la variable du prixHT), le prix TTC est = (ajouter la variable du prix TTC), le montant total de la TVA est = (ajoutez le montant de la TVA)

    - Taux TVA = 20%

    // EXEMPLE
    Si le prix HT est 10, vous devez afficher :
    Le prix HT est = 10€, le prix TTC est = 12€, le montant total de la TVA est = 2€

*/

// Le prix HT doit être récupéré directement sur le formulaire

$prixHT = 10;
$TVA = 20;
$montantTVA = $prixHT * $TVA/100;
$prixTTC = $prixHT + $montantTVA;

echo "Le prix HT est = $prixHT €, le prix TTC est = $prixTTC €, le montant total de la TVA est = $montantTVA €";-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tva_get</title>
</head>
<body>
    <h1>Calcul de Tva</h1>
    <?php
    // On récupère les données envoyées sur "data"
    // $data = $_GET['data'];
    // echo "<p> Voici la donnée envoyée : $data </p>";

    // On ne devrait pas pouvoir afficher la donnée si elle n'existe pas
    // Avant l'affichage, on vérifie si la variable $_GET['data'] existe, si elle est définie

    // isset($variable) permet de tester si la variable existe
    // empty($variable) permet de tester si une variable EST vide
    // !empty($variable) permet de tester si une variable n'est PAS vide

    /*
            Sur les verions récentes de PHP, vous n'êtes plus obligé d'utiliser isset
            Si vous utilisez !empty, cela fait les deux tests en même temps

        */



    $prixHt= $_GET["montant"];

    $tva = 2/100;

    $prixTtc= $prixHt+($prixHt * $tva);
    
    

        if(isset($_GET["montant"]) && !empty($_GET["montant"])){

            echo(" Le prix HT est = $prixHt, le prix TTC est = $prixTtc, le montant total de la TVA est = $tva");
        } else {
            echo "<p>Veuillez saisir un montant.</p>";
        }
    ?>
    <form action="#" method="get">
        <label for="texte">Entrez un Montant :</label>
        <input type="text" id="texte" name="montant" placeholder="montant">

        <input type="submit" value="Envoyer !">
    </form>
</body>
</html>