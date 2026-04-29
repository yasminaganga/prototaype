<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails Article</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>

<?php
$id = $_GET['id'] ?? 0;
?>

<header>
    <h1>MonBlog</h1>
    <nav>
        <ul class="menu_list">
            <li><a href="index.php">home</a></li>
            <li><a href="articles.php">shop</a></li>
            <li><a href="article.php">detail page</a></li>
             <li><a href="contact.php">contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <article>

        <?php if ($id == 1) { ?>

            <h2>Article 1</h2>
            <img src="IMG/image.png" width="300">
            <p>Prix: 300 DH - meilleur article 1</p>

        <?php } elseif ($id == 2) { ?>

            <h2>Article 2</h2>
            <img src="IMG/imag1.png" width="300">
            <p>Prix: 300 DH - meilleur article 2</p>

        <?php } elseif ($id == 3) { ?>

            <h2>Article 3</h2>
            <img src="IMG/imag2.png" width="300">
            <p>Prix: 300 DH - meilleur article 3</p>

        <?php } else { ?>

            <h2>Article non trouvé</h2>
            <p>Choisis un article depuis la page shop</p>

        <?php } ?>

    </article>
</main>

<footer>
    <p>© 2026 MonBlog</p>
</footer>

</body>
</html>