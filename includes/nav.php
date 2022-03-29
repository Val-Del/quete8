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
    
    <div class="w-75 wrap pl-3 ">   
        <a href="index.php?form" class="btn btn-primary" type="button">Afficher les données</a>
        <div class="pl-3 pr-5" >   

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
                
                $loop = 0;        
                foreach($_POST as $key => $value) {
                if ($key != 'submit') {
                    if(empty($value)) {
                        $loop++;
                        echo $key . ' à remplir' . '<br>';
                    }
                    else{
                        test_input($value);
                    }      
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
                    echo '<div class="alert alert-secondary mt-2" role="alert">
                    Valider </div>' ;
                }
            }
            ?>
        </div>
    </div>
   
</nav>

