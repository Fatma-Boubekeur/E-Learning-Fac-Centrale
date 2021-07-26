<?php 
session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
	header("Location: ..\index.php");
}else 
{

?>

<?php
 include ("head.php");
?>

<?php 
include("connection.php");
$id_module=$_GET["id_module"];
$id_formateur=$_SESSION['id_user_session'];
$q2="select * from chapitre where id_module=$id_module";
$res2=mysqli_query($link,$q2)or die(mysqli_error($link));
?>

<link rel="stylesheet" type="text/css" href="css/My css/3d_button_version_2.css">

<style type="text/css">
    
     #body{
        background-color: #fff;
    }

    th{
        background-color:#1E90FF;
        font-size: 18px;
        font-family: Georgia, serif;
        text-align: center;
    }

    td{
        font-size: 18px;
        font-family: Georgia, serif;
        text-align: left;

    }


</style>

<link rel="stylesheet" type="text/css" href="css/My css/3d_button.css">

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
                    Espace Formateur
                    </a> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                    <li> <a href="index.php" style="font-size: 18px;font-family:'Playfair Display', serif; " >Home</a></li>
                    <li><a href="cours.php" style="font-size: 18px;font-family:'Playfair Display', serif;background-color: #cce6ff;">Gestion des cours </a></li>
                    <li><a href="choisir_module.php" id="link_quiz" style="font-size: 18px;font-family:'Playfair Display', serif;">Gestion des quizs</a></li>
                    <li><a href="forum.php" id="forum" style="font-size: 18px;font-family:'Playfair Display', serif;">Forum</a></li>
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
                            style="width: 50px; height: 50px;"> 
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


<div class="col-md-4" style="margin-top:90px;">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title" style="font-family:'Playfair Display', serif;font-size: 37px;">Gestion des cours</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="ajouter_chapitre.php" style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;color: black">Ajouter un nouveau   chapitre</a></li>


                               <li class="list-group-item"><a class="link-text-color" href="choisir_module_ressource.php" style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px; color: black;">Ajouter une ressource </a></li>

                               
                               <li class="list-group-item active"><a class="link-text-color" href="afficher_module.php" style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Afficher la liste des modules</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        


                <h1 align="center" style="font-family: 'Playfair Display', serif; font-size: 40px;">Liste des chapitre pour le module 
                    <?php 
                     $id_module=$_GET["id_module"];
                     $q="select * from module where id_module=$id_module";
                     $res=mysqli_query($link,$q)or die(mysqli_error($link));
                     $row=mysqli_fetch_assoc($res);
                     $nom=$row["nom"];
                     echo $nom; ?></h1>  
                <br />  
               
                <div class="table-responsive">  
                     <table id="table_chapitre" class="table table-striped table-bordered mytable">  
                          <thead >  
                               <tr>  
                                    <th style="color: white; width: auto;">Chapitre</th> 
                                    <th style="color: white; width: auto;">Description</th> 
                                    <th style="color: white; width: 50px;">Actions</th>                 
                               </tr>  
                          </thead>  
                      <tbody>
                       
                        <?php while($row2=mysqli_fetch_assoc($res2)){ ?>
                        <tr> 
                        <td> 
                            <?php echo $row2["nom_chapitre"]; ?>
                        </td>   
                        <td> 
                            <?php echo $row2["description"]; ?>
                        </td>
                        
                        <td>

                         <a href="ressource_chapitre.php?id_chapitre=<?php echo $row2["id_chapitre"]; ?>&id_module=<?php echo $_GET["id_module"]; ?>"">
                        <button type="button" class="btn btn-primary btn-lg btn3d" >Consulter liste des ressources</button></a>




                        <a href="editer_chapitre.php?id_chapitre=<?php echo $row2["id_chapitre"]; ?>&id_module=<?php echo $_GET["id_module"]; ?>"">
                        <button type="button" class="btn btn-primary btn-lg btn3d" ><span class="glyphicon glyphicon-edit" ></span></button></a>

                        <a href="supprimer_chapitre.php?id_chapitre=<?php 
                        echo $row2["id_chapitre"]; ?>&id_module=<?php echo $_GET["id_module"]; ?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce chapitre ?');">
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
    $('#table_chapitre').DataTable( {
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










