<?php   
  
    // Check if the user is already logged in, if yes then redirect him to index page
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: accueilutilisateur.php");
        exit;
    }
    // Include config file
    require_once "layouts/config.php";

    // Define variables and initialize with empty values
    $username_intia = $mdp_user = "";
    $username_intia_err = $mdp_user_err = "";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Check if username is empty
        if (empty(trim($_POST["username_intia"]))) {
            $username_intia_err = "Saisir votre adresse email";
        } else {
            $username_intia = trim($_POST["username_intia"]);
        }

        // Check if password is empty
        if (empty(trim($_POST["mdp_user"]))) {
            $mdp_user_err = "Saisir votre mot de passe.";
        } else {
            $mdp_user = trim($_POST["mdp_user"]);
        }

        // Validate credentials
        if (empty($email_user_err) && empty($mdp_user_err)) {
            // Prepare a select statement
            $sql = "SELECT id_user , nom_user, 
            prenom_user, username_intia, mdp_user FROM user_intia WHERE username_intia = ?";

            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username_intia);

                // Set parameters
                $param_username_intia = $username_intia ;

                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    // Store result
                    mysqli_stmt_store_result($stmt);

                    // Check if username exists, if yes then verify password
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id_user , $nom_user, $prenom_user, $username_intia, $hashed_password);
                        if (mysqli_stmt_fetch($stmt)) {
                            if (password_verify($mdp_user, $hashed_password)) {
                                // Password is correct, so start a new session
                                session_start();

                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id_user"] = $id_user ;
                                $_SESSION["nom_user"] = $nom_user;
                                $_SESSION["prenom_user"] = $prenom_user;
                                $_SESSION["username_intia"] = $username_intia;

                                // Redirect user to welcome page
                                
                                header("location: bureauadmin.php");
                            } else {
                                // Display an error message if password is not valid
                                $mdp_user_err = "Le mot de passe est invalide.";
                            }
                        }
                    } else {
                        // Display an error message if username doesn't exist
                        $email_user_err = "Pas de compte associé à cet email.";
                    }
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
        
        <title>Se connecter | Intia assurance</title>
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
                            <div class="card overflow-hidden">
                                <div class="row g-0">

                                    <div class="col-lg-6">
                                        <div class="p-lg-5 p-4">
                                            <div>
                                                <h5 class="text-primary">Welcome Back !</h5>
                                                <p class="text-muted"></p>
                                            </div>
            
                                            <div class="mt-4">
                                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    
                                                    <div class="mb-3 <?php echo (!empty($email_user_err)) ? 'has-error' : ''; ?>">
                                                    <label for="username" class="form-label">Prenom <span class="text-danger">*</span></label>
                                                    <input type="text" name="username_intia" value="" class="form-control" id="username" placeholder="Saisir le prénom" required>
                                                    <span class="text-danger"><?=$username_intia_err?></span>
                                                    </div>
                            
                                                    <div class="mb-3 <?php echo (!empty($mdp_user_err)) ? 'has-error' : ''; ?>">
                                                        <div class="float-end">
                                                            <a href="auth-pass-reset-cover.php" class="text-muted">Mot de passe oublié?</a>
                                                        </div>
                                                        <label class="form-label" for="password-input">Mot de passe</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" name="mdp_user" class="form-control pe-5 password-input" placeholder="Saisir votre mot de passe" id="password-input">
                                                            <span class="text-danger"><?php echo $mdp_user_err; ?></span>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                        <label class="form-check-label" for="auth-remember-check">Se souvenir de moi</label>
                                                    </div>
                                                    
                                                    <div class="mt-4">
                                                        <button class="btn btn-success w-100" type="submit">Se connecter</button>
                                                    </div>
                
                                                </form>
                                            </div>
    
                                           
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
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
                                <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->

        <?php include 'layouts/vendor-scripts.php'; ?>

        <!-- password-addon init -->
        <script src="assets/js/pages/password-addon.init.js"></script>
    </body>

</html>