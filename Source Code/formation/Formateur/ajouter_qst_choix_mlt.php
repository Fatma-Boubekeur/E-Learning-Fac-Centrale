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

<style type="text/css">

</style>


<link rel="stylesheet" type="text/css" href="css/My css/3d_button.css">

</head>

<?php 
include("connection.php");
$id_quiz=$_GET["id_quiz"];
$id_chapitre=$_GET["id_chapitre"];
$id_module=$_GET["id_module"];




if(isset($_POST["btn_ajouter"])){
$question=escape_dangerous_data($_POST["question"]);
$note=escape_dangerous_data($_POST["note"]);

$rep1=escape_dangerous_data($_POST["rep1"]);
$rep2=escape_dangerous_data($_POST["rep2"]);
$rep3=escape_dangerous_data($_POST["rep3"]);



$q="insert into questions value('','$question',$note,$id_quiz)";
$res=mysqli_query($link,$q)or die(mysqli_error($link));



$q2="SELECT id_question FROM questions ORDER BY  id_question  DESC LIMIT 1";
$res2=mysqli_query($link,$q2);
$last_row=mysqli_fetch_array($res2);
$last=$last_row['id_question'];


if(isset($_POST["iscorrect"])){
    if($_POST["iscorrect"]=="rep1"){
$q3="insert into reponses value('','$rep1',1,$last)";
$res3=mysqli_query($link,$q3);
    }else{

$q4="insert into reponses value('','$rep1',0,$last)";
$res4=mysqli_query($link,$q4);

    }
}

if(isset($_POST["iscorrect"])){
    if($_POST["iscorrect"]=="rep2"){
$q5="insert into reponses value('','$rep2',1,$last)";
$res5=mysqli_query($link,$q5);
    }else{

$q6="insert into reponses value('','$rep2',0,$last)";
$res6=mysqli_query($link,$q6);

    }
}




if(isset($_POST["iscorrect"])){
    if($_POST["iscorrect"]=="rep3"){
$q7="insert into reponses value('','$rep3',1,$last)";
$res57=mysqli_query($link,$q7);
    }else{

$q8="insert into reponses value('','$rep3',0,$last)";
$res8=mysqli_query($link,$q8);

    }
}



header("Location:question.php?id_quiz=$id_quiz&id_module=$id_module&id_chapitre=$id_chapitre");




}

?>



<body style="padding:0px;" >


 
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
                     <a href="index.php" style="color: black;">
                    Espace Formateur
                    </a> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                    <li> <a href="index.php" style="font-size: 18px;font-family:'Playfair Display', serif;" >Home</a></li>
                    <li><a href="cours.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Gestion des cours </a></li>
                    <li><a href="choisir_module.php" id="link_quiz" style="background-color: #cce6ff; font-size: 18px;font-family:'Playfair Display', serif;">Gestion des quizs</a></li>
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
                            <h4 class="panel-title" style="font-family:'Playfair Display', serif;font-size: 37px;">Gestion des quizs</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item active"><a class="link-text-color" href="add_table_quiz.php?id_module=<?php echo $_GET["id_module"]; ?>&id_chapitre=<?php echo $_GET["id_chapitre"];?>" style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Ajouter un nouveau   quiz</a></li>
                               <li class="list-group-item"><a class="link-text-color"  href="afficher_quiz.php?id_chapitre=<?php echo $_GET["id_chapitre"]; ?>&id_module=<?php echo $_GET["id_module"]; ?>"  style="font-size: 22px;font-family: 'Merriweather Sans', sans-serif; margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">Afficher la liste des quizs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        


                <div class="col-md-7 col-lg-7 " style="background-color:;margin-bottom: 50px;margin-top: 0px;margin-left:25px;">            
                    <h1  class="page-section-heading" style="font-family:'Playfair Display', serif; text-align: center; font-size: 30px; margin-left: 40px;">Ajouter Question à  Choix multiple </h1>
                    <div class="panel panel-default" >
                        <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="" 
                    enctype="multipart/form-data">

                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label" style="font-size: 20px;font-family:'Playfair Display', serif; text-align: left;margin-bottom: 20px;" >Veuillez saisir le texte de la question </label>
                                 
                                            <textarea class="form-control" rows="2" cols="5" placeholder="Question..." style="font-size: 15px;font-family:'Playfair Display', serif;" name="question" id="question"></textarea>
                                            <span id="message_question"></span>
                                 
                </div>


                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label" style="font-size: 20px;font-family:'Playfair Display', serif; text-align: left;margin-bottom: 20px;" >Veuillez saisir la note de la question </label>
                                      <div class="col-sm-8" style="font-family:'Playfair Display', serif;font-size: 15px;">
                                            <input type="number" max="20" min="1" class="form-control"  name="note" 
                                            id="note" >
                                            
                                            <span id="message_note"></span>
                                    </div>
                                            
                                 
                </div>

<div class="form-group">
 <label for="inputEmail3" class="col-lg-12 control-label" style="font-size: 20px;font-family:'Playfair Display', serif;text-align: left;margin-bottom: 10px;margin-top: 20px; ">Veuillez créer la première réponse à la question</label>
