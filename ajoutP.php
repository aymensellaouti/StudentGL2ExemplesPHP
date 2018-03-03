<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 07/11/2017
 * Time: 15:13
 */

// Ouvrir la session
session_start();
// Je dois verifier est ce que j'ai ma variable de session ou pas
//      Si je ne l'ai pas je la redirige vers l'index
if (!isset($_SESSION['personne'])){
    header('location:index.php?error=session inneistante');
}else if(!isset($_POST['nom'])||!isset($_POST['prenom'])){
    header('location:index.php?error=parametres invalide');
}

// Sinon (session ok)
//Je vérifie si nom existe deja ou pas
    if(isset($_SESSION['personne'][$_POST['nom']]))
        header('location:index.php?error=personne existe deja');
    // S'il existe
    // redirection vers index
    else
    {
        $_SESSION['personne'][$_POST['nom']]=$_POST['prenom'];
        header('location:index.php?succes=ajoute eecute avec succes');
    var_dump($_SESSION['personne']);die();
    }
                // s'il n'existe pas je l'ajoute et je le redirige vers index

?>