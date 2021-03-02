<?php
$this->title = "Accueil";
include_once('menu.php'); 
?>
  <?php // if($_GET['accueil']){ ?>
   
  <div>
    <div class="preloader-it">
    <div class="la-anim-1"></div>
  </div>
<div class="wrapper theme-2-active pimary-color-yellow"  >
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
          <div class="logo-wrap" style="margin-right: 15px;">         
           <img class="brand-img" src="dist/img/Cap.PNG" alt="brand" style="width: 90%; padding-top: 10px;"  /> 
          </div>
        </div>  
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i><!-- <img class="brand-img" src="dist/img/Ca.PNG" alt="brand" style="margin-left:20px;"/> --></a>
        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>      
      </div>
      <div id="mobile_only_nav" class="mobile-only-nav pull-right">
        <ul class="nav navbar-right top-nav pull-right">        
    <!-- fin notification  -->
          <li class="dropdown auth-drp">
            <a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-user " style="font-size:28px" aria-hidden="true"></i></a>
            <ul class="dropdown-menu users-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
              <li>
                <a href="#"><i class="zmdi zmdi-account"></i><span><?php echo utf8_encode($_SESSION['NOM'].' '.$_SESSION['PRENOM']);?></span></a>
              </li>
              <li class="divider"></li>             
              <li class="divider"></li>
              <li>
                <a href="deconnexion.php"><i class="zmdi zmdi-power"></i><span>Se déconnecter</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>  
    </nav>
  <div class="fixed-sidebar-left">
      <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
          <span></span> 
          <i class="zmdi zmdi-more"></i>
        </li>
        <li>
          <a  href="Accueil.php" style="color: orange;"><div class="pull-left"><i class="fa fa-home fa-fw mr-20" ></i><span class="right-nav-text">Accueil</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li> 
        <li >
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_ddA"><div class="pull-left"><i class="fa fa-plus mr-20"></i><span class="right-nav-text">Action</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_ddA" class="collapse collapse-level-1">
            <li >
              <a class="dropdown-item" href="mat/objet.php?prio=1">Achat</a>
            </li>
            <li>
              <a class="dropdown-item" href="mat/objet.php?prio=0">Location</a>
            </li>
             <li data-toggle="modal" data-target="#myduplique">
              <a class="dropdown-item">Dupliquer</a>
            </li>            
          </ul>
        </li>  
        <li >
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_ddB"><div class="pull-left"><i class="fa fa-cubes mr-20"></i><span class="right-nav-text">Inventaire</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_ddB" class="collapse collapse-level-1">
            <li   data-toggle="modal" data-target="#mySiteN">
              <a class="dropdown-item">Nouveau</a>
            </li>
            <li  data-toggle="modal" data-target="#mySiteC">
              <a class="dropdown-item" >Consulter</a>
            </li>  
            <li>
              <a class="dropdown-item" href="inventaire/liste_invent.php">Liste</a>
            </li>      
          </ul>
        </li>
        <li >
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_ddC"><div class="pull-left"><i class="fa fa-trash mr-20"></i><span class="right-nav-text">Rebus</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_ddC" class="collapse collapse-level-1">
            <li>
              <a class="dropdown-item"  href="mat/rebus.php">Mise au rebus</a>
            </li>
            <li>
              <a class="dropdown-item" href="mat/gt_rebus.php" >Mise en destruction</a>
            </li>          
          </ul>
        </li>   
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_tr"><div class="pull-left"><i class="fa fa-map-marker mr-20"></i><span class="right-nav-text">Géographie</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_tr" class="collapse collapse-level-1">
              <li>
              <a  href="geographie/liste_pays.php">Pays</a>
            </li>
              <li>
              <a  href="geographie/liste_site.php"> Site</a>
            </li>
            <li>
              <a  href="geographie/liste_batiment.php">Bâtiment</a>
            </li>
            <li>
              <a  href="geographie/liste_niveau.php">Niveau</a>
            </li>
            <li>
              <a  href="geographie/liste_local.php">Local</a>
            </li>
          </ul>
        </li>      
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_x"><div class="pull-left"><i class=" fa fa-user mr-20"></i><span class="right-nav-text">Utilisateur</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_x" class="collapse collapse-level-1">
            <li >
              <a class="dropdown-item" href="Utilisateur/liste_societe.php">Société </a>
            </li>
            <li>
              <a class="dropdown-item" href="Utilisateur/liste_direction.php"> Direction</a>
            </li>
           <li >
              <a class="dropdown-item" href="Utilisateur/liste_service.php">Service </a>
            </li>
            <li>
              <a class="dropdown-item" href="Utilisateur/liste_personne.php">Utilisateur</a>
            </li>
          </ul>
        </li>
           <li >
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_ss"><div class="pull-left"><i class="fa fa-sitemap mr-20"></i><span class="right-nav-text">Objet</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_ss" class="collapse collapse-level-1">
            <li >
              <a class="dropdown-item" href="objet/liste_constructeur.php">Constructeur </a>
            </li>
            <li >
              <a class="dropdown-item" href="objet/liste_fournisseur.php">Fournisseur </a>
            </li>
           <li >
              <a class="dropdown-item" href="objet/liste_famille.php">Famille </a>
            </li>
           <li >
              <a class="dropdown-item" href="objet/liste_categorie.php">Catégorie </a>
            </li>
            <li>
              <a class="dropdown-item" href="objet/liste_standard.php">Modele</a>
            </li>
           <li>
              <a class="dropdown-item" href="objet/liste_statut.php"> Statut</a>
            </li>
           <li>
              <a class="dropdown-item" href="objet/liste_maintenance.php"> Maintenance</a>
            </li>
          </ul>
        </li>
        <li >
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dd"><div class="pull-left"><i class="fa fa-info-circle mr-20"></i><span class="right-nav-text">Divers</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_dd" class="collapse collapse-level-1">
            <li >
              <a class="dropdown-item" href="divers/liste_user.php">Administrateur</a>
            </li>
            <li>
              <a class="dropdown-item" href="divers/liste_action.php">Action</a>
            </li>          
          </ul>
        </li>
        <li >
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_ded"><div class="pull-left"><i class="fa fa-file mr-20"></i><span class="right-nav-text">Edition</span></div><div class="pull-right"><i class=" zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
          <ul id="app_ded" class="collapse collapse-level-1">

            <li data-toggle="tooltip" data-placement="bottom" >
              <a class="dropdown-item" data-toggle="modal" data-target="#extract">Extraction CSV</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">...</a>
            </li>          
          </ul>
        </li>
      </ul>
    </div>
    <div class="page-wrapper">
      <div class="container-fluid ">
      <br><br> 
          <div class="table-wrap" style="font-size: xx-small; ">                  
            <table id="example"  class="table table-striped table-bordered table-hover table-condensed">             
                <thead style ="" >
                          <tr>
                              <th style="background:#fffe91; font-weight: bold;  font-size: xx-small;padding: 0.5em 0em 0.5em 0em; text-align: center;">SSCC</th>
                              <th style="background:#fffe91; font-weight: bold; font-size: xx-small ;padding:0.5em 0em 0.5em 0em; text-align: center;">N° Série</th>
                              <th style="background:#fffe91; font-weight: bold; font-size: xx-small;padding: 0.5em 0em 0.5em 0em; text-align: center;">Utilisateur</th>
                              <th style="background:#fffe91;font-weight: bold;  font-size: xx-small;padding: 0.5em 0em 0.5em 0em; text-align: center;">Site</th>
                              <th style="background:#fffe91; font-weight: bold; font-size: xx-small;padding:0.5em 0em 0.5em 0em; text-align: center;">Modèle</th>
                              <th style="background:#fffe91; font-weight: bold;  font-size: xx-small;padding:0.5em 0em 0.5em 0em; text-align: center;">Société</th>
                              <th style="background:#fffe91; font-weight: bold;  font-size: xx-small;padding:0em 0em 0.5em 0em; text-align: center;">Dt Acquis.</th>
                              <th style="background:#fffe91; font-weight: bold;  font-size: xx-small;padding:0em 0em 0.5em 0em; text-align: center;">Dt Service</th>
                              <th style="background:#fffe91; font-weight: bold; font-size: xx-small;padding:0.5em 0em 0.5em 0em; text-align: center;">Statut</th>
                              <th style="background:#fffe91; font-weight: bold; font-size: xx-small;padding:0.5em 0em 0.5em 0em; text-align: center;">Dt Rebus</th>
                              <th style="background:#fffe91; font-weight: bold; font-size: xx-small;padding:0.5em 0em 0.5em 0em; text-align: center;">Catégorie</th>
                              <th style="background:#fffe91; font-weight: bold; font-size: xx-small;padding:0.5em 0em 0.5em 0em; text-align: center;">Fourni.</th>
                              <th style="background:#fcf6f8; font-weight: bold; font-size: xx-small; padding:0.5em 0em 0.5em 0em; text-align: center;"></th>                                              
                          </tr>
                        </thead>
                        <tbody>
                                             
                        </tbody>
                      </table>
                    </div>
                  <br> 
                <!-- pour créer un nouveau inventaire  -->                
                 <div class="modal fade" id="mySiteN" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4 style="text-align: center;">Ajouter / Reprendre inventaire</h4>
                         <form action="inventaire/inventaire.php?choix=<?php echo '1'; ?>" method="post" class=" form-horizontal">                
                             <!-- Select Basic -->
                           
                      <div class="form-group">
                        <label class="col-xs-3 col-lg-3 control-label" for="site">Site</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="site" name="site" class="form-control"  required="">    
                          <option value="">  </option>  
                           <?php foreach( $site as $liste)  { ?>
                           <option 
                             value = "<?php var_dump($liste->getIdSite()); ?>" > <?php   echo utf8_encode($liste->getLibSite());   } ?>
                           </option>
                          </select> <br>
                    </div>
                   </div> 
                  <label class="col-xs-8 col-lg-8"></label>
                  <button  id="submit" type="submit" name="valider" class="btn btn-success" style='height: 30px; font-size: xx-small;'>Valider</i></button> 
                                    
                 </form>     
                      </div>
                    </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                   </div>
                </div>
               <!-- pour consulter un inventaire  -->                
                 <div class="modal fade" id="mySiteC" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4 style="text-align: center;">Consulter un inventaire</h4>
                         <form action="inventaire/inventaire.php?choix=<?php echo '2'; ?>" method="post" class=" form-horizontal">                
                             <!-- Select Basic -->
                         
                      <div class="form-group">
                        <label class="col-xs-3 col-lg-3 control-label" for="site">Site</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="site" name="site" class="form-control"  required="">    
                          <option value="">  </option>  
                           <?php foreach ($site as $liste) { ?>
                           <option 
                             value = "<?php echo $liste->getIdSite() ?>" > <?php   echo utf8_encode($liste->getLibSite());   } ?>
                           </option>
                          </select> <br>                     
                      </div>
                     </div> 
                  <label class="col-xs-8 col-lg-8"></label>
                  <button  id="submit" type="submit" name="valider" class="btn btn-success" style='height: 30px; font-size: xx-small;'>Valider</i></button> 
                                    
                 </form>     
                      </div>
                    </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                   </div>
                </div>
                 
                <!-- ************************** mise en rebus ***************** -->
                <div class="modal fade" id="myRebus" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4 style="text-align: center;">Mise en rebus</h4>
                         <form action="mat/rebus.php" method="post" class=" form-horizontal">                
                            <div class="form-group form-group-sm row">
                            <label class="col-xs-4 col-lg-4 control-label" for="barre">Code Barre</label>  
                            <div class="col-xs-3 col-lg-3">
                            <input id="barre" name="barre" type="text"  class="form-control input-md" maxlength="5" pattern="[0-9]{5}" placeholder="Code Barre"  required="">
                            </div>
                            <button id="myBtn" type="submit" name="val_rebus" class="btn btn-success" style='height: 30px; font-size: xx-small;'>OK</i></button> 
                            </div>                                 
                         </form>                          
                        </div>
                     </div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                   </div>
                </div>
                <!-- ********************** rebus *************************** -->
               <!-- ************************** dupliquer ***************** -->
                <div class="modal fade" id="myduplique" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4 style="text-align: center;">Objet à dupliquer</h4>
                         <form action="mat/duplication.php" method="post" class=" form-horizontal">                
                            <div class="form-group form-group-sm row">
                            <label class="col-xs-4 col-lg-4 control-label" for="barre">Code Barre</label>  
                            <div class="col-xs-3 col-lg-3">
                            <input id="barre" name="barre" type="text"  class="form-control input-md" maxlength="5" pattern="[0-9]{5}" placeholder="Code Barre"  required="">
                            </div>
                            <button id="myBtn" type="submit" name="val_rebus" class="btn btn-success" style='height: 30px; font-size: xx-small;'>OK</i></button> 
                            </div>                                 
                         </form>                          
                        </div>
                     </div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                   </div>
                </div>
                <!--******************* extract   *******************-->
                 <div class="modal fade" id="extract" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4 style="text-align: center;">Extraction</h4>
                         <form action="Exportation_objets.php" method="post" class=" form-horizontal">                       
                         <!-- Select Basic -->
                         
                      <div class="form-group form-group-sm row">
                        <label class="col-xs-1 col-lg-1 " ></label>
                        <label class="col-xs-2 col-lg-2 control-label" for="site">Site</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="site" name="site" class="form-control" >    
                          <option value="">  -- Site -- </option>  
                           <?php foreach($site as $liste) { ?>
                           <option 
                             value = "<?php echo $liste->getIdSite(); ?>" > <?php   echo utf8_encode($liste->getLibSite());   } ?>
                           </option>
                          </select>
                        </div>
                      </div>
                     
                       <div class="form-group form-group-sm row"> 
                       <label class="col-xs-1 col-lg-1 " ></label>                      
                        <label class="col-xs-2 col-lg-2 control-label" for="pers">Utilisateur</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="pers" name="pers" class="form-control">                 
                          <option value="">  -- Utilisateur --</option>  
                           <?php  foreach ($personne as $pers){ ?>
                           <option value ="<?php echo $pers->getIdPers(); ?>"> <?php echo utf8_encode($pers->getNomPers().' - '.$pers->getPrenomPers());   } ?>
                           </option>
                          </select>
                        </div>
                       </div>
                       <div class="form-group form-group-sm row">       
                        <label class="col-xs-1 col-lg-1 " ></label>
                        
                        <label class="col-xs-2 col-lg-2 control-label" for="stat">Statut</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="stat" name="stat" class="form-control"> 
                          <option value =""> -- Statut -- </option>  
                           <?php  foreach ($statut as $stat) { ?>
                           <option value ="<?php echo $stat->getIdStatut(); ?>"> <?php echo utf8_encode($stat->getLibStatut());   } ?>
                           </option>
                          </select>
                        </div>
                      </div>
                       <button  id="submit" type="submit" name="valider" class="btn btn-primary " style='height: 30px; font-size: xx-small;'>Générer <i class="fa fa-file-download"></i></button>                                     
                 </form>    
                      </div>
                    </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                   </div>
                </div>
         <!--******************* extract  *******************-->
          <!--******************* cout  *******************-->
           <div class="modal fade" id="cout" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4 style="text-align: center;">Estimation des objets </h4>
                         <form action="Exportation_cout.php" method="post" class=" form-horizontal">                       
                         <!-- Select Basic -->
                         
                      <div class="form-group form-group-sm row">
                        <label class="col-xs-1 col-lg-1 " ></label>
                        <label class="col-xs-2 col-lg-2 control-label" for="site">Site</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="site" name="site" class="form-control" >    
                          <option value="">  -- Site -- </option>  
                           <?php foreach ($site as $liste) { ?>
                           <option 
                             value = "<?php echo $liste->getIdSite(); ?>" > <?php   echo utf8_encode($liste->getLibSite());   } ?>
                           </option>
                          </select>
                        </div>
                      </div>
                     <div class="form-group form-group-sm row">
                        <label class="col-xs-1 col-lg-1 " ></label>
                        <label class="col-xs-2 col-lg-2 control-label" for="acqui">Acquisition</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="acqui" name="acqui" class="form-control" >    
                          <option value="">  -- Acquisition -- </option>                             
                           <option value = "1" >Achat</option>
                           <option value = "0" >Location</option>
                          </select>
                        </div>
                      </div>
                      
                       <button  id="submit" type="submit" name="valider" class="btn btn-primary " style='height: 30px; font-size: xx-small;'>Générer <i class="fa fa-file-download"></i></button>                                     
                 </form>    
                      </div>
                    </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                   </div>
                </div>
         <!--******************* extract  *******************-->
    </div>  
   </div>
   <?php 
