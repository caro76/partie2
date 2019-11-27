<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$age = 20 ;
if ($age >= 18) 
{
    echo "Vous êtes majeur";
}
else 
{
    echo "Vous êtes mineur";
}
 ?>
 <hr>
 <?php
$age = 16 ;
$gender = 'homme' ;
if ($age >= 18 && $gender == 'femme')
{
    echo 'Vous êtes une femme et vous êtes majeur ';
}
elseif ($age < 18 && $gender == 'femme')
{
    echo 'Vous êtes une femme et vous êtes mineur ';
}
elseif ($age >= 18 && $gender == 'homme')
{
    echo 'Vous êtes une homme et vous êtes majeur ';
}
else 
{
    echo 'Vous êtes un homme et vous êtes mineur';
}
?>
<hr>
<?php
$gender = 'femme' ;
if ($gender == 'femme')
{
echo 'C\'est une developpeuse' ;
}
else
{
    echo 'C\'est un développeur';
}

?>
<hr>
<?php
$age = 18 ;
if ($age >=18)
{
echo 'Tu es majeur';
}
else 
{
echo 'Tu es mineur';
}
?>
</body>
</html>