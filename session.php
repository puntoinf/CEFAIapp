<?php
session_start();

if(isset($_SESSION['login']) == NULL || $_SESSION['login'] == false){
    echo "hola mundo";
    header("Location: index.html");
}
?>