
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

<link rel="stylesheet" type="text/css" href="css/My css/3d_button.css">



</head>
<?php
 include "head.php";
?>

<?php
if (isset($_POST["btn_ajouter"])) {
  $nom_module=escape_dangerous_data($_POST["nom_module"]);

  $id_niveau=$_GET["id_niveau"]; 
  $id_formation=$_GET["id_formation"];
  $q="insert into module values('',$id_niveau,'$nom_module')";
  $res=mysqli_query($link,$q)or die(mysqli_error($link));
  header("Location:module.php?id_niveau=$id_niveau&&id_formation=$id_formation");
}




?>



<body id="body_formulaire" style="padding: 0px;">   

   
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
                    <li> <a href="afficher_formation.php" style="font-size: 18px;font-family:'Playfair Display', serif; background-color:#cce6ff;" >Gestion des formations </a></li>
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

                      <li><a href="logout.php" style="font-size: 18px;font-family:'Playfair Display', serif;color:white;">p<img src="images/logout-256.png" style="width: 35px; height: 35px;"></a></li>
                    </ul>
                   
                </div> 

            </div>
         
        </div>
    </div>









<div class="row">
    <div class="signup-form">
        <form action="" method="post" id="formulaire" >
              <h2>Ajouter un module</h2>
              <hr>

             <div class="form-group">
                   <label >Nom du module</label>
                   <input type="text" class="form-control" name="nom_module" id="nom_module"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom du module'" placeholder=" Nom du module">
              </div> 

                <div class="form-group">
                <div class="row">

               <button type="submit" name="btn_ajouter" id="btn_ajouter" class="btn btn-primary btn-lg btn3d"  style=" font-size: 20px ; background-color: #657cc3;border-color: #657cc3;" > Ajouter</button>
           
                   

               <input type="reset" name="reset" id="reset" class="btn btn-primary btn-lg btn3d" style=" font-size: 20px ; background-color: #657cc3;border-color: #657cc3;" value="Annuler">
                </div>
                </div>

<script type="text/javascript">

$('#reset').click(function(){

});
 
</script>
        </form>
    </div>
</div>


</div>















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


