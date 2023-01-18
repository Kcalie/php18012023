<?php
function retourPrenom($prenom)
{
    echo 'bonjour votre prenom est ';
    echo $prenom;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>votre prenom</title>
</head>
<body>
    bonjour votre prenom est <?php retourPrenom($_POST['prenom']); ?>
</body>
</html>