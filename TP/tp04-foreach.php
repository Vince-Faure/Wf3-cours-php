<?php


/*tableau indexé*/

$notes=array(12,15,10,2);

foreach($notes as $note){
    echo "la note : $note <br />";
}

/*recupération (key)clé /(value)valeur tableau associatif*/

$notes2=array(
    "jean"=>12,
    "monique"=>15,
    "Ahmed"=>10,
    "Roukata"=>2);


foreach($notes2 as $key => $value){
    echo "La notes  : $key  est $value / 20 <br />";
}
?>