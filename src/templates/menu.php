<div>
<div class="preloader-it">
            <div class="la-anim-1"></div>
          </div>
          <!-- /Preloader -->
          <div class="wrapper theme-2-active pimary-color-yellow"  >
            <!-- Top Menu Items -->
            <nav class="navbar navbar-inverse navbar-fixed-top" >
              <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                  <div class="logo-wrap">					
                    <!-- <img class="brand-img" src="dist/img/12.jpg" alt="brand"/> -->
                  </div>
                </div>	
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>			
              </div>
              <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">				
            <!-- fin notification  -->
                  <li class="dropdown auth-drp">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-user " style="font-size:28px" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu users-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                      <li>
                        <a href="#"><i class="zmdi zmdi-account"></i><span><?php// echo utf8_encode($_SESSION['NOM'].' '.$_SESSION['PRENOM']);?></span></a>
                      </li>
                      <li class="divider"></li>							
                      <li class="divider"></li>
                      <li>
                        <a href="../deconnexion.php"><i class="zmdi zmdi-power"></i><span>Se déconnecter</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>	
            </nav>
            <!-- pour créer un nouveau inventaire  -->                
              <div class="modal fade" id="mySiteN" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <h4 style="text-align: center;">Ajouter / Reprendre inventaire</h4>
                      <form action="../inventaire/inventaire.php?choix=<?php echo '1'; ?>" method="post" class=" form-horizontal">                
                          <!-- Select Basic -->
                        <?php ;
                        ?> 
                        
                  <div class="form-group">
                    <label class="col-xs-3 col-lg-3 control-label" for="site">Site</label>
                    <div class="col-xs-6 col-lg-6">
                      <select id="site" name="site" class="form-control"  required="">    
                      <option value="">  </option>  
                    <?php foreach( $site as $liste){?>

                    
                        <option value = "<?php echo $liste->getIdSite(); ?>" > <?php   echo utf8_encode( $liste->getLibSite());   } ?>
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
                      <form action="../inventaire/inventaire.php?choix=<?php echo '2'; ?>" method="post" class=" form-horizontal">                
                          <!-- Select Basic -->
                        
                  <div class="form-group">
                    <label class="col-xs-3 col-lg-3 control-label" for="site">Site</label>
                    <div class="col-xs-6 col-lg-6">
                      <select id="site" name="site" class="form-control"  required="">    
                      <option value="">  </option>  
                        <?php   foreach( $site as $liste){ ?>
                        <option 
                          value = "<?php echo $liste->getIdSite(); ?>" > <?php   echo utf8_encode( $liste->getLibSite());   } ?>
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
                      <form action="../mat/rebus.php" method="post" class=" form-horizontal">                
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
                      <form action="../mat/duplication.php" method="post" class=" form-horizontal">                
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
                      <form action="../Exportation_objets.php" method="post" class=" form-horizontal">                       
                      <!-- Select Basic -->
                      
                  <div class="form-group form-group-sm row">
                    <label class="col-xs-1 col-lg-1 " ></label>
                    <label class="col-xs-2 col-lg-2 control-label" for="site">Site</label>
                    <div class="col-xs-6 col-lg-6">
                      <select id="site" name="site" class="form-control" >    
                      <option value="">  -- Site -- </option>  
                        <?php  foreach( $site as $liste){?>
                        <option 
                          value = "<?php $liste->getIdSite(); ?>" > <?php   echo utf8_encode($liste->getLibSite());   } ?>
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
                        <?php  foreach( $personne as $lP){ ?>
                        <option value ="<?php echo $lP->getIdPers(); ?>"> <?php echo utf8_encode($lP->getNomPers().' - '.$lP->getPrenomPers());   } ?>
                        </option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group form-group-sm row">       
                    <label class="col-xs-1 col-lg-1 " ></label>
                    <?php     ?>
                    <label class="col-xs-2 col-lg-2 control-label" for="stat">Statut</label>
                    <div class="col-xs-6 col-lg-6">
                      <select id="stat" name="stat" class="form-control"> 
                      <option value =""> -- Statut -- </option>  
                        <?php  foreach($statut as $stat) { ?>
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
    
      <!--******************* extract   *******************-->
              <div class="modal fade" id="extract" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <h4 style="text-align: center;">Extraction</h4>
                      <form action="../Exportation_objets.php" method="post" class=" form-horizontal">                       
                      <!-- Select Basic -->
                      
                  <div class="form-group form-group-sm row">
                    <label class="col-xs-1 col-lg-1 " ></label>
                    <label class="col-xs-2 col-lg-2 control-label" for="site">Site</label>
                    <div class="col-xs-6 col-lg-6">
                      <select id="site" name="site" class="form-control" >    
                      <option value="">  -- Site -- </option>  
                        <?php  foreach( $site as $liste) { ?>
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
                        <?php  foreach( $personne as $lP){ ?>
                        <option value ="<?php echo $lP->getIdPers(); ?>"> <?php echo utf8_encode($lP->getNomPers().' - '.$lP->getPrenomPers());   } ?>
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
                        <?php  foreach( $statut as $stat) { ?>
                        <option value ="<?php echo $stat->getIdStat(); ?>"> <?php echo utf8_encode($stat->getLibStatut());   } ?>
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


