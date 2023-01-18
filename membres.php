<?php
session_start();
// je verifie si le token est passé en GET 
if(!empty($_GET['tok']))
{
    // Verif que le token passé en GET correspond au token enregistré en session
    if($_GET['tok'] == $_SESSION['token'])
    {
        // je verifie que mes cookies sont bien presents
        if($_COOKIE['login'] && $_COOKIE['password'])
        {
            echo 'bienvenue, <a href="deco.php">Se deconnecter</a>';
            exit;
        }
    }
}
// si pas de token et pas de cookie je redirige vers la page de connection
header('location:motdepasse.php');
?>