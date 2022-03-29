<form method="post" 
class="" action="index.php">
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

