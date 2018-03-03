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
//      Si je ne l'ai pas je la crée et j'affiche la session + un message session ouverte
if (!isset($_SESSION['personne'])){
    $_SESSION['personne']=array('sellaouti'=>'aymen',
                                  'BS'=>'ahmed');
    echo 'Session crée avec succés';
}

// Si je l'ai je l'affiche
?>

<html>
<head>
    <title>Liste des personnes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <a href="ajoutPersonne.php">Ajouter une personne</a>
</div>
<?php if(isset($_GET['error'])) {?>
<div id="error">
      <?php echo $_GET['error'];?>
</div>
<?php } ?>

<?php if(isset($_GET['succes'])) {?>
    <div id="succes">
        <?php echo $_GET['succes'];?>
    </div>
<?php } ?>

<table border="2">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
    <?php foreach ($_SESSION['personne'] as $nom=>$prenom){?>
        <tr>
            <td><?= $nom ?></td>
            <td><?= $prenom ?></td>
            <td><a href="delete.php?delete=".<?php echo $nom?></a></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
