<?php
//$login = 'admin';
//$password = 'admin';
$login = ['admin','gerald','joseph'];
$password = array('admin','gerald','joseph');
//echo $password[1];


// exemple d'un tableau multi
$tableau_multi = array(
    array('prenom' => 'Joseph','nom' => 'Larregain', 'mensuration' => array('taille' => 180, 'poids' => 83)),
    array('prenom' => 'Geoffrey', 'nom' => 'Praud', 'mensuration' => array('taille' => 176, 'poids' => 140))
);
//$tableau_multi[0]['prenom']

//boucle while
$i=0;
while($i < count($login))
{
    echo $login[$i];
    $i++;
}
//boucle for
for($i=0;$i<count($login);$i++)
{
    echo $login[$i];
}
//boucle foreach
foreach($login as $identifiant)
{
    echo $identifiant;
}



if(isset($_POST['submit']))
{    
    // verif si les champs ne sont pas vide avec empty() ! signifie different
    if(!empty($_POST['login']) && $_POST['password'])
    {
        // verif login & password correspondent
        if(($_POST['login'] == $login) && ($_POST['password'] == $password))
        {
            echo 'vous êtes connecter';
        }
        else 
        {
            // affiche un message quand le login && mdp ne sont pas bon 
            if($_POST['login'] != $login)
            {
                echo ' login incorrect';
            }
            if($_POST['password'] != $password)
            {
                echo ' password incorrect';
            }
        }
    }
    else
    {
        // message si les champs sont vide
        if(empty($_POST['login']))
        {
            echo ' veuillez renseigner un login';
        }
        if(empty($_POST['password']))
        {
            echo ' veuillez renseigner un password';
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page protege par mot de passe</title>
</head>
<body>
    <form name="connect" method="POST" action="">
    <label for="login">Login : </label>
    <input type="text" name="login">
    <br />
    <label for="password">Mot De Passe: </label>
    <input type="password" name="password" />
    <br />
    <button type="submit" name="submit">Se Connecter</button>
    </form>
</body>
</html>