<?php
require_once 'TEst.php';
$tous_les_articles = Article::readAll();

foreach ($tous_les_articles as $article) {
   
    echo "<h2>" . $article['titre'] . "</h2>"; 

    echo "<p>Contenu : " . $article['contenu'] . "</p>"; 
    echo "<hr>";
}
?>

<a href="form.php">refrchi</a>