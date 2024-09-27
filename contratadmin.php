<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Starter | Velzon - Admin & Dashboard Template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

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
                                    <h4 class="mb-sm-0">Etat contrats d'assurance</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Etat contrats d'assurance</a></li>
                                            <li class="breadcrumb-item active">Intia assurance </li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="flex-grow-1">
                                            <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Souscrire un nouveau contrat</button>
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

                                        ENREGISTRER UN NOUVEAU CONTRAT   
                                                
                                                
                                        
                                    </div>
                                </div><!-- end card-body -->                                            
                            </div><!-- /.modal-content -->
                        </div><!--end add modal-->
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Contrats client</h4>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-soft-info btn-sm">
                                            <i class="ri-file-list-3-line align-middle"></i> Générer un rapport
                                        </button>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr>
                                                    <th scope="col">N° de Police</th>
                                                    <th scope="col">Clients </th>                                                               
                                                    <th scope="col">Type Police</th>
                                                    <th scope="col">Gain à reverser</th>
                                                    <th scope="col">Conseiler</th>
                                                    <th scope="col">Statut </th>
                                                    <th scope="col">Succursales </th>    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2112</a>
                                                    </td>
                                                    <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    <td>DOUALA</td>
                                                    
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                    </td>
                                                    <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    <td>DOUALA</td>
                                                    
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2109</a>
                                                    </td>
                                                    <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    <td>YAOUNDE</td>
                                                    
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2108</a>
                                                    </td>
                                                    <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    <td>DOUALA</td>
                                                    
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2107</a>
                                                    </td>
                                                    <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>NOM CLIENT </td>
                                                        <td>TYPE POLICE</td>
                                                        <td>
                                                            <span class="text-success">330.00</span>
                                                        </td>
                                                        <td>NOM DU CONSEILER</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">STATUT PAIEMENT CLIENT</span>
                                                        </td>
                                                    <td>YAOUNDE</td>
                                                    
                                                </tr><!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                </div>
                            </div> <!-- .card-->
                        </div> <!-- .col-->
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <?php include 'layouts/vendor-scripts.php'; ?>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>