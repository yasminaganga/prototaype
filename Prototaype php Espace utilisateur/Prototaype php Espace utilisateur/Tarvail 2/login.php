<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['user'];
}


?>