<?php

$nom = "";
$email = "";
$message = "";
$msg = "";


if (isset($_POST ['envoyer'])) {

    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if ($nom == "" || $email == "" || $message == "") {
        $msg = "Please fill in all fields";
    } else {

        $date = date("d/m/y H:i:s");

      
        $ligne = "<<$nom|$email|$date|$message>>" . PHP_EOL;

  
        file_put_contents("posts.txt", $ligne, FILE_APPEND);

        $msg = "Post submitted successfully";
    }
}
 if (isset($_POST['afichi']))
 {
    if(file_exists('posts.txt')){
        $comontir = file('posts.txt');
        $hamsa = array_slice($comontir, 0 , 5);
        echo"<table>
           <tr>
             <th>name</th>
            <th>email</th>
              <th>date</th>
               <th>message</th>
                </tr>
                ";
         foreach($hamsa as $ligne) {
            $clinligne = trim($ligne,"<>\n\r ");
            $data = explode('|', $clinligne);
            if (count($data)== 4) {
              echo "<tr>
              <td>$data[0]</td>
              <td>$data[1]</td>
              <td>$data[2]</td>
              <td>$data[3]</td>
              </tr>
              
              ";
            }
            echo "</table>";
         }      
        

    }
 }
?>
<!--  -->


<?php if ($msg != "") echo "<p>$msg</p>"; ?>

<form method="post">
    <input type="text" name="nom" placeholder="Nom complet" value="<?= $nom ?>"><br><br>
    <input type="email" name="email" placeholder="Email" value="<?= $email ?>"><br><br>
    <textarea name="message" placeholder="Votre message"><?= $message ?></textarea><br><br>
    <button type="submit" name = "envoyer">Envoyer</button>
      <button type="submit" name = "afichir">afichir</button>
</form>

</body>
</html>
