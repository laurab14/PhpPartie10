<!DOCTYPE html>
<html>
    <head>
        <title>TPPhp1</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
    </head>
    <body>
<?php
include 'country.php';
include 'degree.php';
include 'regex.php';
$error = 0;

// On teste les regex si le formulaire est rempli
if (count($_POST))
 {
    $_POST= array_map('strip_tags', $_POST); // Ligne à mettre absolument pour la sécurité : interdit l'injection de script (balises non autorisées)
 
    
    if ( !preg_match ($regexGender, $_POST['gender'] ) )
    {
        ?> <ul><li style="color:red;">La civilité est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexName, $_POST['lastName'] ) )
    {
        ?> <ul><li style="color:red;">Le nom est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexName, $_POST['firstName'] ) )
    {
        ?> <ul><li style="color:red;">Le prénom est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexDate, $_POST['birthDate'] ) )
    {
        ?> <ul><li style="color:red;">La date de naissance est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexCountry, $_POST['birthCountry'] ) )
    {
        ?> <ul><li style="color:red;">Le pays de naissance est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexCountry, $_POST['nationality'] ) )
    {
        ?> <ul><li style="color:red;">La nationalité est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexStreetNumber, $_POST['streetNumber'] ) )
    {
        ?> <ul><li style="color:red;">Le numéro de rue est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexStreet, $_POST['street'] ) )
    {
        ?> <ul><li style="color:red;">Le nom de la rue est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexPostal, $_POST['CP'] ) )
    {
        ?> <ul><li style="color:red;">Le code postal est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexCity, $_POST['City'] ) )
    {
        ?> <ul><li style="color:red;">La ville est invalide</li></ul> <?php
        $error++;
    } 
    if ( !preg_match ($regexMail, $_POST['email'] ) )
    {
        ?> <ul><li style="color:red;">L'adresse eMail est invalide</li></ul> <?php
        $error++;
    } 
    if (!preg_match ($regexPhone, $_POST['phone']))
    {
        ?> <ul><li style="color:red;">Le numéro de téléphone est invalide</li></ul> <?php
        $error++;
    } 
    if (!preg_match ($regexPE, $_POST['PEnumber']))
    {
        ?> <ul><li style="color:red;">Le numéro Pôle Emploi est invalide</li></ul> <?php
        $error++;
    } 
    if (!preg_match ($regexDegree, $_POST['degree']))
    {
        ?> <ul><li style="color:red;">Le diplôme est invalide</li></ul> <?php
        $error++;
    } 
    if (!preg_match ($regexBadge, $_POST['badgeNumber']))
    {
        ?> <ul><li style="color:red;">Le nombre de badge est invalide</li></ul> <?php
        $error++;
    } 
    if (!preg_match ($regexURL, $_POST['codecademyLink']))
    {
        ?> <ul><li style="color:red;">L'URL est invalide</li></ul> <?php
        $error++;
    } 
    
    

  if($error == 0) {
// On affiche les données du formulaire s'il est valide

     foreach ($_POST as $key => $value)
     {
         ?><ul><li><?= '<B>'.strip_tags($key).' : </B>'.strip_tags($value);?><br /></li></ul><?php
         
     } 
 }
 
 else{
include 'form.php';
 } 
 
 } else {
 
// S'il n'y a pas de données, on affiche le formulaire
     
    
                      
             include 'form.php';   
          
          
                 
        
        
         }
 
         ?>
         
         
         
 
         
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 </body>
</html>