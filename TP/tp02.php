<?php

/*Créer un programme qui demande la valeur entiére d'un nmobre et qui affiche son double  si cette donnée est inferieure à un seuil
-Le seuil doit être défini dans une variable
-La valeur doit être entrée directement dans une variable

Exemple :
 Le seuil est 10
 la variable est 5

 affichera 10(5*2)




$seuil = 10;
$number = 6;
$calc= $number*2;

if ($calc > $seuil){
echo "Vous avez dépassé le seuil : $seuil";
}else{ echo " $seuil est inferieur à  $calc";};*/

/* correction*/
function calculDouble($valeur, $seuil) {
    if ($valeur < $seuil) {
        return $valeur * 2;
    }
    return $valeur;
}

$valeur = 20;
$seuil = 10;

echo "Le seuil est : $seuil <br>";
echo 'La valeur est : ' . calculDouble($valeur, $seuil);


?>