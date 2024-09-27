<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/traitementClient.php';?>

    <head>
        
        <title>Clients | INTIA assurance</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />   
    </head>

    <?php include 'layouts/body.php'; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'layouts/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Etat client</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Clients</a></li>
                                            <li class="breadcrumb-item active">Intia assurance</li>
                                        </ol>
                                    </div>
                                   
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="flex-grow-1">
                                            <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Ajouter un client</button>
                                        </div>
                                        <div class="flex-shrink-0">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="showModal" class="modal fade modal-lg" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">                                            
                                    <div class="card-body">

                                        <ul class="nav nav-tabs nav-justified nav-border-top nav-border-top-info mb-3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#nav-border-justified-personnemorale" role="tab" aria-selected="false">
                                                        <i class="ri-building-line align-middle me-1"></i> Personne morale   
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#nav-border-justified-personnephysique" role="tab" aria-selected="false">
                                                        <i class="ri-user-line me-1 align-middle"></i> Personne Physique  
                                                    </a>
                                                </li>                                           
                                        </ul>
                                        <div class="tab-content text-muted">
                                                <div class="tab-pane active" id="nav-border-justified-personnemorale" role="tabpanel">
                                                    <div class="mb-3">
                                                        <!-- No Labels Form -->
                                                        <form action="#" method="POST" class="row g-3" style="margin-top:20px;" autocomplete="off" enctype="multipart/form-data">
                                                            <input type="hidden" name="categorie_client" value="personnemorale">
                                                            <input type="hidden" name="agence_client" value="Nom de l'agence">

                                                            <div class="col-md-5">
                                                                <input type="text" name="nom_client" rows="1" class="form-control" placeholder="Dénomination client"  style="font-size: small;" required></input>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="sigle_client" rows="1" class="form-control" placeholder="Sigle client"  style="font-size: small;"></input>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <input type="text" name="raison_client" rows="1" class="form-control" placeholder="Raison social"  style="font-size: small;"></input>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <input type="text" name="adresse_client" rows="1" class="form-control" placeholder="Adresse"  style="font-size: small;"></input>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <input type="text" name="autreinformation_client" rows="1" class="form-control" placeholder="Autres informations"  style="font-size: small;"></input>
                                                            </div> 
                                                            
                                                            <div class="col-md-4">
                                                            <select name="id_agence" class="form-control text-muted" data-choices data-choices-search-false style="font-size: small;">
                                                                    <option>Agence</option>                                                                                          
                                                
                                                                    <option value="1">Douala</option>    
                                                                    <option value="2">Yaounde</option> 
                                                                        
                                                                </select> 
                                                            </div>
                                                            
                                                           
                                                    
                                                            
                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                                                                    <button type="submit" name="enregistrerclient"  class="btn btn-primary">Créer client</button>
                                                                </div>
                                                            </div><!--end col-->                                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="nav-border-justified-personnephysique" role="tabpanel">
                                                    <div class="mb-3">
                                                        <!-- No Labels Form -->
                                                        <form action="#" method="POST" class="row g-3" style="margin-top:20px;" autocomplete="off" enctype="multipart/form-data">
                                                            <input type="hidden" name="categorie_client" value="personnephysique">
                                                            <input type="hidden" name="agence_client" value="Nom de l'agence">

                                                            <div class="col-md-5">
                                                                <input type="text" name="nom_client" rows="1" class="form-control" placeholder="Nom client"  style="font-size: small;" required></input>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="prenom_client" rows="1" class="form-control" placeholder="Prénom client"  style="font-size: small;"></input>
                                                            </div>                                                             
                                                            <div class="col-md-4">
                                                                <input type="text" name="adresse_client" rows="1" class="form-control" placeholder="Adresse"  style="font-size: small;"></input>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <input type="text" name="autreinformation_client" class="form-control" placeholder="Autres informations client"  style="font-size: small;"></input>
                                                            </div> 
                                                            <div class="col-md-4">
                                                            <select name="id_agence" class="form-control text-muted" data-choices data-choices-search-false style="font-size: small;">
                                                                                        <option>Agence</option>                                                                                          
                                                                    
                                                                                        <option value="1">Douala</option>    
                                                                                        <option value="2">Yaounde</option>                                         
                                                                    
                                                                                           
                                                                                    </select> 
                                                            </div> 
                                                           
                                                    
                                                            
                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                                                                    <button type="submit" name="enregistrerclient"  class="btn btn-primary">Créer client</button>
                                                                </div>
                                                            </div><!--end col-->                                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                        </div>    
                                        
                                    </div>
                                </div><!-- end card-body -->                                            
                            </div><!-- /.modal-content -->
                        </div><!--end add modal-->
                        <div class="row">
                            <!-- Tab panes -->
                            <div class="tab-content pt-4 text-muted">
                                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3">                                          

                                            <div class="card">
                                                <div class="card-body">
                                                                                                   
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-pills nav-custom-outline nav-primary mb-3" role="tablist">
                                                        <li class="nav-item waves-effect waves-light">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#border-nav-all" role="tab">Tous les clients</a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#border-nav-physique" role="tab">Personnes physiques</a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#border-nav-morale" role="tab">Personnes morales</a>
                                                        </li>                                                       
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content text-muted">
                                                        <div class="tab-pane active" id="border-nav-all" role="tabpanel">
                                                            <div class="row gy-3">
                                                            <?php
                                                                
                                                                foreach($etatclients as $clientintia):
                                                                    echo' 
                                                                        <div class="col-lg-4 col-sm-6">
                                                                            <div class="form-check card-radio">
                                                                                <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked>
                                                                                
                                                                                <label class="form-check-label" for="shippingAddress01">
                                                                                    <div class="d-flex mb-4 align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle" />
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                        <a href="detailclient.php?idclient='.$clientintia['id_client'].'" <h5 class="card-title mb-1">'.$clientintia['nom_client'].' '.$clientintia['prenom_client'].'</h5>
                                                                                        </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">'.$clientintia['raison_client'].'</span>
                                                                                    <span class="text-muted fw-normal d-block">'.$clientintia['agence_client'].'</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                                                                <div>
                                                                                    <button type="button" class="btn btn-success p-0 ms-3" data-bs-toggle="modal" data-bs-target=".bs-example-modal-updatephy'.$clientintia['id_client'].'"><i class="ri-pencil-fill text-muted align-bottom me-1"></i>
                                                                                        Modifier</button>
                                                                                </div>                                        
                                                                                <div class="modal  bs-example-modal-updatephy'.$clientintia['id_client'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-xl">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Modification</h5>
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                            </div>
                                                                                            <form action="#" method="POST" class="row g-3" style="margin-top:20px;" autocomplete="off" enctype="multipart/form-data">
                                                                                                <input type="hidden" name="categorie_client" value="personnephysique">
                                                                                                <input type="hidden" name="id_client" value="'.$clientintia['id_client'].'">
                                                                                                <input type="hidden" name="agence_client" value="Nom de l\'agence">

                                                                                                <div class="col-md-5">
                                                                                                    <input type="text" name="nom_client" rows="1" class="form-control" placeholder="Nom client"  style="font-size: small;" ></input>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <input type="text" name="prenom_client" rows="1" class="form-control" placeholder="Prénom client"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-4">
                                                                                                    <input type="text" name="sigle_client" rows="1" class="form-control" placeholder="Sigle"  style="font-size: small;"></input>
                                                                                                </div>    
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="raison_client" rows="1" class="form-control" placeholder="Raison social"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="agence_client" rows="1" class="form-control" placeholder="Agence client"  style="font-size: small;"></input>
                                                                                                </div>                                                          
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="adresse_client" rows="1" class="form-control" placeholder="Adresse"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="autreinformation_client" class="form-control" placeholder="Autres informations client"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                    
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="hstack gap-2 justify-content-end">
                                                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                                                                                                        <button type="submit" name="modifierclient"  class="btn btn-primary">Modifier client</button>
                                                                                                    </div>
                                                                                                </div><!--end col-->                                                                            
                                                                                            </form>
                                                                                        </div>    
                                                                                    </div>
                                                                                </div>      
                                                                                <div>
                                                                                    <button type="button" class="btn btn-warning p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeClient"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i>
                                                                                        Supprimer</button>
                                                                                </div> <!-- removeNotificationModal -->
                                                                                <div id="removeClient" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div class="mt-2 text-center">
                                                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                                                        
                                                                                                        <p class="text-muted mx-4 mb-0">Voulez-vous vraiment supprimer ce client ?</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                                <form action="#" method="POST" >
                                                                                                <input type="hidden" name="id_client" value="'.$clientintia['id_client'].'">
                                                                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Non</button>
                                                                                                    <button type="submit" name="supprimerclient" class="btn w-sm btn-danger" id="delete-notification">Oui, supprimer!</button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div><!-- /.modal-content -->
                                                                                    </div><!-- /.modal-dialog -->
                                                                                </div><!-- /.modal -->                                                        
                                                                            </div>
                                                                        </div>
                                                                         ';
                                                                endforeach ;
                                                            ?> 
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="border-nav-physique" role="tabpanel">
                                                            <div class="row gy-3">
                                                            <?php
                                                                    foreach($etatclientsphy as $clientintiaphy):
                                                                    echo' 
                                                                        <div class="col-lg-4 col-sm-6">
                                                                            <div class="form-check card-radio">
                                                                                <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked>
                                                                                
                                                                                <label class="form-check-label" for="shippingAddress01">
                                                                                    <div class="d-flex mb-4 align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle" />
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                        <a href="detailclient.php?idclient='.$clientintiaphy['id_client'].'" <h5 class="card-title mb-1">'.$clientintiaphy['nom_client'].' '.$clientintiaphy['prenom_client'].'</h5>
                                                                                        </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">'.$clientintiaphy['raison_client'].'</span>
                                                                                    <span class="text-muted fw-normal d-block">'.$clientintiaphy['agence_client'].'</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                                                                <div>
                                                                                    <button type="button" class="btn btn-success p-0 ms-3" data-bs-toggle="modal" data-bs-target=".bs-example-modal-followcommand'.$clientintiaphy['id_client'].'"><i class="ri-pencil-fill text-muted align-bottom me-1"></i>
                                                                                        Modifier</button>
                                                                                </div>                                        
                                                                                <div class="modal  bs-example-modal-followcommand'.$clientintiaphy['id_client'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-xl">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Modification</h5>
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                            </div>
                                                                                            <form action="#" method="POST" class="row g-3" style="margin-top:20px;" autocomplete="off" enctype="multipart/form-data">
                                                                                                <input type="hidden" name="categorie_client" value="personnephysique">
                                                                                                <input type="hidden" name="id_client" value="'.$clientintiaphy['id_client'].'">
                                                                                                <input type="hidden" name="agence_client" value="Nom de l\'agence">

                                                                                                <div class="col-md-5">
                                                                                                    <input type="text" name="nom_client" rows="1" class="form-control" placeholder="Nom client"  style="font-size: small;" ></input>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <input type="text" name="prenom_client" rows="1" class="form-control" placeholder="Prénom client"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-4">
                                                                                                    <input type="text" name="sigle_client" rows="1" class="form-control" placeholder="Sigle"  style="font-size: small;"></input>
                                                                                                </div>    
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="raison_client" rows="1" class="form-control" placeholder="Raison social"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="agence_client" rows="1" class="form-control" placeholder="Agence client"  style="font-size: small;"></input>
                                                                                                </div>                                                          
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="adresse_client" rows="1" class="form-control" placeholder="Adresse"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="autreinformation_client" class="form-control" placeholder="Autres informations client"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                    
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="hstack gap-2 justify-content-end">
                                                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                                                                                                        <button type="submit" name="modifierclient"  class="btn btn-primary">Modifier client</button>
                                                                                                    </div>
                                                                                                </div><!--end col-->                                                                            
                                                                                            </form>
                                                                                        </div>    
                                                                                    </div>
                                                                                </div>      
                                                                                <div>
                                                                                    <button type="button" class="btn btn-warning p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeClient'.$clientintiaphy['id_client'].'"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i>
                                                                                        Supprimer</button>
                                                                                </div> <!-- removeNotificationModal -->
                                                                                <div id="removeClient'.$clientintiaphy['id_client'].'" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div class="mt-2 text-center">
                                                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                                                        
                                                                                                        <p class="text-muted mx-4 mb-0">Voulez-vous vraiment supprimer ce client ?</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                                <form action="#" method="POST" >
                                                                                                <input type="hidden" name="id_client" value="'.$clientintiaphy['id_client'].'">
                                                                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Non</button>
                                                                                                    <button type="submit" name="supprimerclient" class="btn w-sm btn-danger" id="delete-notification">Oui, supprimer!</button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div><!-- /.modal-content -->
                                                                                    </div><!-- /.modal-dialog -->
                                                                                </div><!-- /.modal -->                                                        
                                                                            </div>
                                                                        </div>';
                                                                    endforeach ;
                                                                ?>  
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="border-nav-morale" role="tabpanel">
                                                            <div class="row gy-3">
                                                        
                                                           <?php
                                                                 foreach($etatclientsmo as $clientintiamo):
                                                                echo' 
                                                                <div class="col-lg-4 col-sm-6">
                                                                            <div class="form-check card-radio">
                                                                                <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked>
                                                                                
                                                                                <label class="form-check-label" for="shippingAddress01">
                                                                                    <div class="d-flex mb-4 align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle" />
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                        <a href="detailclient.php?idclient='.$clientintiamo['id_client'].'" <h5 class="card-title mb-1">'.$clientintiamo['nom_client'].' '.$clientintiaphy['prenom_client'].'</h5>
                                                                                        </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">'.$clientintiamo['raison_client'].'</span>
                                                                                    <span class="text-muted fw-normal d-block">'.$clientintiamo['agence_client'].'</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                                                                <div>
                                                                                    <button type="button" class="btn btn-success p-0 ms-3" data-bs-toggle="modal" data-bs-target=".bs-example-modal-morale'.$clientintiamo['id_client'].'"><i class="ri-pencil-fill text-muted align-bottom me-1"></i>
                                                                                        Modifier</button>
                                                                                </div>                                        
                                                                                <div class="modal  bs-example-modal-morale'.$clientintiamo['id_client'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-xl">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Modification</h5>
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                            </div>
                                                                                            <form action="#" method="POST" class="row g-3" style="margin-top:20px;" autocomplete="off" enctype="multipart/form-data">
                                                                                                <input type="hidden" name="categorie_client" value="personnephysique">
                                                                                                <input type="hidden" name="id_client" value="'.$clientintiamo['id_client'].'">
                                                                                                <input type="hidden" name="agence_client" value="Nom de l\'agence">

                                                                                                <div class="col-md-5">
                                                                                                    <input type="text" name="nom_client" rows="1" class="form-control" placeholder="Nom client"  style="font-size: small;" ></input>
                                                                                                </div>
                                                                                                <div class="col-md-3">
                                                                                                    <input type="text" name="prenom_client" rows="1" class="form-control" placeholder="Prénom client"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-4">
                                                                                                    <input type="text" name="sigle_client" rows="1" class="form-control" placeholder="Sigle"  style="font-size: small;"></input>
                                                                                                </div>    
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="raison_client" rows="1" class="form-control" placeholder="Raison social"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="agence_client" rows="1" class="form-control" placeholder="Agence client"  style="font-size: small;"></input>
                                                                                                </div>                                                          
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="adresse_client" rows="1" class="form-control" placeholder="Adresse"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                                                <div class="col-md-6">
                                                                                                    <input type="text" name="autreinformation_client" class="form-control" placeholder="Autres informations client"  style="font-size: small;"></input>
                                                                                                </div> 
                                                                    
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="hstack gap-2 justify-content-end">
                                                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                                                                                                        <button type="submit" name="modifierclient"  class="btn btn-primary">Modifier client</button>
                                                                                                    </div>
                                                                                                </div><!--end col-->                                                                            
                                                                                            </form>
                                                                                        </div>    
                                                                                    </div>
                                                                                </div>      
                                                                                <div>
                                                                                    <button type="button" class="btn btn-warning p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeClientmo'.$clientintiamo['id_client'].'"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i>
                                                                                        Supprimer</button>
                                                                                </div> <!-- removeNotificationModal -->
                                                                                <div id="removeClientmo'.$clientintiamo['id_client'].'" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div class="mt-2 text-center">
                                                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                                                        
                                                                                                        <p class="text-muted mx-4 mb-0">Voulez-vous vraiment supprimer ce client ?</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                                <form action="#" method="POST" >
                                                                                                <input type="hidden" name="id_client" value="'.$clientintiamo['id_client'].'">
                                                                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Non</button>
                                                                                                    <button type="submit" name="supprimerclient" class="btn w-sm btn-danger" id="delete-notification">Oui, supprimer!</button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div><!-- /.modal-content -->
                                                                                    </div><!-- /.modal-dialog -->
                                                                                </div><!-- /.modal -->                                                        
                                                                            </div>
                                                                        </div>';
                                                                endforeach ;
                                                            ?> 
                                                            </div> 
                                                        </div>                                                       
                                                    </div>                                                       
                                                    
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                           
                                        </div>
                                        <!--end col-->                                      
                                    </div>
                                    <!--end row-->
                                </div>
                                                           
                            </div>
                            <!--end tab-content-->
                            </div>
                        </div>
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Sweet alert init js-->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <?php include 'layouts/vendor-scripts.php'; ?>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>