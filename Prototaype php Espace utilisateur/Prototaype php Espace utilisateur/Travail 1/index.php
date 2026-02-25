<?php    

 
   $name= "Guest";
   $color  = "white";
    $Langue = "fr";

   if(isset($_COOKIE["name"])){
     
      $name = $_COOKIE["name"];
     
   }

   if(isset($_COOKIE["bg_color"])){
      $color = $_COOKIE["bg_color"];
   }

   if(isset($_COOKIE["Langue"])){
      $Langue = $_COOKIE["Langue"];
   }

   if($_SERVER["REQUEST_METHOD"] === "POST"){
         
   
    if(!empty($_POST["f_name"])){

    $name= $_POST["f_name"];
    setcookie("name" , $name , time() + 3600 * 24 * 30);
    }

     if(!empty($_POST["bg_color"])){

    $color= $_POST["bg_color"];
    setcookie("bg_color" , $color , time() + 3600 * 24 * 30);
    }

    if(!empty($_POST["choose"])){
        $Langue= $_POST["choose"];
        setcookie("Langue" , $Langue , time() + 3600 * 24 * 30);
    }
   }


    if($_SERVER["REQUEST_METHOD"] === "GET"){

        if(isset($_GET["action"]) && $_GET["action"] == "rest"){
        $name="Guest";
        setcookie("name" , $name , time() - 3600 * 24 * 30);
        $color="white";
        setcookie("bg_color" , $color , time() - 3600 * 24 * 30);
        $Langue="fr";
        setcookie("Langue" , $Langue , time() - 3600 * 24 * 30);

   }

   

  }
$translations = [

    "en" => [
        "welcome" => "Welcome, ",
        "lastUpdate" => "Last update is: ",
        "labelName" => "Name",
        "labelLanguage" => "Language",
        "btnSave" => "Save your choices",
        "btnReset" => "Reset all",
        "labelColor" => "Background color"
    ],

    "fr" => [
        "welcome" => "Bienvenue, ",
        "lastUpdate" => "Dernière mise à jour : ",
        "labelName" => "Nom",
        "labelLanguage" => "Langue",
        "btnSave" => "Enregistrer mes choix",
        "btnReset" => "Réinitialiser tout",
        "labelColor" => "Couleur de fond"
    ]

];
$text = $translations[$Langue] ?? $translations["fr"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

   <body style="background-color: <?php echo $color; ?>;">


     <div>
         
          <h1><?php echo $text["welcome"] . $name; ?></h1>
          <h3><?php echo $text["lastUpdate"]; ?> 22-1-2026 12:02:15</h3>

          <form action="" method="post">

           <label><?php echo $text["labelName"]; ?></label>
            <input type="text" name="f_name" id="name">

            <br>
            <br>

        <label><?php echo $text["labelColor"]; ?></label>
            <input type="color" name="bg_color" value="<?php echo $color; ?>">

            <br>
            <br>

        <label><?php echo $text["labelLanguage"]; ?></label>

            <select name="choose">

                <option value="en"<?php if($Langue=="en") echo "selected"; ?>>English</option>
                <option value="fr"<?php if($Langue=="fr") echo "selected"; ?>>francis</option>
  </select>

             <br>
             <br>

           <input type="submit" value="<?php echo $text["btnSave"]; ?>">
           <br><br>
          <hr>
          </form>

          <a href="index.php?action=rest"><?php echo $text["btnReset"]; ?></a>
     </div>
   
</body>
</html>