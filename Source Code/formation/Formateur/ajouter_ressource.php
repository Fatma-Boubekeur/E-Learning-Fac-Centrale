<?php 
session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
	header("Location: ..\index.php");
}else 
{

?>

<?php 
include("connection.php");

?>


<?php 
if(isset($_POST["btn_ajouter"])){

$id_chapitre=escape_dangerous_data($_POST["id_chapitre"]);  
$nom_ressource=escape_dangerous_data($_POST["nom_ressource"]);

$ressource=$_FILES['ressource']['name'];
$file_tmp_name=$_FILES ['ressource']['tmp_name'];
move_uploaded_file($file_tmp_name,"Ressource du cours/$ressource");


$id_formateur=$_SESSION['id_user_session'];

$q="insert into ressource value('','$nom_ressource','$ressource',$id_chapitre,$id_formateur)";
$res=mysqli_query($link,$q)or die(mysqli_error($link));

 
}




?>





<?php
 include ("head.php");
?>

<link rel="stylesheet" type="text/css" href="css/My css/3d_button.css">


<style type="text/css">

</style>

</head>


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

                      <li><a href="gerer_profil.php" style="font-size: 18px;font-family:'Playfair Display', serif;">G??rer profil</a></li>

                      <li><a href="logout.php" style="font-size: 18px;font-family:'Playfair Display', serif;"><img src="images/logout-256.png" style="width: 35px; height: 35px;"></a></li>
                    </ul>
                   
                </div> 
            </div>
         
        </div>
    </div>








                <div class="col-md-4" style="margin-top: 100px;">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title" style="font-family:'Playfair Display', serif;font-size: 37px;">Gestion des cours</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item "><a class="link-text-color" href="ajouter_chapitre.php" style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Ajouter un nouveau   chapitre</a></li>

                               <li class="list-group-item active"><a class="link-text-color" href="choisir_module_ressource.php" style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Ajouter une ressource </a></li>


                               <li class="list-group-item"><a class="link-text-color" href="afficher_module.php" style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Afficher la liste des modules</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        


                    
    
    
       
            
                <div class="col-md-8 col-lg-8 " style="background-color: ;">            
                    <h1 class="page-section-heading" style="font-family:'Playfair Display', serif; text-align: center; font-size: 37px; margin-left: 40px;">Ajouter ressource</h1>
                    <div class="panel panel-default">
                        <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="" 
                    enctype="multipart/form-data">

                   <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"  style="font-size: 24px;font-family:'Playfair Display', serif;text-align: left; ">Chapitre</label>
                                    <div class="col-sm-9">
                                        <?php 
                                         $id_module=$_GET["id_module"];
                                         $q2="select * from chapitre where id_module=$id_module";
                                         $res2=mysqli_query($link,$q2)or die(mysqli_error($link));
                                       ?>

                                        <select  class="selectpicker" data-style="btn-white" data-live-search="true"
                                         name="id_chapitre" id="id_chapitre" >

                                         <?php 
                                        while($row=mysqli_fetch_assoc($res2)){
                                         ?>
                                         <option value="<?php echo $row["id_chapitre"]?>" style="font-size: 22px;">
                                             
                                          <?php echo $row["nom_chapitre"]; ?>
                                         </option>   
                                         <?php } ?>   


                                        </select>

                                    </div>
                </div>
                     
                     

               <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label" style="font-size: 24px;font-family:'Playfair Display', serif;text-align: left; ">Nom ressource </label>
                                    <div class="col-sm-9">
                                        <div class="form-control-material">
                                            <input type="text" class="form-control" placeholder="Nom ressource" style="font-size: 22px;" name="nom_ressource" 
                                            id="nom_ressource">
                                            <span id="message_nom_ressource"></span>
                                            
                                        </div>
                                    </div>
                </div>


                             
                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label" style="font-size: 24px;font-family:'Playfair Display', serif;text-align: left; ">Contenue </label>
                                    <div class="col-sm-9">
                                        <div class="form-control-material">
                                            <input type='file'  name="ressource" class="form-control" id="ressource" >
                                           <span id="message_ressources"></span>
                                        </div>
                                    </div>
                </div>












                   
                                
                <div class="form-group margin" style="margin-top: 40px; margin-bottom: 20px;">
                    <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" name="btn_ajouter" id="btn_ajouter" 
                    class="btn btn-primary btn-lg btn3d"  style=" font-size: 20px ; background-color: DodgerBlue;border-color: DodgerBlue;font-family: goargia;" >Ajouter</button>
                         
                    <input type="reset" name="reset" id="reset" 
                     class="btn btn-primary btn-lg btn3d"  value="Annuler"
                      style=" font-size: 20px ; background-color: DodgerBlue;border-color: DodgerBlue;font-family: goargia;">


                                    </div>
                                </div>
                            </form>
                    
                   
   </div>
</div>
</div>

        



<!-- Footer -->
   
    <footer class="footer">
        <strong>E-Learning Universit?? Alger 1 </strong> &copy; Copyright 2018
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




<script type="text/javascript">
    $(document).ready(function(){




$('input[class="form-control"]').focus(function(){
   $(this).removeAttr('style');  
});

$('textarea[class="form-control"]').focus(function(){
   $(this).removeAttr('style');  
});


$('#nom_ressource').focus(function(){
   $('#message_nom_ressource').hide();
});




$('#btn_ajouter').click(function(){
valid=true;



if($('#nom_ressource').val()==''){
   $('#nom_ressource').css("border-color","#DA1900");
   $('#nom_ressource').css("background-color","#F2DEDE");
   $('#message_nom_ressource').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#message_nom_ressource').show();
  valid=false;
}


var pattern = new RegExp(/\.(aif|cda|mid|midi|mpa|ogg|wav|wma|wpl|7z|arj|deb|pkg|rar|rpm|tar|gz|z|zip|bin|dmg|iso|toast|vcd|csv|dat|db|dbf|log|mdb|sav|sql|tar|xml|apk|bat|bin|cgi|com|exe|gadget|jar|py|wsf|fnt|fon|otf|ttf|ai|bmp|gif|ico|jpeg|jpg|png|ps|psd|svg|tif|tiff|asp|aspx|cer|cfm|cgi|pl|css|htm|html|js|jsp|part|php|py|rss|xhtml|key|odp|pps|ppt|pptx|c|class|cpp|cs|h|java|sh|swift|vb|ods|xlr|xls|xlsx|3g2|3gp|avi|flv|h264|m4v|mkv|mov|mp4|mpg|mpeg|rm|swf|vob|wmv|doc|docx|odt|pdf|rtf|tex|txt|wks|wps|mp3|wpd)$/i);


ressource2=$('#ressource').val();
if($('#ressource').val()==''){
   $('#ressource').css("border-color","#DA1900");
   $('#ressource').css("background-color","#F2DEDE");
   $('#message_ressources').html('<span class="text-danger" style="font-size:16px;">Veuillez choisir une ressource svp </span><br>');
   $('#message_ressources').show();
  valid=false;
}else  if(pattern.test(ressource2)==true){
     $('#message_ressources').html('<span class="text-success" style="font-size:16px;"> Format  valide </span><br>');
     $('#message_ressources').show();
     }else{
     $('#message_ressources').html('<span class="text-danger" style="font-size:16px;"> Format  invalide </span><br>');
     $('#message_ressources').show();
     valid=false;
}




$('#ressource').change(function(){
    $('#message_ressources').hide();
      var ressource=$(this).val()
      var pattern = new RegExp(/\.(aif|cda|mid|midi|mpa|ogg|wav|wma|wpl|7z|arj|deb|pkg|rar|rpm|tar|gz|z|zip|bin|dmg|iso|toast|vcd|csv|dat|db|dbf|log|mdb|sav|sql|tar|xml|apk|bat|bin|cgi|com|exe|gadget|jar|py|wsf|fnt|fon|otf|ttf|ai|bmp|gif|ico|jpeg|jpg|png|ps|psd|svg|tif|tiff|asp|aspx|cer|cfm|cgi|pl|css|htm|html|js|jsp|part|php|py|rss|xhtml|key|odp|pps|ppt|pptx|c|class|cpp|cs|h|java|sh|swift|vb|ods|xlr|xls|xlsx|3g2|3gp|avi|flv|h264|m4v|mkv|mov|mp4|mpg|mpeg|rm|swf|vob|wmv|doc|docx|mp3|odt|pdf|rtf|tex|txt|wks|wps|wpd)$/i);
     if(pattern.test(ressource)==true){
     $('#message_ressources').html('<span class="text-success" style="font-size:16px;"> Format  valide </span><br>');
     $('#message_ressources').show();
     }else{
     $('#message_ressources').html('<span class="text-danger" style="font-size:16px;"> Format  invalide </span><br>');
     $('#message_ressources').show();
     valid=false;
     }
});

return valid && alert(" Ressource ajout?? avec succ??s ! ");


});
$('#ressource').change(function(){
    $('#message_ressources').hide();
      var ressource=$(this).val()
      var pattern = new RegExp(/\.(aif|cda|mid|midi|mpa|ogg|wav|wma|wpl|7z|arj|deb|pkg|rar|rpm|tar|gz|z|zip|bin|dmg|iso|toast|vcd|csv|dat|db|dbf|log|mdb|sav|sql|tar|xml|apk|bat|bin|cgi|com|exe|gadget|jar|py|wsf|fnt|fon|otf|ttf|ai|bmp|gif|ico|jpeg|jpg|png|ps|psd|svg|tif|tiff|asp|aspx|cer|cfm|cgi|pl|css|htm|html|js|jsp|part|php|py|rss|xhtml|key|odp|pps|ppt|pptx|c|class|cpp|cs|h|java|sh|swift|vb|ods|xlr|xls|xlsx|3g2|3gp|avi|flv|h264|m4v|mkv|mov|mp4|mpg|mpeg|rm|swf|vob|wmv|doc|docx|mp3|odt|pdf|rtf|tex|txt|wks|wps|wpd)$/i);
     if(pattern.test(ressource)==true){
     $('#message_ressources').html('<span class="text-success" style="font-size:16px;"> Format  valide </span><br>');
     $('#message_ressources').show();
     }else{
     $('#message_ressources').html('<span class="text-danger" style="font-size:16px;"> Format  invalide </span><br>');
     $('#message_ressources').show();
     valid=false;
     }
});

});











</script>




</body>
</html>

<?php } ?>










