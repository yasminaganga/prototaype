<?php
session_start();
$user = "";
$password = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['user'];
    $password = $_POST['password'];
}
if($user === "ganga" && $password === "2222")
    {
        $_SESSION['user'] = $user;
        header('Location: profil.php');
        exit();
    }

?>


<form action="" method="post">
    <label >user:</label><br><br>
    <input type="text" name="user" ><br><br>
    <label >password:</label><br><br>
    <input type="text" name="password"><br><br>
    <button type="submit"> button </button>
</form>