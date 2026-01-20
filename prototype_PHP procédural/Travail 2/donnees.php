<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Données du client</title>
</head>
<body>

<h2>Données du client</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Champ</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>Nom</td>
        <td><?php echo $_POST['nom']; ?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?php echo $_POST['prenom']; ?></td>
    </tr>
    <tr>
        <td>Adresse</td>
        <td><?php echo $_POST['adresse']; ?></td>
    </tr>
    <tr>
        <td>Ville</td>
        <td><?php echo $_POST['ville']; ?></td>
    </tr>
    <tr>
        <td>Code postal</td>
        <td><?php echo $_POST['codepostal']; ?></td>
    </tr>
</table>

</body>
</html>