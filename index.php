<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <!-- <meta name="keywords" content="">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">

    body{

        background: url("dist/img/img.jpg");
       background: cover;


    }
    .container{
        position: absolute;

        transform: translate(-50%,-50%);
        width: 100%;
        top: 50%;
        left: 50%;
    }

</style>
</head>
<body>
        <!-- suprimer sessionStorage -->
    <script type="text/javascript">
    sessionStorage.clear();
    </script>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Connectez-Vous  </div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form   method="post" action="Login.php" id="loginform" class="form-horizontal" role="form">

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="Utilisateur"   required="">                                        
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="mot de passe" required="" >
                        </div>



                        <div class="input-group">
                            <div class="checkbox">
                            
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                            
                                <input type="submit" id="btn-login" name="valider" value="Login" class="btn btn-success" data-toggle="modal" data-target="#mySite">


                            </div>
                        </div>
                    </form>     
                </div>                     
            </div>  
        </div>

    </div> 
</div>
<div class="modal fade" id="mySite" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4 style="text-align: center;">Inventaire</h4>
                         <form action="inventaire/inventaire.php" method="post" class=" form-horizontal">                
                             <!-- Select Basic -->
                           <?php  $site = $bdh->prepare('SELECT 
                                                       SITE.ID_SITE ,
                                                       SITE.LIB_SITE                               
                                                     FROM 
                                                       SITE                                                    
                                                       ORDER BY  LIB_SITE  '); 
                           $site->execute(array( )); ?>
                      <div class="form-group">
                        <label class="col-xs-3 col-lg-3 control-label" for="site">Site</label>
                        <div class="col-xs-6 col-lg-6">
                          <select id="site" name="site" class="form-control"  required="">    
                          <option value="">  </option>  
                           <?php  while($sit = $site -> fetch()) { ?>
                           <option 
                             value = "<?php echo $sit['ID_SITE']; ?>" > <?php   echo utf8_encode($sit['LIB_SITE']);   } ?>
                           </option>
                          </select> <br>
                     <div class="form-check ">
                      <input type="radio" class="form-check-input" id="choix1" name="choix"  required="" value="1">
                      <label class="form-check-label" for="choix1">Nouveau</label>
                    </div>

                    <!-- Material inline 2 -->
                    <div class="form-check ">
                      <input type="radio" class="form-check-input" id="choix2" name="choix" required="" value="2">
                      <label class="form-check-label" for="choix1">Consulter</label>
                    </div>
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
</body>
</html>