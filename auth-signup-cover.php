<?php
    // Include config file
    require_once "layouts/config.php";

    // Define variables and initialize with empty values
    $nom_user = $prenom_user =  $username_intia = $mdp_user = $confirm_mdp_user = "";
    $nom_user_err = $prenom_user_err = $username_intia_err = $mdp_user_err = $confirm_mdp_user = "";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Validate email_utilisateur
        if (empty(trim($_POST["username_intia"]))) {
            $username_intia_err = "Saisir votre adresse email.";
        } elseif (!filter_var($_POST["username_intia"])) {
            $username_intia_err = "Format email invalide";
        } else {
            // Prepare a select statement
            $sql = "SELECT id_user   FROM user_intia WHERE username_intia = ?";

            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username_intia);

                // Set parameters
                $param_username_intia = trim($_POST["username_intia"]);

                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);

                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        $username_intia_err = "Cette adresse email est déjà utilisée.";
                    } else {
                        $username_intia = trim($_POST["username_intia"]);
                    }
                } else {
                    echo "Oops! Erreur traitement. Veuillez essayer plustard.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
                
            }
        }

        // Validate nom_user
        if (empty(trim($_POST["nom_user"]))) {
            $nom_user_err = "Saisir notre nom.";
        } else {
            $nom_user = trim($_POST["nom_user"]);
        } 
         // Validate prenom_user
         if (empty(trim($_POST["prenom_user"]))) {
            $prenom_user_err = "Saisir notre prénom.";
        } else {
            $prenom_user = trim($_POST["prenom_user"]);
        }       
        // Validate mdp_user
        if (empty(trim($_POST["mdp_user"]))) {
            $mdp_user_err = "Saisir un mot de passe.";
        } elseif (strlen(trim($_POST["mdp_user"])) < 8) {
            $mdp_user_err = "Le mot de passe doit avoir au moins 8 caractères.";
        } else {
            $mdp_user = trim($_POST["mdp_user"]);
        }

        // Validate confirm mdp_utilisateur
        // if (empty(trim($_POST["confirm_mdp_user"]))) {
        //     $confirm_mdp_user_err = "Please enter a confirm mdp_user.";
        // } else {
        //     $confirm_mdp_user = trim($_POST["confirm_mdp_user"]);
        //     if (empty($mdp_user_err) && ($mdp_user != $confirm_mdp_user)) {
        //         $confirm_mdp_user_err = "mdp_user did not match.";
        //     }
        // }

        // Check input errors before inserting in database
        if (empty($nom_user_err) && empty($prenom_user_err) && empty($username_intia_err) && empty($mdp_user_err) && empty($confirm_mdp_user_err)) {

            // Prepare an insert statement
            $sql = "INSERT INTO  user_intia (nom_user, prenom_user, username_intia, mdp_user, token, id_agence ) VALUES (?, ?, ?, ?, ?, 1)";

            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sssss",$param_nom_user, $param_prenom_user, $param_username_intia, $param_mdp_user, $param_token_user );

                // Set parameters
                $param_nom_user = $nom_user;
                $param_prenom_user = $prenom_user;
                $param_username_intia =$username_intia;
                $param_mdp_user = password_hash($mdp_user,PASSWORD_DEFAULT); // Creates a mdp_user hash
                $param_token_user  = bin2hex(random_bytes(50)); // generate unique  token_user 

                // Prepare an insert statement for empty fiche_user
                $sql = "INSERT INTO  fiche_user (nom_user, prenom_user, username_intia, mdp_user, token, id_agence ) VALUES (?, ?, ?, ?, ?, 1)";


                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    // Redirect to login page
                    header("location: bureauagence.php");
                } else {
                    echo "Oops! Erreur traitement. Veuillez essayer plustard.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }

        // Close connection
        mysqli_close($link);
    }
?>
<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Création de compte | Velzon - Admin & Dashboard Template</title>
    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden m-0">
                        

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h5 class="text-primary">Créer votre compte</h5>
                                        <p class="text-muted">Votre compte aspacorp gratuitement.</p>
                                    </div>

                                    <div class="mt-4">
                                        <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                            <div class="row">
                                                <div class="col-lg-6 mb-3  <?= !empty($nom_user_err) ? 'has-error' : ''; ?>" >
                                                    <label for="username" class="form-label">Nom <span class="text-danger">*</span></label>
                                                    <input type="text" name="nom_user" value="<?=$nom_user?>" class="form-control" id="username" placeholder="Saisir le nom" required>
                                                    <span class="text-danger"><?=$nom_user_err?></span>
                                                    <div class="invalid-feedback">
                                                        Veullez saisir votre nom
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3  <?= !empty($prenom_user_err) ? 'has-error' : ''; ?>">
                                                    <label for="username" class="form-label">Prenom <span class="text-danger">*</span></label>
                                                    <input type="text" name="prenom_user" value="<?=$prenom_user?>" class="form-control" id="username" placeholder="Saisir le prénom" required>
                                                    <span class="text-danger"><?=$prenom_user_err?></span>
                                                    <div class="invalid-feedback">
                                                        Veullez saisir votre prénom
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="col-lg-6 mb-3  <?= !empty($username_intia_user_err) ? 'has-error' : ''; ?>">
                                                    <label for="username" class="form-label">identifiants <span class="text-danger">*</span></label>
                                                    <input type="text" name="username_intia" value="<?=$username_intia?>" class="form-control" id="username" placeholder="Saisir le prénom" required>
                                                    <span class="text-danger"><?=$username_intia_err?></span>
                                                    <div class="invalid-feedback">
                                                        Veullez saisir votre prénom
                                                    </div>
                                                </div>   

                                            <div class="mb-3 <?= !empty($mdp_user_err) ? 'has-error' : ''; ?>">
                                                <label class="form-label" for="password-input">Mot de passe</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" name="mdp_user" value="<?=$mdp_user?>" class="form-control pe-5 password-input" onpaste="return false" placeholder="Saisir le mot de passe" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    <span class="text-danger"><?=$mdp_user_err?></span>
                                                    <div class="invalid-feedback">
                                                        Saisir votre un mot de passe
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <p class="mb-0 fs-12 text-muted fst-italic">En créant votre compte vous acceptez les <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Conditions d'utilisation</a> de aspa.corp

</p>
                                            </div>

                                            <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                <h5 class="fs-13">Password must contain:</h5>
                                                <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Se connecter</button>
                                            </div>                                            
                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="mb-0">Vous avez déjà un compte ? <a href="auth-signin-cover.php" class="fw-semibold text-primary text-decoration-underline"> Se connecter</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy; <script>
                                document.write(new Date().getFullYear())
                            </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- validation init -->
<script src="assets/js/pages/form-validation.init.js"></script>
<!-- password create init -->
<script src="assets/js/pages/passowrd-create.init.js"></script>

</body>

</html>