
<?php 
session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
  header("Location: ../index.php");
}else 
{

?>
<?php
 include "connection.php";
?>

<?php 

$q="SELECT * from formation";
$resultat=mysqli_query($link,$q)or die(mysqli_error($link));

?>




<?php
 include "head.php";
?>


<link rel="stylesheet" type="text/css" href="css/My css/3d_button_version_2.css">

<style type="text/css">
    #body{
        background-color: #fff;
    }

    th{
        background-color:#657cc3;
        font-size: 20px;
        font-family: Georgia, serif;
        text-align: center;
    }

    td{
        font-size: 20px;
        font-family: Georgia, serif;
        text-align: left;

    }

#topbar li{
    list-style:none;
    padding:10px;
    display:inline-block; 
}
#topbar li a {
      
}

</style>

</head>

<body id="body" style="padding: 0px;">



   
<!-- Fixed navbar -->
 <div class="navbar navbar-default  navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation" style="margin-bottom: 0px;">
        <div class="container" style=" width: auto;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-logo" style="font-size: 25px; font-family: 'Playfair Display', serif;  ">
                     <a href="index.php" style="color: black;">
                    Espace Administrateur
                    </a> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                    <li> <a href="index.php" style="font-size: 18px;font-family:'Playfair Display', serif;" >Home</a></li>                    
                    <li> <a href="afficher_membre.php" style="font-size: 18px;font-family:'Playfair Display', serif; " >Gestion des membres </a></li>
                    <li> <a href="afficher_formation.php" style="font-size: 18px;font-family:'Playfair Display', serif;background-color:#cce6ff; " >Gestion des formations </a></li>
                    <li><a href="forum.php" id="forum" style="font-size: 18px;font-family:'Playfair Display', serif; " >Forum</a></li>     
                </ul>

                


                               <div class="navbar-right" id="id6">
                    <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
                   
                        <li> <a href="#" style="font-size: 18px;font-family:'Playfair Display', serif;">

                            <?php 
$id_user=$_SESSION['id_user_session'];                           
$image_query="select * from utilisateur where id_user=$id_user";
$res_image=mysqli_query($link,$image_query)or die(mysqli_error($link));
$row_image=mysqli_fetch_assoc($res_image)or die(mysqli_error($link));
$image=$row_image["image"];



                            ?>

                            <img src="images/Profil/<?php echo $image ?>" 
                            style="width: 40px; height: 40px;"> 
                            <?php
                            echo $_SESSION['username_session'];   
                            ?>
                            </a>
                      </li>

                      <li><a href="gerer_profil.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Gérer profil</a></li>

                      <li><a href="logout.php" style="font-size: 18px;font-family:'Playfair Display', serif;"><img src="images/logout-256.png" style="width: 35px; height: 35px;"></a></li>
                    </ul>
                   
                </div> 

            </div>
         
        </div>
    </div>















    
                <h1 align="center" style="font-family: 'Playfair Display', serif; font-size: 40px;">Liste des formations disponibles  </h1>  
                <br />  
               
                 <div class="row">
                 <div class="pull-left" >
                 <ul id="topbar" style="padding-left: 5px;">
                <li><a href="ajouter_formation.php" class="btn btn-primary btn-primary"  style="font-size:20px; font-family:Georgia, serif; background-color: #657cc3; border-color:#657cc3;"><span class="glyphicon glyphicon-pencil" style="font-size:20px;"></span> Ajouter une nouvelle formation</a></li>
                </ul>
              </div>
              </div>
                <div class="table-responsive"  style="margin-bottom: 100px;">  
                     <table id="table_formation" class="table table-striped table-bordered mytable">  
                          <thead >  
                               <tr>  
                                    <th style="color: white; width: auto;">Nom de la formation</th> 
                                    <th style="color: white; width: auto;">objet de la formation</th>
                                 
                                    <th style="color: white; width: auto;">Détails</th> 
                                    <th style="color: white; width: auto;">Actions</th> 
                               </tr>  
                          </thead>  
                      <tbody>
                        <?php while ($row=mysqli_fetch_array($resultat)){ ?>
                        <tr> 
                        <td><?php  echo $row["nom_formation"]; ?> </td>
                        <td><?php  echo $row["objet"]; ?> </td>
               
                        <td>
                        <a href="niveau_formation.php?id_formation=<?php echo $row["id_formation"]; ?>">
                        <button type="button" class="btn btn-primary btn-lg btn3d"
                        style="background-color: #657cc3;border-color: #657cc3; font-size: 21px;" >Afficher les niveaux de la formation</button></a> 

                        </td>
                        <td>
                       
                        
                        <a href="supprimer_formation.php?id_formation=<?php echo $row["id_formation"]; ?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer cette formation ?');">
                        <button type="button" class="btn btn-danger btn-lg btn3d"><span class=" glyphicon glyphicon-trash"></span></button></a>



                        </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                     </table>  
                </div>  
           </div>











 <script>
$(document).ready(function() {
    $('#table_formation').DataTable( {
        "language": {
           
    "sProcessing":     "Traitement en cours...",
    "sSearch":         "Rechercher&nbsp;:",
    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
    "sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
    "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
    "sInfoPostFix":    "",
    "sLoadingRecords": "Chargement en cours...",
    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
    "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
    "oPaginate": {
        "sFirst":      "Premier",
        "sPrevious":   "Pr&eacute;c&eacute;dent",
        "sNext":       "Suivant",
        "sLast":       "Dernier"
    },
    "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
    }
        }
    } );
} );

 </script>  






<!-- Footer -->
    <footer class="footer">
        <strong>E-Learning Université Alger 1 </strong> &copy; Copyright 2018
    </footer>

    <script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
    </script>


    <script src="js/Template JS/vendor-core.min.js"></script>
    <script src="js/Template JS/countdown.min.js"></script>
    <script src="js/Template JS/vendor-tables.min.js"></script>
    <script src="js/Template JS/vendor-forms.min.js"></script>
    <script src="js/Template JS/vendor-carousel-slick.min.js"></script>
    <script src="js/Template JS/vendor-player.min.js"></script>
    <script src="js/Template JS/vendor-charts-flot.min.js"></script>
    <script src="js/Template JS/vendor-nestable.min.js"></script>
    <script src="js/Template JS/module-essentials.min.js"></script>
    <script src="js/Template JS/module-material.min.js"></script>
    <script src="js/Template JS/module-layout.min.js"></script>
    <script src="js/Template JS/module-sidebar.min.js"></script>
    <script src="js/Template JS/module-carousel-slick.min.js"></script>
    <script src="js/Template JS/module-player.min.js"></script>
    <script src="js/Template JS/module-messages.min.js"></script>
    <script src="js/Template JS/module-maps-google.min.js"></script>
    <script src="js/Template JS/module-charts-flot.min.js"></script>
    <script src="js/Template JS/theme-core.min.js"></script>
</body>
</html>
  
<?php } ?>


