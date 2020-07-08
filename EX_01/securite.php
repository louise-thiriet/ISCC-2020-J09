<?php

if($_POST['password'] == 2020){
    session_start();
    $_SESSION["id"] = $_POST['login'];
    $_SESSION["mdp"] = $_POST['password'];
    header('Location: http://localhost/ISCC/J09/EX_01/mini-site-rooting.php?page=1');
    setcookie("id", $_SESSION['id'], time()+3600);
}
else{
    echo 'Mauvais couple identifiant / mot de passe.';
    echo '<p><a href="http://localhost/ISCC/J09/EX_01/mini-site-rooting.php?page=connexion">Page de connexion</a><p>';
}

?>