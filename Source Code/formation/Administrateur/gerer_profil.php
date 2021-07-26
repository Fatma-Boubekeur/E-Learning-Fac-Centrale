<?php 
session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
  header("Location: ../index.php");
}else 
{


?>

<?php
 include ("head.php");
?>

<?php 
include("connection.php");

?>



<?php 

if(isset($_POST["submit"])){


$nom=escape_dangerous_data($_POST["nom"]);

$prenom=escape_dangerous_data($_POST["prenom"]);
$tel=escape_dangerous_data($_POST["tel"]);

$file=escape_dangerous_data($_POST["file"]);

if((isset($_FILES['image']['name'] )) && ($_FILES['image']['name']!="")){

unlink( "images/Profil/".$file);

$file=$_FILES['image']['name'];
$file_tmp_name=$_FILES ['image']['tmp_name'];
move_uploaded_file($file_tmp_name,"images/Profil/$file");

}

$id_user=$_SESSION['id_user_session'];

$p2="update utilisateur  set nom='$nom',prenom='$prenom',numero_tel='$tel',         image='$file' where id_user=$id_user"or die(mysqli_error($link));
$res2=mysqli_query($link,$p2)or die(mysqli_error($link));


}

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
                    Espace Administrateur
                    </a> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                    <li> <a href="index.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Home</a></li>                    
                    <li> <a href="afficher_membre.php" style="font-size: 18px;font-family:'Playfair Display', serif; " >Gestion des membres </a></li>
                    <li> <a href="afficher_formation.php" style="font-size: 18px;font-family:'Playfair Display', serif; " >Gestion des formations </a></li>
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

                      <li><a href="gerer_profil.php" style="font-size: 18px;font-family:'Playfair Display', serif; background-color:#cce6ff;">Gérer profil</a></li>

                      <li><a href="logout.php" style="font-size: 18px;font-family:'Playfair Display', serif;"><img src="images/logout-256.png" style="width: 35px; height: 35px;"></a></li>
                    </ul>
                   
                </div> 
        </div>
    </div>
</div>




<?php
$id_user=$_SESSION['id_user_session'];
$p="select * from utilisateur where id_user=$id_user";
$res=mysqli_query($link,$p)or die(mysqli_error($link));
$row_profil=mysqli_fetch_assoc($res)or die(mysqli_error($link));
?>


        <div class="st-pusher" id="content" style="width: 1000px; display: table; margin: 0 auto;margin-bottom: 100px;">
           
            <div class="st-content" style="width: 1000px;">

                    <div class="container-fluid">
                        <div class="page-section third">
                            <!-- Tabbable Widget -->
                            <div class="tabbable paper-shadow relative" data-z="0.5" >
                                <!-- Tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#" style="font-size: 25px; font-weight:bold; font-family:'Playfair Display', serif; "><i class="fa fa-user" aria-hidden="true" style="font-size: 35px; margin-right: 10px;"></i><span class="hidden-sm hidden-xs">Gérer profil</span></a></li>
                            
                                </ul>
                                <!-- // END Tabs -->
                                <!-- Panes -->
                       


                <!-- Panes -->
                                <div class="tab-content">
                                    <div id="account" class="tab-pane active">
                                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-4 control-label" style=" font-weight:bold; font-family:'Playfair Display', serif;">Image</label>
                                                <div class="col-md-8">
                                                    <div class="media v-middle">
                                                        <div class="media-left">
                                                          <img src="images/Profil/<?php echo $row_profil["image"]; ?>" style="width: 100px; height: 100px;margin-right: 20px;">
                                                        </div>
                                                        <div class="media-body" >
                                                            <label style=" font-weight:bold; font-family:'Playfair Display', serif; font-size: 22px; text-transform:capitalize;background-color:;width: 150px;"> Ajouter image<i class="fa fa-upl"></i></label>
                                                        </div>
                                                           
                                                           <div class="media-body">
                                                            <input type="file"     name="image">  
                                                           </div> 

                                                            <input type="hidden" name="file" value="<?php echo $row_profil["image"]; ?>">                                    
                                                    </div>
                                                </div>
                                            </div>





















                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-md-4 control-label" style=" font-weight:bold; font-family:'Playfair Display', serif;">Nom d'utilisateur</label>


                                                        <div class="col-md-6">
                                                            <div class="form-control-material">
                                                                <input type="text" class="form-control" style=" font-weight:bold; font-family:'Playfair Display', serif;font-size: 18px;" value="<?php echo $row_profil["username"]; ?>" readonly="readonly">
                                                            
                                                             </div>
                                            </div>             </div>    


























                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-md-4 control-label" style=" font-weight:bold; font-family:'Playfair Display', serif;">Nom complet</label>



                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-control-material">
                                                                <input type="text" class="form-control" style=" font-weight:bold; font-family:'Playfair Display', serif;font-size: 18px;" value="<?php echo $row_profil["nom"] ?>"
                                                                 name="nom" id="nom">
                                                              
<span id="nom_message"></span>
                                                                
                                                            </div>
                                                        </div>






                                                        <div class="col-md-6">
                                                            <div class="form-control-material">
                                                                <input type="text" class="form-control" style=" font-weight:bold; font-family:'Playfair Display', serif;font-size: 18px;" value="<?php echo $row_profil["prenom"]; ?>" name="prenom" id="prenom">
                                                            <span id="prenom_message"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-md-4 control-label" style=" font-weight:bold; font-family:'Playfair Display', serif;">Email</label>
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                                                            <input type="email" class="form-control" 
                                                           style=" font-weight:bold; font-family:'Playfair Display', serif;font-size: 18px;" value="<?php echo $row_profil["email"]; ?>" name="email" id="email">



                                                           <span id=email_message></span>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




<script type="text/javascript">
    $('#email').blur(function(){

    if($('#email').val()!=''){
      
     var char=false;
     var email = $(this).val();
     var pattern = new RegExp(/^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/);
     if(pattern.test($('#email').val())){
        char=true;
     }
     

     $.ajax({
      url:'Check émail profil/check_email.php?id_user=<?php echo $_SESSION['id_user_session'] ; ?>',
      method:"POST",
      data:{email:email},
      success:function(data)
      {
       if(char==false){ // si émail non valide 
           $('#email_message').html('<span class="text-danger"  style="font-size:16px;" >Adresse émail non valide déja utilisé !</span><br>');
           $('#email_message').show();
           $('button[name=submit]').attr('disabled', true);

          
       }else if((data != '0') && ( char==false)) //si émail existe déja non valide
       {
        $('#email_message').html('<span class="text-danger"  style="font-size:16px;" >Adresse émail non valide ou  déja utilisé ! </span><br>');
        $('#email_message').show();
        $('button[name=submit]').attr('disabled', true);


       }else if((data != '0') && ( char==true)){ // si username existe déja mais valide 
        $('#email_message').html('<span class="text-danger"  style="font-size:16px;" >Adresse émail non valide ou déja utilisé ! </span><br>');
        $('#email_message').show();
         $('button[name=submit]').attr('disabled', true);

       }else { // si username n'existe pas dja et valide 
            $('#email_message').html('<span class="text-success"  style="font-size:16px;"> Adresse émail valide !  </span><br>');
            $('#email_message').show();
            $('button[name=submit]').attr('disabled', false);
       }

      }

     });
  }
  });

</script>









                                        <div class="form-group" style="margin-bottom: 30px;">
                                                <label for="inputEmail3" class="col-md-4 control-label" style=" font-weight:bold; font-family:'Playfair Display', serif;">Numéro téléphone</label>


                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <div class="input-group">
                                                          


                                                            <input type="tel" class="form-control" style=" font-weight:bold; font-family:'Playfair Display', serif;font-size: 18px;" value="<?php echo $row_profil["numero_tel"]; ?>" name="tel">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           

                                    <div class="form-group margin-none">
                                                <div class="col-md-offset-2 col-md-10">
                                                    <button type="submit" name="submit" id="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated style=" font-weight:bold; font-family:'Playfair Display', serif;font-size: 20px;text-transform:capitalize;" >Enregistrer les modifications</button>
                                                </div>
                                            </div>                                            
                                        </form>
                                    </div>
                                </div>
                                <!-- // END Panes -->
                            </div>
                            <!-- // END Tabbable Widget -->
                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
        </div>
        <!-- /st-pusher -->





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









<script type="text/javascript">
  
$(document).ready(function(){
$('input[class="form-control"]').focus(function(){
   $(this).removeAttr('style'); 
   $('#nom_message').hide();
   $('#prenom_message').hide();
   $('#email_message').hide();
});



$('#submit').click(function(){
valid=true;


if($('#nom').val()==''){
  $('#nom').css("border-color","#DA1900");
  $('#nom').css("background-color","#F2DEDE");
  $('#nom_message').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#nom_message').show();
  valid=false;
}


if($('#prenom').val()==''){
  $('#prenom').css("border-color","#DA1900");
  $('#prenom').css("background-color","#F2DEDE");
  $('#prenom_message').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#prenom_message').show();
  valid=false;
}

if($('#email').val()==''){
  $('#email').css("border-color","#DA1900");
  $('#email').css("background-color","#F2DEDE");
  $('#email_message').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#email_message').show();
  valid=false;
}





return valid && alert("Votre modification à bien été prise en compte ! ");

});

});




</script>


















</body>
</html>


<?php } ?>









