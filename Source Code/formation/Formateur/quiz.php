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
</head>
<?php 

include("connection.php");

?>

<body style="padding: 0px;">

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
                    <li><a href="cours.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Gestion des cours </a></li>
                    <li><a href="choisir_module.php" id="link_quiz" style="font-size: 18px;font-family:'Playfair Display', serif;background-color:      #cce6ff;">Gestion des quizs</a></li>
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

     
    <div style="margin-top: 15px;margin-right: 20px;">
            <ul class="breadcrumb">
              <li class="breadcrumb-item" style="font-size: 16px; font-weight: bold; font-family:'Playfair Display', serif; ">
                     <?php 
                     $id_module=$_GET["id_module"];
                     $q="select * from module where id_module=$id_module";
                     $res=mysqli_query($link,$q)or die(mysqli_error($link));
                     $row=mysqli_fetch_assoc($res);
                     $nom=$row["nom"];
                     echo $nom; ?></h1>  




               </li>
              <li class="breadcrumb-item active" style="font-size: 16px; font-weight: bold;font-family:'Playfair Display', serif; ">
                  <?php 
                     $id_chapitre=$_GET["id_chapitre"];
                     $q2="select * from chapitre where id_chapitre=$id_chapitre";
                     $res2=mysqli_query($link,$q2)or die(mysqli_error($link));
                     $row2=mysqli_fetch_assoc($res2);
                     $nom=$row2["nom_chapitre"];
                     echo $nom; 
                   ?> 
              </li>
            </ul>
        </div>
     
            <div class="col-md-4" style="margin-top: 90px; margin-left: 40px; ">

       
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title" style="font-family:'Playfair Display', serif;font-size: 37px;">Gestion des quizs </h4>


                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="add_table_quiz.php?id_chapitre=<?php echo $_GET["id_chapitre"]; ?>&id_module=<?php echo $_GET["id_module"]; ?>"

                                 style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Ajouter un nouveau quiz</a></li>
                               <li class="list-group-item"><a class="link-text-color" 

                                href="afficher_quiz.php?id_chapitre=<?php echo $_GET["id_chapitre"]; ?>&id_module=<?php echo $_GET["id_module"]; ?>"

                                style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Afficher la liste des quizs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        



<div class="parallax cover overlay height-400" style="margin-top: 20px;margin-right: 30px; " >
        <img class="parallax-layer" data-auto-offset="true" data-auto-size="false" src="images/q.jpg" alt="Learning Cover">
        <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-opacity="true" data-speed="8">
            <div class="v-center">
                <div class="page-section" style="padding-left: 0px;">
                    <h1 class="text-display-2 overlay-bg-white margin-v-0-15 inline-block" style="font-size: 45px; text-align: center; font-family: 'Rozha One', serif;">Gestion des quizs</h1>

                   
                </div>
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










