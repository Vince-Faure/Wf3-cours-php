<?php 
/*
    Vous allez ajouter le code HTML de base pour une page web (!)
    Vous allez ajouter un titre H1 (Veuillez renseigner les informations)
    Vous allez y ajouter un formulaire qui vous demande :
        - Votre prénom
        - Votre nom
        - Votre age
    Lorsque l'utilisateur renseigne les informations et valide le formulaire
    vous allez envoyer les données en méthode POST
    Une fois que les données ont été envoyées,
    vous allez vérifier si elles ne sont pas vide
    si les données sont vide, vous allez afficher un message d'erreur
    si les données sont remplies, vous allez les stocker sur les cookies
    Une fois les données stockées sur les cookies
    Vous allez afficher :
        "Bonjour PRENOM NOM, tu as AGE ans"
    Exemple :
        "Bonjour Jean-Louis ERRANTE, tu as 36 ans"
    Informations importantes :
        - Le message d'erreur doit s'afficher sous le champ qui pose problème
        - Le message "Bonjour..." doit s'afficher à la place du H1 de base
*/
?>

<?php



$name = (!empty($_POST['name'])) ? $_POST['name'] : null;
$firstName = (!empty($_POST['firstName'])) ? $_POST['firstName'] : null;
$age = (!empty($_POST['age'])) ? $_POST['age'] :null;




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php



// On entre dans la condition si la variable est vide


if (!empty ($name) && !empty ($firstName) && !empty ($age)){

setcookie('Nom', $name,time()+3600);
setcookie("Prenom", $firstName,time()+3600);
setcookie('Age', $age,time()+3600);

echo "ok";
}else{
if ($name == null) {
    echo ("veuillez renseigner le champ 'Nom'");
} else {
    setcookie('Nom', $name,time()+3600);
};

if ($firstName == null) {
    echo ("Veuillez renseigner le champ 'Prenom");
} else {
    setcookie("Prenom", $firstName,time()+3600);
};
if ($age == null) {

    echo ("Veuillez renseigner le champ 'age'");
} else {
    setcookie('Age', $age,time()+3600);
};

}

?>


        <form action="#" method="POST">
        <label for="prix"><h1>Bonjour veuillez entrer vos informations :</h1></label>
        <input type="text" name="name" id="name"><br>
        <input type="text" name="firstName" id="firstName"> <br>
        <input type="number" name="age" id="age"> <br>
        <input type="submit" value="Valider">
    </form>


</body>
</html>