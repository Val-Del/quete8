<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" 
class="" action="test.php">
    <h3>Formulaire d'ajout des données</h3>
  <div class="form-group">
    <label for="inputPrenom">Prénom</label>
    <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom" name="inputPrenom">
  </div>
  <div class="form-group">
    <label for="inputNom">Nom</label>
    <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="inputNom">
  </div>
  <div class="form-group">
    <label for="inputAge">Age (10 à 60 ans)</label>
    <input type="number" class="form-control" id="inputAge" placeholder="Age" name="inputAge" min="10" max="60">
  </div>
  <label for="taille">Taille</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">Entre 1.6 et 2m.</span>
        </div>
        <input type="number" step="0.01" min="1.6" max="2" class="form-control" id="taille" placeholder="taille" name="inputTaille">
      </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="apprenant" value="Apprenant" checked>
    <label class="form-check-label" for="apprenant">
    Apprenant
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="formateur" value="Formateur">
    <label class="form-check-label" for="formateur">
        Formateur
    </label>
</div>
    <button type="submit" class="btn btn-primary" name="submit">Enregistre les données</button>
</form>
<?php 
            if(isset($_POST['submit'] )) {
                if (empty($_POST['inputPrenom'])) {
                    echo "Prénom requis <br>";
                }
                if (empty($_POST['inputNom'])){
                    echo "Nom requis <br>";
                }
                if (empty($_POST['inputAge'])){
                    echo "Age requis <br>";
                }
                if (empty($_POST['inputTaille'])){
                    echo "Taille requise <br>";
                }
                if (empty($_POST['role'])){
                    echo "Role requis <br>";
                }
                if (!empty($_POST['inputPrenom']) && !empty($_POST['inputNom']) && !empty($_POST['inputAge']) && !empty($_POST['inputTaille']) && !empty($_POST['role']))  {
                    echo '<div class="alert alert-secondary" role="alert">
                    Valider </div>';
                }
            }
            ?> 
<!-- 
if(isset($_POST['submit'] )) {
                if (empty($_POST['inputPrenom'] || $_POST['inputNom'] || $_POST['inputAge'] || $_POST['inputTaille'] || $_POST['role']) ){
                    echo "champs requis";
                }
                elseif (!empty($_POST['inputPrenom'] || $_POST['inputNom'] || $_POST['inputAge'] || $_POST['inputTaille'] || $_POST['role']) ) {
                    $_SESSION['table'] = [
                        "Prénom" => $_POST['inputPrenom'],
                        "Nom" => $_POST['inputNom'],
                        "Age" => $_POST['inputAge'],
                        "Taille" => $_POST['inputTaille'],
                        "Role" => $_POST['role']
                    ];
                    echo '<div class="alert alert-secondary" role="alert">
                    Valider </div>' ;
                }
            }
            ?> -->
            
<!-- 
<?php 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

if(isset($_POST['submit'] )) {    
    $loop = 0;        
    foreach($_POST as $key => $value) {

        if(empty($value)) {
            $loop++;
            echo $key . ' à remplir' . '<br>';
        }
        else{
            test_input($value);
        }      
                     
    }
    if($loop == 0) {
        $_SESSION['table'] = [
            "Prénom" => $_POST['inputPrenom'],
            "Nom" => $_POST['inputNom'],
            "Age" => $_POST['inputAge'],
            "Taille" => $_POST['inputTaille'],
            "Role" => $_POST['role']
        ];
        echo '<div class="alert alert-secondary" role="alert">
        Valider </div>' ;
    }
}

?> 
 -->

<!-- <?php
$required_fields = $_POST['submit'];
foreach ($require_fields as $field => $value) {
    if (empty($_POST[''])) {
        echo "$field cannot be empty";
    }
}
?> -->
<!-- , "nom", "age", "taille", "role" -->
<!-- <?php 
if(isset($_POST['submit'] )) {
    if (isset($_POST['inputNom'], $_POST['inputPrenom'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // show the $name and $email
        echo "Thanks $name for your subscription.<br>";
        echo "Please confirm it in your inbox of the email $email.";
    } else {
        echo 'You need to provide your name and email address.';
    }
}
?> -->

</body>
</html>