<?php
require 'connexion.php';
class Article{

    public static function readAll(){
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "SELECT titre, contenu FROM article";   
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

public function cerite_articl($titre,$contenu){
 $db = new Database();
 $conn = $db->getConnection();
 $sql = "INSERT into article(titre, contenu) VALUES (:titre, :contenu)";

 $stmt = $conn->prepare($sql);
 $stmt->execute([
    "titre" =>$titre,
    "contenu" =>$contenu
 ]);
}

}

?>