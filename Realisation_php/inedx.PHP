<?php
// Variable DeclaratioN
$nom = "";
$email = "";
$message = "";
$msg = "";
// KANTAKD MN FORM WACH TSYFTAT
if (isset($_POST['envoyer'])) {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
//KANTAKD ANO JAMI3 5ANAT 3AMRIN
    if ($nom == "" || $email == "" || $message == "") {
        $msg = "Please fill in all fields";
    } else {
        $date = date("d/m/y H:i:s"); //KAYJBLNA NHAR WSA7A LI TENCHAR FIHA COMONTIR
        $ligne = "<<$nom|$email|$date|$message>>" . PHP_EOL;
        file_put_contents("posts.txt", $ligne, FILE_APPEND);
        $msg = "Post submitted successfully";
        $nom = $email = $message = "";
    }
}
//KANAKD MN BOUTON AFICHIR BACH YE3RD TA3LI9AT
if (isset($_POST['afichir'])) { 
    if (file_exists('posts.txt')) {
// HADI BACH KAYTE9RAW RIR 5 DYAL COMONTIRAT
        $comontir = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $hamsa = array_slice($comontir, 0, 5);
        //HNA 3EMLT JADEWAL BACH YETA3ARDOLI FIH COMNTIRAT
        echo "<table border=1>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Message</th>
                </tr>";
        foreach($hamsa as $ligne) {
            $clinligne = trim($ligne,"<> \n\r");
            $data = explode('|', $clinligne);
            if (count($data) == 4) {
                echo "<tr>
                        <td>".htmlspecialchars($data[0])."</td>
                        <td>".htmlspecialchars($data[1])."</td>
                        <td>".htmlspecialchars($data[2])."</td>
                        <td>".nl2br(htmlspecialchars($data[3]))."</td>
                      </tr>";
            }
        }
        echo "</table>";
    }
}

?>

<p><?= $msg ?></p>

<form method="post">
    <input type="text" name="nom" placeholder="Nom complet" value="<?= htmlspecialchars($nom) ?>"><br><br>
    <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($email) ?>"><br><br>
    <textarea name="message" placeholder="Votre message"><?= htmlspecialchars($message) ?></textarea><br><br>
    <button type="submit" name="envoyer">Envoyer</button>
    <button type="submit" name="afichir">Afficher</button>
</form>