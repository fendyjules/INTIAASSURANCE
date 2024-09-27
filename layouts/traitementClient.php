<?php require_once "layouts/connexionbdd.php"; ?>
<?php
 //* récupération des informations du client
 $etatclients =$bdd->prepare("SELECT * FROM clientintia");
 $etatclients->execute();

 //* récupération des informations du client physique
 $etatclientsphy =$bdd->prepare("SELECT * FROM clientintia WHERE categorie_client='personnephysique' ");
 $etatclientsphy->execute();

 //* récupération des informations du client physique
 $etatclientsmo =$bdd->prepare("SELECT * FROM clientintia WHERE categorie_client='personnemorale' ");
 $etatclientsmo->execute();
//* fin récupération des informations du client


//* INSERTION client
    if (isset($_POST['enregistrerclient']))
    {
        if (isset($_POST['categorie_client'])) $categorie_client=trim(stripcslashes(htmlspecialchars($_POST['categorie_client']))); else $categorie_client="";
        if (isset($_POST['agence_client'])) $agence_client=trim(stripcslashes(htmlspecialchars($_POST['agence_client']))); else $agence_client="";
        if (isset($_POST['nom_client'])) $nom_client=trim(stripcslashes(htmlspecialchars($_POST['nom_client']))); else $nom_client="";
        if (isset($_POST['prenom_client'])) $prenom_client=trim(stripcslashes(htmlspecialchars($_POST['prenom_client']))); else $prenom_client="";
        if (isset($_POST['sigle_client'])) $sigle_client=trim(stripcslashes(htmlspecialchars($_POST['sigle_client']))); else $sigle_client="";
        if (isset($_POST['raison_client'])) $raison_client=trim(stripcslashes(htmlspecialchars($_POST['raison_client']))); else $raison_client="";
        if (isset($_POST['adresse_client'])) $adresse_client=trim(stripcslashes(htmlspecialchars($_POST['adresse_client']))); else $adresse_client="";
        if (isset($_POST['autreinformation_client'])) $autreinformation_client=trim(stripcslashes(htmlspecialchars($_POST['autreinformation_client']))); else $autreinformation_client="";
        if (isset($_POST['id_agence'])) $id_agence=trim(stripcslashes(htmlspecialchars($_POST['id_agence']))); else $id_agence="";

        // la requête SQL qui permet d'insérer des donnnées depuis le formulaire
    $insertionclient = "INSERT INTO `clientintia`(`categorie_client`, `agence_client`, 
    `nom_client`, `prenom_client`, `sigle_client`, `raison_client`, `adresse_client`, `autreinformation_client`, `id_agence`) VALUES ('$categorie_client', '$agence_client',
    '$nom_client', '$prenom_client', '$sigle_client', '$raison_client', '$adresse_client', '$autreinformation_client', '$id_agence')";
    $connexionbdd = $bdd->prepare($insertionclient);
    $executionrequete = $connexionbdd->execute(array());
    ?>
    <script>
                        Swal.fire({
                        title: 'Client enregisté!',            
                        icon: 'success',
                        confirmButtonClass: 'btn w-xs me-2 mt-2',
                        confirmButtonText: '<a href="clientintia.php" class="fw-semibold text-white btn btn-primary ">OK</a>',
                        buttonsStyling: false
                                
                            });
                    </script>
                    <?php
                }
                
                //* INSERTION client
    if (isset($_POST['modifierclient']))
    {
        if (isset($_POST['categorie_client'])) $categorie_client=trim(stripcslashes(htmlspecialchars($_POST['categorie_client']))); else $categorie_client="";
        if (isset($_POST['id_client'])) $id_client=trim(stripcslashes(htmlspecialchars($_POST['id_client']))); else $id_client="";
        if (isset($_POST['agence_client'])) $agence_client=trim(stripcslashes(htmlspecialchars($_POST['agence_client']))); else $agence_client="";
        if (isset($_POST['nom_client'])) $nom_client=trim(stripcslashes(htmlspecialchars($_POST['nom_client']))); else $nom_client="";
        if (isset($_POST['prenom_client'])) $prenom_client=trim(stripcslashes(htmlspecialchars($_POST['prenom_client']))); else $prenom_client="";
        if (isset($_POST['sigle_client'])) $sigle_client=trim(stripcslashes(htmlspecialchars($_POST['sigle_client']))); else $sigle_client="";
        if (isset($_POST['raison_client'])) echo $raison_client=trim(stripcslashes(htmlspecialchars($_POST['raison_client']))); else $raison_client="";
        if (isset($_POST['adresse_client'])) $adresse_client=trim(stripcslashes(htmlspecialchars($_POST['adresse_client']))); else $adresse_client="";
        if (isset($_POST['autreinformation_client'])) $autreinformation_client=trim(stripcslashes(htmlspecialchars($_POST['autreinformation_client']))); else $autreinformation_client="";
    
        // insertion des donnnées depuis mon formulaire
        if(empty($agence_client))
        {}
        elseif(!empty($agence_client))
        {$updatefiche = "UPDATE `clientintia` SET agence_client='$agence_client'
            WHERE id_client='$id_client' ";
            $requetteupdate = $bdd->prepare($updatefiche);
            $executionrequete = $requetteupdate->execute(array());}
        elseif(empty($nom_client))
        {}
        elseif(!empty($nom_client))
        {$updatefiche = "UPDATE `clientintia` SET nom_client='$nom_client'
            WHERE id_client='$id_client' ";
            $requetteupdate = $bdd->prepare($updatefiche);
            $executionrequete = $requetteupdate->execute(array());}
            elseif(empty($prenom_client))
            {}
            elseif(!empty($prenom_client))
            {$updatefiche = "UPDATE `clientintia` SET prenom_client='$prenom_client'
                WHERE id_client='$id_client' ";
                $requetteupdate = $bdd->prepare($updatefiche);
                $executionrequete = $requetteupdate->execute(array());}
                elseif(empty($sigle_client))
        {}
        elseif(!empty($sigle_client))
        {$updatefiche = "UPDATE `clientintia` SET sigle_client='$sigle_client'
            WHERE id_client='$id_client' ";
            $requetteupdate = $bdd->prepare($updatefiche);
            $executionrequete = $requetteupdate->execute(array());}
            elseif(empty($raison_client))
        { }
        elseif(!empty($raison_client))
        {$updatefiche = "UPDATE `clientintia` SET raison_client='$raison_client'
            WHERE id_client='$id_client' ";
            $requetteupdate = $bdd->prepare($updatefiche);
            $executionrequete = $requetteupdate->execute(array());}
            
            elseif(empty($adresse_client))
        {}
        elseif(!empty($adresse_client))
        {$updatefiche = "UPDATE `clientintia` SET adresse_client='$adresse_client'
            WHERE id_client='$id_client' ";
            $requetteupdate = $bdd->prepare($updatefiche);
            $executionrequete = $requetteupdate->execute(array());}
            elseif(empty($autreinformation_client))
        {}
        elseif(!empty($autreinformation_client))
        {$updatefiche = "UPDATE `clientintia` SET autreinformation_client='$autreinformation_client'
            WHERE id_client='$id_client' ";
            $requetteupdate = $bdd->prepare($updatefiche);
            $executionrequete = $requetteupdate->execute(array());}

            elseif(empty($categorie_client))
        {}
        
        
        
    ?>
    <script>
                        Swal.fire({
                        title: 'Client modifié!',            
                        icon: 'success',
                        confirmButtonClass: 'btn w-xs me-2 mt-2',
                        confirmButtonText: '<a href="clientintia.php" class="fw-semibold text-white btn btn-primary ">OK</a>',
                        buttonsStyling: false
                                
                            });
                    </script>
                    <?php
                }

    if (isset($_POST['supprimerclient']))
    {
        if (isset($_POST['id_client'])) $id_client=trim(stripcslashes(htmlspecialchars($_POST['id_client']))); else $categorie_client="";
        
        $deleteclient = "DELETE FROM `clientintia`  WHERE id_client='$id_client'";
        $requettedelete = $bdd->prepare($deleteclient);
        $executionrequete = $requettedelete->execute(array());
    }
                ?>