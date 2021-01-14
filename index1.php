<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion base de données</title>
</head>
<body>
<h1> Veuillez entrer les données du nouvel article </h1>

<?php
$question[0] = "homme, femme ou enfant ?";
$question[1] = "Type de produit";
$question[2] = "Prix";
$question[3] = "Image";

?>

<!-- Questions -->
<form action = "index1.php" method ="POST">
<label for = "Q0"> <?php echo $question[0] ?></label><br>
<input type = "text" id="Q0" name = "Q0" ><br>


<form action = "index1.php" method ="POST">
<label for = "Q1"> <?php echo $question[1] ?></label><br>
<input type = "text" id="Q1" name = "Q1" ><br>


<form action = "index1.php" method ="POST">
<label for = "Q2"> <?php echo $question[2] ?></label><br>
<input type = "text" id="Q2" name = "Q2" ><br>


<form action = "index1.php" method ="POST">
<label for = "Q3"> <?php echo $question[3] ?></label><br>
<input type = "text" id="Q3" name = "Q3" ><br>


<input type = "submit" value = "submit"><br><br>


<!-- Traitement réponses-->
<?php
if (isset ($_POST['Q0']) && ($_POST['Q1']) && ($_POST['Q2']) && $_POST['Q3']) {
    $R0 = $_POST['Q0'];
    $R1 = $_POST['Q1'];
    $R2 = $_POST['Q2'];
    $R3 = $_POST['Q3'];
    $connex = new PDO("mysql:host=localhost;dbname=produits", "root", "root");
    $sql = "INSERT INTO `$R0` (`id`, `nom_produit`, `prix`, `image`) VALUES (NULL, '$R1', '$R2', '$R3');";
    $connex->query($sql);
}

?>
</body>
</html>