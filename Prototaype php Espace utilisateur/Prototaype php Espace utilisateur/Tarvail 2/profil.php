<?php
session_start();
if(isset($_SESSION['user'])){
    echo "welcome " . $_SESSION['user'];
    
}else{
    header('location: login.php');
    exit();
}
?>