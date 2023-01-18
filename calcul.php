<?php 
function calculVolume($rayon,$hauteur)
{
    $volume = $rayon*$rayon*3.14*$hauteur*(1/3);
    return $volume;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul volume cône</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit']))
        {
            echo 'le volume du cône est de ';
            echo calculVolume($_POST['rayon'],$_POST['hauteur']); // echo obligé pour qu'il s'affiche car il y a un return au dessus
            echo ' cm<sup>3</sup>';
        }
    ?>
    <form method="POST" action="">
        <label for="rayon">rayon :</label>
        <input type="text" name="rayon" />
        <br />
        <label for="hauteur">rayon :</label>
        <input type="text" name="hauteur" />
        <br />
        <button type="submit" name="submit">Calculer</button>
    </form>
</body>
</html>