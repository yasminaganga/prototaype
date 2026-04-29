<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header>
    <h1>MonBlog</h1>

    <nav class="menu">
        <ul class="menu_list">
            <li><a href="index.php">home</a></li>
            <li><a href="articles.php">shop</a></li>
            <li><a href="article.php">detail page</a></li>
             <li><a href="contact.php">contact</a></li>
        </ul>
    </nav>

    <form action="search.php" method="GET" class="search-form">
        <input type="text" name="q" placeholder="Rechercher un article...">
        <button type="submit">Search</button>
    </form>
</header>

<section id="articles">
    <h2>Articles récents</h2>

    <!-- Article 1 -->
    <article>
        <h3>Article 1</h3>

        <a href="article.php?id=1">
            <img src="IMG/image.png" alt="image article 1">
        </a>

        <p>PRIX 300 DH</p>
    </article>

    <!-- Article 2 -->
    <article>
        <h3>Article 2</h3>

        <a href="article.php?id=2">
            <img src="IMG/imag1.png" alt="image article 2">
        </a>

        <p>PRIX 300 DH</p>
    </article>

    <!-- Article 3 -->
    <article>
        <h3>Article 3</h3>

        <a href="article.php?id=3">
            <img src="IMG/imag2.png" alt="image article 3">
        </a>

        <p>PRIX 300 DH</p>
    </article>

</section>

<footer>
    <p>© 2026 MonBlog</p>
</footer>

</body>
</html>