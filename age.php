<?php
if(isset($_POST['submit']))
{
    // $age = intval($_POST['age']); // methode 1 pour forcer d'ecrire un entier
    $age = (int) $_POST['age'];
    $sexe = $_POST['sexe'];
    /* if($age >= 50 && $sexe == 'gars')
    {
        echo 'Va en épade !!! tu vas avoir la prostate';
    }
    else if($age >= 50 && $sexe == 'fille')
    {
        echo 'Va en épade !!! tu vas avoir la menopause';
    }*/
    // 2eme methode pour ajouter le sexe
    if($age >=50)
    {
        echo 'va en ephad';
        if($sexe == 'gars')
        {
            echo 'tu vas avoir la prostate';
        }
        else if($sexe == 'fille')
        {
            echo 'tu vas avoir la menopause';
        }
    }
    else if($age >= 18)
    {
        echo 'très bien vous êtes majeur(e)s';
    }
    else if($age >= 12)
    {
        echo 'Vous pouvez aller à l\'église';
        if($sexe == 'gars')
        {
            echo ' non ok pour l\'église';
        }
        else if($sexe == 'fille')
        {
            echo ' ok pour l\'église';
        }
        else if($sexe == 'autre')
        {
            echo ' peut être pour l\'église';
        }
    }
    else
    {
        echo 'Vous êtes trop jeune !!!';
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verif age</title>
</head>
<body>
    <form name="age" method="POST" action="">
        <input type="text" name="age" placeholder="votre age" />
<br />  <select name="sexe">
            <option value="gars">Garçon</option>
            <option value="fille">Filles</option>
            <option value="autre">Autres</option>
        </select>
        <button type="submit" name="submit">Verifier</button>
    </form>
</body>
</html>