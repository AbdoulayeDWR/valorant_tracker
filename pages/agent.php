<?php
include "../layout/header.php";

// URL de l'API
$url = 'https://valorant-api.com/v1/agents';

// Récupération des données depuis l'API
$data = file_get_contents($url);

// Affichage des données (vous pouvez les traiter selon le format)
//echo $data;
$result = json_decode($data, true);
//var_dump($result)
for ($i=0; $i < count($result["data"]); $i++) { 
    if ($result["data"][$i]["isPlayableCharacter"] == True) { //necessaire car il y a 2 sova dont 1 bugger
        echo $result["data"][$i]["displayName"]."\n" ;
        echo $result["data"][$i]["role"]["displayName"]."\n" ;
    }
}
