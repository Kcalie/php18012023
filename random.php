<?php
$stagiaires = array('angeline','maxime','jessica','kevin','jospeh', 'geoffrey','emilie', 'phil');
$elus = '';
if(isset($_POST['submit']))
{
    $random = array_rand($stagiaires,2);
    $elus.= 'stagiaires 1: '.$stagiaires[$random[0]];
    $elus.= '<br />';
    $elus.= 'stagiaires 2: '.$stagiaires[$random[1]];
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random</title>
</head>
<body>
    <h1>choix des stagiaires</h1>
    <?php 
        echo $elus;
    ?>
    <form method="POST" action="">
        <button type="submit" name="submit">Choix Random</button>
    </form>
</body>
</html>