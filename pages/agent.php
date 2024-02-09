<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant Tracker</title>
</head>
<?php
// URL de l'API
$url = 'https://valorant-api.com/v1/agents';

// Récupération des données depuis l'API
$data = file_get_contents($url);

// Affichage des données (vous pouvez les traiter selon le format)
//echo $data;
$result = json_decode($data, true);
//var_dump($result)
for ($i=0; $i < count($result["data"]); $i++) { 
    echo $result["data"][$i]["displayName"]."\n" ;
}
?>


</body>
</html>
<body>