/* }else{

  echo "<script type='text/javascript'>document.location.replace('index.html');</script>";
}*/
?>

 <script type="text/javascript">
  $(document).ready(function() { 

    var table = $('#example').DataTable({
      "paging":true,
        "processing":true,
        "serverSide":true,
        "order": [],
        "info":true,        
        "ajax":{
            "url" : "fetch.php",
             "type" : "POST"
        },
        dom: 'Bfrtip',
         pageLength: 20,
      
         language: {
            url: "vendors/French.json"
            },
              /* titleAttr: 'Restore Deleted Record'*/
         buttons: [
               {                    
                text: ' <h4 style="margin: 0px "> Liste des objets  </h4> ' ,
                className: 'btn btn-default ' ,
                          
            },
           
             /*{
              text: '  <i style="margin: 0px; font-size: x-small;"  data-toggle="modal" data-target="#extract">Excel2</i>',
               extend: 'excelHtml5',
                title: ''
             
            },*/
       {
                text: 'Excel',
                action: function ( e, dt, node, config ) {
                    onclick=window.location.href='Exportation_cout.php?filtre='+sessionStorage.getItem('message');
                }
            }
              
         ]
    } );
 if(typeof sessionStorage!='undefined') {
  if('message' in sessionStorage) {      
    setTimeout(function() {
     /* alert('filtre');*/
    $('#example_filter input').val( document.getElementById('message').value = sessionStorage.getItem('message')).trigger('keyup');

    }, 1); 
  }
} else {
  alert("sessionStorage n'est pas supporté");
}} );

</script>


  
</body>

</html>
