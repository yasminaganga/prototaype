<?php
 require 'TEst.php';
if(isset($_POST['ok'])){
    $rticle=$_POST['Article'];
     $Contenu=$_POST['Contenu'];

     $artic= new Article();
     $artic->cerite_articl( $rticle, $Contenu);
     header( "Location: afichie.php ");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Article</label><br><br>
    <input type="text" name="Article"><br><br>
<label for="">Contenu</label><br><br>
    <textarea type="text" name="Contenu"> </textarea><br><br>

    <input type="submit" name="ok">
    </form>
</body>
</html>