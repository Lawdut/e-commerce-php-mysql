<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cduvent</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    
</head>
<body>


<div id = "imageEnTete"></div>

<div class = "containerOnglet">

        <ul class = "flexOnglet">
            <div id = "ongletHomme"><a href = "homme.php"> Homme </div>
            <div id = "ongletFemme"><a href = "femme.php"> Femme </div>
            <div id = "ongletEnfant"><a href = "enfant.php"> Enfant </div>

        </ul>  


<div class = "containerProduit">
<?php

$connex = new PDO("mysql:host=localhost;dbname=produits", "root", "root");
$sql = "SELECT * FROM enfant";
$enfant = $connex->query($sql);
$resultat = $enfant->fetchAll();


foreach ($resultat as $Enfant) {
    echo "<div class='enfant'>".
    "<img src= 'images/".$Enfant['image']."'"."/>".
    "<h2>".$Enfant['nom_produit']."</h2>".
    "<p>".$Enfant['prix']."€"."</p>".
    "</div>"
    ;
}
?>
        
        
        
</div>
</body>
</html>






<!--<?php
//$Json = file_get_contents("hommes.json");
// Converts to an array 
//$myarray = json_decode($Json, true);
//var_dump($myarray); // prints array
?>-->