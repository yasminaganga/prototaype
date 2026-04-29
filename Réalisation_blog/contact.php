<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

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

    <section style="text-align:center; margin-top:30px;">
        <h2>Contactez-nous</h2>

        <form action="#" method="POST" class="contact-form">

            <input type="text" name="name" placeholder="Votre nom" required>
            <br><br>

            <input type="email" name="email" placeholder="Votre email" required>
            <br><br>

            <textarea name="message" placeholder="Votre message" rows="5" required></textarea>
            <br><br>

            <button type="submit">Envoyer</button>

        </form>
    </section>

</main>

<footer>
    <p>© 2026 MonBlog</p>
</footer>

</body>
</html>