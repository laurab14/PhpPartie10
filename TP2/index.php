<!DOCTYPE html>
<html>
    <head>
        <title>TPPhp2</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
    </head>
    <body>
<?php
include 'regex.php';
$error = 0;

if (count($_POST))
 {
    $_POST= array_map('strip_tags', $_POST);
    
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
    if ( !preg_match ($regexAge, $_POST['age'] ) )
    {
        ?> <ul><li style="color:red;">L'âge est invalide</li></ul> <?php
        $error++;
    }
 
 }
?>
        
        
        <form method="post" action="index.php" id="inscriptionForm" name="inscriptionForm">
               <div class="card mx-auto" id="connection" style="width: 20rem;">
  <div class="card-body">
      <fieldset>
        
        <ul>
              <li class="font-weight-bolder text-white"><label for="gender">Civilité : </label>
              <select class="<?php echo (isset($_POST['gender']) && !preg_match($regexGender, $_POST['gender']))? 'red':'';  ?>" value="<?= $_POST['gender']?>" id="gender" name="gender" required>
    <option value="">Choisissez</option>
    <option value="Madame">Madame</option>
    <option value="Monsieur">Monsieur</option>
    <option value="Autre">Autre</option>
    </li>
</select>
              
              <li class="font-weight-bolder text-white"><label for="lastName">Nom : </label><input class="<?php echo (isset($_POST['lastName']) && !preg_match($regexName, $_POST['lastName']))? 'red':'';  ?>" value="<?= $_POST['lastName']?>" id="lastName" type="text" name="lastName" placeholder="Nom" required /></li>

                 <li class="font-weight-bolder text-white"><label for="firstName">Prénom : </label><input class="<?php echo (isset($_POST['firstName']) && !preg_match($regexName, $_POST['firstName']))? 'red':'';  ?>" value="<?= $_POST['firstName']?>" id="firstName" type="text" name="firstName" placeholder="Prénom" required /></li>
                 
                 <li class="font-weight-bolder text-white"><label>Âge : </label><input class="<?php echo (isset($_POST['age']) && !preg_match($regexAge, $_POST['age']))? 'red':'';  ?>" value="<?= $_POST['age']?>" id="age" type="tel" name="age" required />
                     
                     <li class="font-weight-bolder text-white"><label for="company">Société : </label></li>
                <textarea id="company" name="company" rows="1" cols="18" maxlength="68" value="<?= $_POST['company']?>">
                </textarea>
                <p class="card-text"><small class="text-white">Max. 50 caractères</small></p>
                
        </ul>
                
                <p><br /><button id="submitForm" type="submit" class="float-right rounded-circle">Valider</button></p>

      </fieldset>
      </div>
      </div>
        </form>
        <?php
           if($error == 0) {
// On affiche les données du formulaire s'il est valide

     foreach ($_POST as $key => $value)
     {
         ?><ul><li><?= '<B>'.strip_tags($key).' : </B>'.strip_tags($value);?><br /></li></ul><?php
         
     } 
 }

?>

         
         
         
 
         
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 </body>
</html>