</div>
             <div class="form-group">
                            
                                    <div class="col-sm-8" style="font-family:'Playfair Display', serif;font-size: 15px;">
                                            <input type="text" class="form-control" name="rep1" 
                                            id="rep1" style="font-family:'Playfair Display', serif;">
                                            <span id="message_rep1"></span>
                                    </div>


                                    <div class="col-sm-4" style="font-size: 20px;font-family:'Playfair Display', serif;font-weight: bold;">
                                           <input type="radio" name="iscorrect" value="rep1" style="margin-right: 10px;">bonne réponse?
                                   
                                    </div>




                </div>




<div class="form-group">
 <label for="inputEmail3" class="col-lg-12 control-label" style="font-size: 20px;font-family:'Playfair Display', serif;text-align: left;margin-bottom: 10px;margin-top: 20px; ">Veuillez créer la deuxième réponse à la question</label>
</div>
             <div class="form-group">
                            
                                    <div class="col-sm-8" style="font-family:'Playfair Display', serif;font-size: 15px;">
                                            <input type="text" class="form-control" name="rep2" 
                                            id="rep2" style="font-family:'Playfair Display', serif;">
                                             <span id="message_rep2"></span>
                                    </div>


                                    <div class="col-sm-4" style="font-size: 20px;font-family:'Playfair Display', serif;font-weight: bold;">
                                           <input type="radio" name="iscorrect" value="rep2" style="margin-right: 10px;">bonne réponse?
                                   
                                    </div>




                </div>





<div class="form-group">
 <label for="inputEmail3" class="col-lg-12 control-label" style="font-size: 20px;font-family:'Playfair Display', serif;text-align: left;margin-bottom: 10px;margin-top: 20px; ">Veuillez créer la troisième réponse à la question</label>
</div>
             <div class="form-group">
                            
                                    <div class="col-sm-8" style="font-family:'Playfair Display', serif;font-size: 15px;">
                                            <input type="text" class="form-control"  name="rep3" 
                                            id="rep3" style="font-family:'Playfair Display', serif;">
                                            <span id="message_rep3"></span>
                                    </div>


                                    <div class="col-sm-4" style="font-size: 20px;font-family:'Playfair Display', serif;font-weight: bold;">
                                           <input type="radio" name="iscorrect" value="rep3" style="margin-right: 10px;">bonne réponse?
                                   
                                    </div>



                </div>


                                         
<span id="checkbox_msg" style="font-size: 18px;font-family:'Playfair Display', serif; font-weight: bold"></span>



                 
              










                   
                                
                <div class="form-group margin" style="margin-top: 40px; margin-bottom: 20px; ">
                    <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" name="btn_ajouter" id="btn_ajouter" 
                    class="btn btn-primary btn-lg btn3d"  style=" font-size: 20px ; background-color: DodgerBlue;border-color: DodgerBlue;font-family: goargia;" >Ajouter</button>
                         
                   

                                    </div>
                                </div>
                            </form>
                    
                   
   </div>
</div>
</div>

        




















<!-- Footer -->
   
    <footer class="footer">
        <strong>E-Learning Université Alger 1 </strong> &copy; Copyright 2018
    </footer>
   



</div>

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




$('#question').focus(function(){
   $('#message_question').hide();
});


$('#note').focus(function(){
  $('#message_note').hide();
});

$('#rep1').focus(function(){
  $('#message_rep1').hide();  
});

$('#rep2').focus(function(){
  $('#message_rep2').hide();  
});

$('#rep3').focus(function(){
  $('#message_rep3').hide();  
});

$('input[name=iscorrect]').change(function(){
if ($(this).is(':checked')) {
  $('#checkbox_msg').hide();
}

});



$('#btn_ajouter').click(function(){
valid=true;



if($('#question').val()==''){
   $('#question').css("border-color","#DA1900");
   $('#question').css("background-color","#F2DEDE");
   $('#message_question').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#message_question').show();
  valid=false;
}



if($('#note').val()==''){
   $('#note').css("border-color","#DA1900");
   $('#note').css("background-color","#F2DEDE");
   $('#message_note').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#message_note').show();
  valid=false;
}



if($('#rep1').val()==''){
   $('#rep1').css("border-color","#DA1900");
   $('#rep1').css("background-color","#F2DEDE");
   $('#message_rep1').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#message_rep1').show();
  valid=false;
}

if($('#rep2').val()==''){
   $('#rep2').css("border-color","#DA1900");
   $('#rep2').css("background-color","#F2DEDE");
   $('#message_rep2').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#message_rep2').show();
  valid=false;
}

if($('#rep3').val()==''){
   $('#rep3').css("border-color","#DA1900");
   $('#rep3').css("background-color","#F2DEDE");
   $('#message_rep3').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#message_rep3').show();
  valid=false;
}


if (!$('input[name=iscorrect]:checked').length > 0) {      
        $('#checkbox_msg').html('<span class="text-danger">Veuillez choisir la bonne réponse !</span><br>');
      valid=false;
    }




return valid && alert(" Question ajouté avec succés ! ");


});
});    











    
</script>













</body>
</html>

<?php } ?>










