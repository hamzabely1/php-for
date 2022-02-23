

<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];


?>

<h2 style="color: red; ">
    <?php
    if (empty($nom)) {
    echo "remplir le nom";
}
?>
</h2>

<h2 style="color:red">
<?php

if (empty($prenom)) {
    echo "romplir le prenom";
}
  ?> 
</h2>
 


<?php


if ($nom =="hamza"&& $prenom == "hamza") {
    echo "bon code";

}else{
    echo "c'e n'est pas le bon code";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="post">
    <input type="text" name="nom">
    <br>
    <input type="text" name="prenom">
    <br>
    <input type="submit" value="Envoiyer" >
    <br>

    </form>
</body >
</html>