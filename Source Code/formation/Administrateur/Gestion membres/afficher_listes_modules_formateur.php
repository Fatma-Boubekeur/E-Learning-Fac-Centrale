<?php 
session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
  header("Location: ../../index.php");
}else 
{

?>
<?php
 include "../connection.php";
?>

<?php 

$id_formateur=$_GET["id_formateur"];
$q="select * from module , enseigner where module.id_module=enseigner.id_module and enseigner.id_formateur=$id_formateur";
$resultat=mysqli_query($link,$q);

?>


<link rel="stylesheet" type="text/css" href="../css/My css/3d_button_version_2.css">

<style type="text/css">
    #body{
        background-color: #fff;
    }


</style>

</head>
<?php
 include "head.php";
?>
<body id="body" style="padding: 0px;">


<!-- Fixed navbar -->
  <div class="navbar navbar-default  navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation" >
        <div class="container" style=" width: auto;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-logo" style="font-size: 25px; font-family: 'Playfair Display', serif;  ">
                     <a href="../index.php" style="color: black;">
                    Espace Administrateur
                    </a> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                    <li> <a href="../index.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Home</a></li>
                    
                  <li> <a href="../afficher_membre.php" style="font-size: 18px;font-family:'Playfair Display', serif; background-color:#cce6ff;">Gestion des membres </a></li>
                  <li> <a href="../afficher_formation.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Gestion des formations </a></li>
                  <li><a href="../forum.php" id="forum" style="font-size: 18px;font-family:'Playfair Display', serif;">Forum</a></li>

              
                </script>

                 
                
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

                            <img src="../images/Profil/<?php echo $image ?>" 
                            style="width: 40px; height: 40px;"> 
                            <?php
                            echo $_SESSION['username_session'];   
                            ?>
                            </a>
                      </li>

                      <li><a href="../gerer_profil.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Gérer profil</a></li>

                      <li><a href="../logout.php" style="font-size: 18px;font-family:'Playfair Display', serif;color: white;">P<img src="../images/logout-256.png" style="width: 35px; height: 35px;"></a></li>
                    </ul>
                   
                </div> 







            </div>
         
        </div>
    </div>
    
    

  
                <h1 align="center" style="font-family: 'Vidaloka', serif; font-size: 40px;">Listes des modules assurer par le formateur 
                     <?php 
                     $user=$_GET['id_formateur'];
                     $q="select * from utilisateur, formateur where utilisateur.id_user=formateur.id_user and utilisateur.id_user=$user"; 
                     $res=mysqli_query($link,$q)or die(mysqli_error($link));  
                     $row=mysqli_fetch_assoc($res);
                     $nom=$row['nom'];
                     $prenom=$row['prenom'];
                     echo $nom.' '.$prenom;
                     ?>


                 </h1>  
                <br /> 
                <div class="table-responsive">  
                     <table id="table_apprenants" class="table table-striped table-bordered mytable">  
                          <thead >  
                               <tr>  
                                    <th style="color: white; width: auto; background-color:  #d9534f; ">Nom du module </th> 
                                    <th style="color: white; width: auto; background-color:  #d9534f; ">Désaffecter </th> 
                                  
                               </tr>  
                          </thead>  
                      <tbody>
                        <?php while ($row=mysqli_fetch_array($resultat)){ ?>
                        <tr> 
                        <td><?php  echo $row["nom"]; ?> </td>
                        <td><a href="desaffecter_formateur.php?id_formateur=<?php echo $row["id_formateur"]; ?>&id_module=<?php echo $row["id_module"]; ?>" onclick="return confirm('Etes-vous sûr de vouloir désaffecter le formateur du module  ?');">
                        <button type="button" class="btn btn-default btn-lg btn3d"><img src="data:image/png;base64,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" style="width: 40px; height: 40px;"></button></a>

 </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                     </table>  
                </div>  
        
      </body>  
 </html>  
 <script> 













$(document).ready(function() {
    $('#table_modules_formateur.php').DataTable( {
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


    <script src="../js/Template JS/vendor-core.min.js"></script>
    <script src="../js/Template JS/countdown.min.js"></script>
    <script src="../js/Template JS/vendor-tables.min.js"></script>
    <script src="../js/Template JS/vendor-forms.min.js"></script>
    <script src="../js/Template JS/vendor-carousel-slick.min.js"></script>
    <script src="../js/Template JS/vendor-player.min.js"></script>
    <script src="../js/Template JS/vendor-charts-flot.min.js"></script>
    <script src="../js/Template JS/vendor-nestable.min.js"></script>
    <script src="../js/Template JS/module-essentials.min.js"></script>
    <script src="../js/Template JS/module-material.min.js"></script>
    <script src="../js/Template JS/module-layout.min.js"></script>
    <script src="../js/Template JS/module-sidebar.min.js"></script>
    <script src="../js/Template JS/module-carousel-slick.min.js"></script>
    <script src="../js/Template JS/module-player.min.js"></script>
    <script src="../js/Template JS/module-messages.min.js"></script>
    <script src="../js/Template JS/module-maps-google.min.js"></script>
    <script src="../js/Template JS/module-charts-flot.min.js"></script>
    <script src="../js/Template JS/theme-core.min.js"></script>
</body>
</html>
  
<?php } ?>


