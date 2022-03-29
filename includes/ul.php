<div class="position-relative w-100" >
            <a class="d-block" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                <h4>Debugging</h4>
                <div class="collapse position-relative" id="collapseExample2">
                    <p><?php print_r ($_SESSION); ?>
                </p>
                </div>
            <a class="d-block" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
            <h4>Concaténation</h4>
            <div class="collapse position-relative" id="collapseExample3">
                <h4>===> constrcution d'une phrase avec les données du tableau</h4>
                <p>
                    <?= '<h3>' . $_POST['inputNom'] . ' '. $_POST['inputPrenom'] . '</h3>' . '<br>' . 
                $_POST['inputAge'] . ' ans, je mesure ' . $_POST['inputTaille'] . ' et je fais partie des ' . $_POST['role'] . ' de L\'AFCI' ; ?>
                </p>
                <h4> ===> construction d'une phrase après ma maj du tableau</h4>
                <p>
                    <?= '<h3>' .  strtoupper($_POST['inputNom']) . ' '. $_POST['inputPrenom'] . '</h3>' . '<br>' . 
                $_POST['inputAge'] . ' ans, je mesure ' . str_replace('.', ',', $_POST['inputTaille']) . ' et je fais partie des ' . $_POST['role'] . ' de L\'AFCI' ; ?>
                </p>
            </div>
            <a class="d-block" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
            <h4>Boucle</h4>
            <div class="collapse position-relative" id="collapseExample4">
                <p>
                    <?php 
                    $i = 0; 
                    while ($i < 10) {
                        $i++;
                        echo $i . $_POST['inputNom'] . ' '. $_POST['inputPrenom'] . 
                        $_POST['inputAge'] . ' ans, je mesure ' . $_POST['inputTaille'] . ' et je fais partie des ' . $_POST['role'] . ' de L\'AFCI' . '<br>' ;
                    }?>
                </p>
            </div>
            <a class="d-block" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
            <h4>Fonction</h4>
            <div class="collapse position-relative" id="collapseExample5">
                <p>
                    <?php function readtable($table){
                        foreach ($table as $key => $value) 
                            echo 'Cette ligne correspond à la key : ' . $key . ' et la valeur :' . $value . '<br>';
                        
                    }
                    readtable ($_SESSION['table']);
                    ?>
                </p>
            </div>
            <a class="d-block" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
            <h4>Supprimer</h4>
            <div class="collapse position-relative" id="collapseExample6">
                <a href="index.php?delete">
                    Supprimer Session !
                    <?php if(isset($_GET['delete'])) { 
                        session_destroy();           

                        echo"Session supprimer";
                        } ?>
                </a>
            </div>
        </div>