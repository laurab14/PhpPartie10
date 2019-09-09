<h1 id="legend1" class="text-center"><br />Inscription à La Manu</h1>
             
             <form method="post" action="index.php" id="inscriptionForm" name="inscriptionForm">
               <div class="card mx-auto" id="connection" style="width: 26rem;">
  <div class="card-body">
      <fieldset>
          
          <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>1. Identité</strong><br /><br /></h5>
               
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

                 <li class="font-weight-bolder text-white"><label for="birthDate">Date de naissance : </label><input class="<?php echo (isset($_POST['birthDate']) && !preg_match($regexDate, $_POST['birthDate']))? 'red':'';  ?>" value="<?= $_POST['birthDate']?>" type="tel" name="birthDate" id="birthDate" placeholder="jj/mm/aaaa" required /></li>
          
                 <li class="font-weight-bolder text-white"><label for="birthCountry">Pays de naissance : </label>
              <select class="<?php echo (isset($_POST['birthCountry']) && !preg_match($regexCountry, $_POST['birthCountry']))? 'red':'';  ?>" value="<?= $_POST['birthCountry']?>" id="birthCountry" name="birthCountry" required>
    <option value="">Choisissez</option>
    <?php
    foreach($countryCode as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?></li>
</select>
              
                 <li class="font-weight-bolder text-white"><label for="nationality">Nationalité : </label>
              <select class="<?php echo (isset($_POST['nationality']) && !preg_match($regexCountry, $_POST['nationality']))? 'red':'';  ?>" value="<?= $_POST['nationality']?>" id="nationality" name="nationality" required>
    <option value="">Choisissez</option>
    <?php
    foreach($countryCode as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?></li>
</select>
          </ul>
          </fieldset>
          </div>
</div>

          
                 
                 
                 
      
      <div class="card mx-auto" id="connection" style="width: 20rem;">
  <div class="card-body">
      <fieldset>
          
      
          <h5 class="card-title font-weight-bolder text-white"><strong>2. Coordonnées</strong><br /><br /></h5>
              <ul>
          <p class="larger font-weight-bolder text-white"><strong>Adresse</strong></p>
          
          <li class="font-weight-bolder text-white"><input class="<?php echo (isset($_POST['streetNumber']) && !preg_match($regexStreetNumber, $_POST['streetNumber']))? 'red':'';  ?>" value="<?= $_POST['streetNumber']?>" id="streetNumber" type="tel" name="streetNumber" placeholder="N° de la rue" required />
            <input class="<?php echo (isset($_POST['street']) && !preg_match($regexStreet, $_POST['street']))? 'red':'';  ?>" value="<?= $_POST['street']?>" id="street" type="text" name="street" placeholder="Nom de la rue" required />
          </li>

          <li class="font-weight-bolder text-white"><input class="<?php echo (isset($_POST['CP']) && !preg_match($regexPostal, $_POST['CP']))? 'red':'';  ?>" value="<?= $_POST['CP']?>" id="CP" type="tel" name="CP" placeholder="Code postal... ex : 75000" pattern="[0-9]{5}" required /></li>

          <li class="font-weight-bolder text-white"><input class="<?php echo (isset($_POST['City']) && !preg_match($regexCity, $_POST['City']))? 'red':'';  ?>" value="<?= $_POST['City']?>" type="text" id="City" name="City" placeholder="Ville" required /></li>
          
           <p class="larger font-weight-bolder text-white"><br /><strong>Contact</strong></p>
          
            <li class="font-weight-bolder text-white"><label for="email">Votre adresse mail : </label><input class="<?php echo (isset($_POST['email']) && !preg_match($regexMail, $_POST['email']))? 'red':'';  ?>" type="text" id="email" name="email" placeholder="juliedupont@exemple.com" value="<?= $_POST['email']?>" required /></li>
          
            <li class="font-weight-bolder text-white"><label for="phone">Numéro de téléphone : </label><input class="<?php echo (isset($_POST['phone']) && !preg_match($regexPhone, $_POST['phone']))? 'red':'';  ?>" value="<?= $_POST['phone']?>" type="tel" id="phone" name="phone" placeholder=" 06xxxxxxxx " required /></li>
              
            <li class="font-weight-bolder text-white"><label for="PEnumber">Numéro Pôle Emploi : </label><input class="<?php echo (isset($_POST['PENumber']) && !preg_match($regexPE, $_POST['PENumber']))? 'red':'';  ?>" value="<?= $_POST['PEnumber']?>" type="tel" id="PEnumber" name="PEnumber" placeholder=" 123 456 7A " required /></li>
          </ul>
      </fieldset>
  </div>
      </div>               
               
               
               
                 
                 
                 
               
       <div class="card mx-auto" id="connection" style="width: 28rem;">
  <div class="card-body">
      <fieldset>
                         
          <h5 class="card-title font-weight-bolder text-white"><strong>3. Dites-nous en plus !</strong><br /><br /></h5>
                
              <ul>
                <li class="font-weight-bolder text-white"><label for="degree">Diplôme : </label><select class="<?php echo (isset($_POST['degree']) && !preg_match($regexDegree, $_POST['degree']))? 'red':'';  ?>" value="<?= $_POST['degree']?>" id="degree" name="degree" required>
    <option value="">Choisissez</option>
    <optgroup label="Bac ou moins">
<?php
    foreach($degreeCode1 as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?>
    </optgroup>
    <optgroup label="Bac+2">
<?php
    foreach($degreeCode2 as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?>
    </optgroup>
    <optgroup label="Bac+3">
 <?php
    foreach($degreeCode3 as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?>
    </optgroup>
     <optgroup label="Bac+4/5">
 <?php
    foreach($degreeCode4 as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?>  
    </optgroup>
    <optgroup label="Bac+6 et plus">
  <?php
    foreach($degreeCode5 as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?>    
    </optgroup>
    <optgroup label="Autre">
 <?php
    foreach($degreeCode6 as $value) {
        ?><option> <?= $value;?></option>
        <?php
    }
    ?>       
    </optgroup>
            
                    </select></li>
                
                    <li class="font-weight-bolder text-white"><label for="badgeNumber">Badge : </label><select class="<?php echo (isset($_POST['badgeNumber']) && !preg_match($regexBadge, $_POST['badgeNumber']))? 'red':'';  ?>" value="<?= $_POST['badgeNumber']?>" id="badgeNumber" name="badgeNumber" required>
                     <option value="">Choisissez</option>
                     <option value="0">0</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     </select>
                </li>
                
                <li class="font-weight-bolder text-white"><label for="codecademyLink">Lien Codecademy : </label><input class="<?php echo (isset($_POST['codecademyLink']) && !preg_match($regexURL, $_POST['codecademyLink']))? 'red':'';  ?>" value="<?= $_POST['codecademyLink']?>" id="codecademyLink" type="text" name="codecademyLink" placeholder="http://..." /></li>
                
                <br /><li class="font-weight-bolder text-white"><label for="superHero_?">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label></li> <!--Pour le maxlenght du textarea, il ne commence qu'à 18 caractères. Il faut donc mettre le nombre souhaité +18-->
                <textarea id="superHero_?" name="superHero_?" rows="5" cols="33" maxlength="518">

                </textarea>
                <p class="card-text"><small class="text-white">Max. 500 caractères</small></p>
                
                <br /><li class="font-weight-bolder text-white"><label for="hacks_?">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label></li>
                <textarea id="hacks_?" name="hacks_?" rows="5" cols="33" maxlength="518">

                </textarea>
                <p class="card-text"><small class="text-white">Max. 500 caractères</small></p>
                
                <br /><li class="font-weight-bolder text-white"><label for="experience_?">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label></li>
                <textarea id="experience_?" name="experience_?" rows="5" cols="33" maxlength="518">

                </textarea>
                <p class="card-text"><small class="text-white">Max. 500 caractères</small></p>
            
               </ul>
          <p><br /><button id="submitForm" type="submit" class="float-right rounded-circle">Valider</button></p>
                </fieldset>
  </div>
       </div>
 
             
             
</form>