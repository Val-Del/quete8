<?php session_start(); 
print_r($_SESSION['table']);
?>

<!DOCTYPE html>
<html lang="en">
<?php include'includes/head.php'; ?>
<body>

<?php include'includes/header.php'; ?>

<nav class="d-flex align-items-baseline ml-2 flex-wrap">
    <div class="wrap w-25">
        <a class="wrap w-100 border border-primary rounded premierbtn btn btn-light w-25" href="index.php"> 
            Home
        </a>
        <?php if (isset($_SESSION['table'])) {
            include 'includes/ul.php';
        }
        ?>
        
    </div>
    
    <div class="w-30 wrap pl-3 ">   
        <a href="index.php?form" class="btn btn-primary <?php if(isset($_GET['form'] )) {echo 'd-none'; }?>" type="button" class='<?php if(isset($_GET['form'] )) {
                echo 'd-none';
                }
                ?>'>Afficher les données</a>
        <div class="pt-2" >   

            <?php 
            if(isset($_GET['form'] )) {
            include'includes/form.php';
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
            
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
                        test_input($_POST['inputPrenom']);
                        test_input($_POST['inputNom']);
                        test_input($_POST['inputAge']);
                        test_input($_POST['inputTaille']);
                        test_input($_POST['role']);
                        $_SESSION['table'] = [
                            "Prénom" => $_POST['inputPrenom'],
                            "Nom" => $_POST['inputNom'],
                            "Age" => $_POST['inputAge'],
                            "Taille" => $_POST['inputTaille'],
                            "Role" => $_POST['role']
                        ];
                        echo '<div class="alert alert-secondary" role="alert">
                        Valider </div>';
                    }
                }
            ?>
        </div>
    </div>

    <div class="w-30 wrap pl-3 ">   
        <a href="index.php?form2" class="btn btn-secondary" type="button">Ajouter plus de données</a>
        <div class="pt-2" >   

        <?php 
            if(isset($_GET['form2'] )) {
            include'includes/form2.php';
            }
            if(isset($_POST['submit2'] )) {
                if (isset($_POST['html'])){
                    $_SESSION['table'] += [
                        "html" => $_POST['html']];
                }
                if (!empty($_POST['css'])){
                    $_SESSION['table'] += [
                        "css" => $_POST['css']];
                }
                if (!empty($_POST['bootstrap'])){
                    $_SESSION['table'] += [
                        "bootstrap" => $_POST['bootstrap']];
                }
                if (!empty($_POST['php'])){
                    $_SESSION['table'] += [
                        "php" => $_POST['php']];
                }
                if (!empty($_POST['mysql'])){
                    $_SESSION['table'] += [
                        "mysql" => $_POST['mysql']];
                }
                if (!empty($_POST['javascript'])){
                    $_SESSION['table'] += [
                        "javascript" => $_POST['javascript']];
                }
                if (!empty($_POST['symfony'])){
                    $_SESSION['table'] += [
                        "symfony" => $_POST['symfony']];
                }
                if (!empty($_POST['color'])){
                    $_SESSION['table'] += [
                        "color" => $_POST['color']];
                }
                if (!empty($_POST['date'])){
                    $_SESSION['table'] += [
                        "date" => $_POST['date']];
                }
            }
            ?>
        </div>
    </div>
   
   
</nav>



<?php include'includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>