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





<link rel="stylesheet" type="text/css" href="css/consulter_cours_css/CSS_1/css.css">

<style type="text/css">

html,
body {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  height: 100%;
  width: 100%; 
  
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}
 
.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  display: table-cell;
  padding: 1em;
  text-align: center;
  vertical-align: middle;
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color: #fff;
  font-size: 1.15em;
  font-weight: 900;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
} 
.card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}



</style>



<script type="text/javascript">
    $(document).ready(function(){

    var flag=0;

    $.ajax({
     type:"GET",
     url:"get_ressource.php?id_chapitre=<?php echo $_GET['id_chapitre']; ?>    ",
     data:{ 
        'offset':0,
        'limit':6   
     },
     success:function(data){

        $('body').append(data);

        flag+=6;

    }

    });


$(window).scroll(function(){
if($(window).scrollTop()>=$(document).height()-$(window).height()){

 $.ajax({
     type:"GET",
     url:"get_ressource.php?id_chapitre=<?php  echo $_GET['id_chapitre']; ?>",
     data:{
        'offset':flag,
        'limit':6

     },
     success:function(data){

        $('body').append(data);
        flag+=6;

    }

    });



}


    });
    });





</script>
</head>


<?php 
include("connection.php");

?>
<body style="padding:0px;">

<!-- Fixed navbar -->
    <div class="navbar navbar-default  navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
        <div class="container" style=" width: auto;" id="id2">
            <div class="navbar-header" id="id3">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-logo" style="font-size: 25px; font-family: 'Playfair Display', serif; " id="id4">
                     <a href="index.php" style="color: black;">
                    Espace Apprenant
                    </a> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav" id="id5">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                  <li> <a href="index.php"  style="font-size: 18px;font-family:'Playfair Display', serif;">Home</a></li> 
                  <li> <a href="module.php"  style="font-size: 18px;font-family:'Playfair Display', serif; background-color:#cce6ff;">Mes cours </a></li>
                  <li> <a href="choisir_module.php"  style="font-size: 18px;font-family:'Playfair Display', serif; ">Passer quiz</a></li>
                  <li><a href="forum.php" id="forum"  style="font-size: 18px;font-family:'Playfair Display', serif; ">Forum</a></li>
                
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
                            style="width: 60px; height: 60px;"> 
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
              <li class="breadcrumb-item" style="font-size: 25px; font-weight: bold; font-family:'Playfair Display', serif; ">
                     <?php 
                     $id_module=$_GET["id_module"];
                     $q="select * from module where id_module=$id_module";
                     $res=mysqli_query($link,$q)or die(mysqli_error($link));
                     $row=mysqli_fetch_assoc($res);
                     $nom=$row["nom"];
                     echo $nom; ?></h1>  




               </li>
              <li class="breadcrumb-item active" style="font-size: 25px; font-weight: bold;font-family:'Playfair Display', serif; ">
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






































<!-- Footer -->
   
    <footer class="footer" >
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










