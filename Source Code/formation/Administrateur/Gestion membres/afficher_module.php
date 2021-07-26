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
$id_niveau=$_GET['id_niveau'];
$requete="select * from module where id_niveau_formation=$id_niveau";
$resultat_table_module=mysqli_query($link,$requete)or die(mysqli_error($link));

?>



<?php
 include "head.php";
?>


<style type="text/css">
th{
    font-size: 20px;
    font-family: Georgia, serif;
}

td{
    font-size: 20px;
     font-family: Georgia, serif;
}

.btn-glyphicon {
    padding:8px;
    background:#ffffff;
    margin-right:4px;
}
.icon-btn {
    padding: 1px 15px 3px 2px;
    border-radius:50px;
}
</style>

</head>


<body style="padding: 0px;">

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

                      <li><a href="../logout.php" style="font-size: 18px;font-family:'Playfair Display', serif;"><img src="../images/logout-256.png" style="width: 35px; height: 35px;"></a></li>
                    </ul>
                   
                </div> 







            </div>
         
        </div>
    </div>
    
    


<!--Affecter Formateur-->

<h1 style="font-family:'Playfair Display', serif; text-align: left; font-size: 37px; margin-left: 120px;">
                     Affecter le formateur : <?php 
                     $user=$_GET['id_formateur'];

                     $q="select * from utilisateur, formateur where utilisateur.id_user=formateur.id_user and utilisateur.id_user=$user"; 
                     $res=mysqli_query($link,$q)or die(mysqli_error($link));  
                     $row=mysqli_fetch_assoc($res);
                     $nom=$row['nom'];
                     $prenom=$row['prenom'];
                     echo $nom.' '.$prenom;
                     ?>
                     à un ou plusieurs modules

</h1>


<div class="container" >

<div class="row">
        <hr class="hr-primary">
        <ol class="breadcrumb bread-primary ">
          <button href="#" class="btn btn-primary" style="font-size: 20px;
          font-family:'goargia', serif; margin-bottom: 20px;margin-right: 20px;background-color:DodgerBlue;border-color: DodgerBlue;  "> Formation mathématique et informatique </button >
                    <?php
                     $q="select * from table_niveau";
                     $resultat=mysqli_query($link,$q) or die(mysqli_error($link));
                     while($row2=mysqli_fetch_assoc($resultat)){
                     ?>


              <li><a  href="afficher_module.php?id_formateur=<?php echo $_GET['id_formateur']; ?>&&id_niveau=<?php echo $row2['id_niveau']; ?>" 
                style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif;">
                 <?php echo $row2['niveau_etude']; ?>

                    </a></li>
                    <?php } ?>
        </ol>
    </div>




<!--Tableau-->
<div class="row" style="margin-bottom: 100px;">
        <div class="page-section">
            <div class="row">
                <div class="col-lg-12 col-lg-12 col-md-offset-12 col-lg-offset-12" style="margin-left: 0px;margin-top: 0px;">
                    <div class="panel panel-default" style="margin-left: 0px;">
                        <!-- Data table -->
                        <table class="table" cellspacing="0" width="100%" id="table_module">
                            <thead>
                                <tr>  
                               <th scope="col" style="color: white;width: auto; background-color:DodgerBlue;">Module</th>
                               <th scope="col" style="color: white;width: auto; background-color:DodgerBlue;">Affecter</th>
                               </tr>

                            </thead>
                            <tbody>
                               <?php while($ligne=mysqli_fetch_assoc($resultat_table_module)) { ?>
                               <tr>
                              <form method="post" action="" class="form-horizontal">   
                              <td> <?php echo $ligne['nom'] ; ?>
                              <input type="hidden" name="id_module" value="<?php echo $ligne['id_module'] ; ?> ">
                              </td>

                        
                                <td><button type="submit"  name="btn_valider" class="btn btn-primary"><span class="glyphicon glyphicon-plus" style="font-size: 18px;"></span>  </button></td>  


                              
      </form>
    </tr>
    <?php } ?>
                            </tbody>
                        </table>
                        <!-- // Data table -->
                    </div>
                </div>
            </div>
       
        



















</div>






<?php
if(isset($_POST['btn_valider'])){

$id_formateur=$_GET['id_formateur'];
$id_module=$_POST['id_module'];

$query_ajouter_à_table_enseigner="insert into enseigner values($id_module,$id_formateur)";
$resultat_table_enseigner=mysqli_query($link,$query_ajouter_à_table_enseigner);

if(!$resultat_table_enseigner){
   echo '<script>';
   echo 'alert("déja affecter à ce module")';
   echo '</script>';

}else{

   echo '<script>';
   echo 'alert("Formateur affecté avec succés ! ")';
   echo '</script>';
}

}



?>



















         

<script>
$(document).ready(function() {
    $('#table_module').DataTable( {

      bSort: false,
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


