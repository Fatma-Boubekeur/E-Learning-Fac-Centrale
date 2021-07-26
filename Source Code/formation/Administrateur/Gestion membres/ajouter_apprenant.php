<?php 
session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
  header("Location: ../../index.php");
}else 
{

?>

<!--**************************** php registration script ********************** -->
<?php
include("../connection.php");

if(isset($_POST['btn_valider'])){  
$username=escape_dangerous_data($_POST['username']);
$password=escape_dangerous_data($_POST['password']);
$password_confirm=escape_dangerous_data($_POST['password_confirm']);
$nom=escape_dangerous_data($_POST['nom']);
$prenom=escape_dangerous_data($_POST['prenom']);
$email=escape_dangerous_data($_POST['email']);

$id_niveau=$_POST['niveau'];

      $sql="insert into utilisateur values('','$username',md5('$password'),'$nom',
         '$prenom','$email','Apprenant','Capture.PNG','')";
      $q=mysqli_query($link,$sql)or(mysqli_error($link));
  
      // select last id from table utilisateur
      $query="SELECT id_user FROM utilisateur ORDER BY id_user DESC LIMIT 1";
      $numero=mysqli_query($link,$query) or die(mysqli_error($link));
      $last_row=mysqli_fetch_array($numero);
      $last_inserted_id=$last_row['id_user'];

      // select last id from table formation
      $formation="select id_formation from formation";
      $res=mysqli_query($link,$formation)or die(mysqli_error($link));
      $row_formation=mysqli_fetch_assoc($res);
      $id_formation=$row_formation['id_formation'];
   
      $req="insert into apprenant values ('$last_inserted_id','$id_formation','$id_niveau')";
      $resultat=mysqli_query($link,$req)or die(mysqli_error($link));




      
define('IN_PHPBB', true);

$phpbb_root_path = '../../Forum/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
include($phpbb_root_path . 'phpbb/passwords/manager.' . $phpEx);


$username=$username;
$passwords=$password;
$email_forum=$email;

// username, password, email, timezone (tz) and the user’s chosen language (lang).
$user_row = array(
    'username'              => $username,
    'user_password'         => phpbb_hash($passwords),
    'user_email'            => $email_forum,
    'group_id'              => 2, // by default, the REGISTERED user group is id 2
    'user_timezone'         => (float) $data['tz'],
    'user_lang'             => $data['lang'],
    'user_type'             => USER_NORMAL,
    'user_ip'               => $user->ip,
    'user_regdate'          => time(),
);

// Register user...
$user_id = user_add($user_row);
if ($user_id === false)
{
   echo "errooooooooooooooor";
}

  header("Location:afficher_listes_apprenants.php");

} 

?>
<!-- ************************** PHP SCRIPT END  :)  ***************************-->


<?php
 include ("head.php");
?>

<link rel="stylesheet" type="text/css" href="../css/My css/3d_button.css">

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
    
    




<div class="container">
<div class="row">
    <div class="signup-form" style="margin-bottom: 100px;">
        <form action="" method="post" id="formulaire">

              <h2>Ajouter Apprenant </h2>
              <hr>
              <div class="form-group">
                  <div class="row">

                      <div class="col-xs-6">
                        <label >Nom</label>
                        <input type="text"  class="form-control" name="nom" id="nom"  maxlength="40"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom '" placeholder="Nom"><span id="nom_message"></span></div> <!--Nom Membre-->
                      

                      <div class="col-xs-6">
                      <label >Prénom</label>
                      <input type="text" class="form-control" name="prenom" id="prenom"  maxlength="40" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prénom'" placeholder="Prénom"><span id="prenom_message"></span>
                       </div>
                     

                  </div>          
              </div>

              <div class="form-group">
                   <label >Nom d'utilisateur</label>
                   <input type="text" class="form-control" name="username" id="username"  maxlength="20" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom d\'utilisateur'" placeholder=" Nom d'utilisateur">
                   <span id="available"></span>
                    <small style="font-size: 15px; color: black;">
                    Nom d'utilisateur doit avoir une longueur entre 8 caractères et 20 caractéres , inclure au moins une majuscule, une minuscule et  un chiffre , il peut contenir des underscores (_)  et pas d'espaces et pas de caractères spéciaux (./=+*...).
                    </small>
              </div>

<script type="text/javascript">
    $('#username').blur(function(){

    if($('#username').val()!=''){
      
     var char=false;
     var username = $(this).val();
     var pattern = new RegExp(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,20}$/);
     if(pattern.test($('#username').val())){
        char=true;
     }
     

     $.ajax({
      url:'../check_username.php',
      method:"POST",
      data:{user_name:username},
      success:function(data)
      {
       if(char==false){ // si username non valide 
           $('#available').html('<span class="text-danger"  style="font-size:16px;" >Nom d\'utilisateur non valide ou déja utilisé !</span><br>');
           $('#available').show();
           $('button[name=btn_valider]').attr('disabled', true);

          
       }else if((data != '0') && ( char==false)) //si username existe déja non valide
       {
        $('#available').html('<span class="text-danger"  style="font-size:16px;" >Nom d\'utilisateur non valide ou déja utilisé ! </span><br>');
        $('#available').show();
        $('button[name=btn_valider]').attr('disabled', true);


       }else if((data != '0') && ( char==true)){ // si username existe déja mais valide 
        $('#available').html('<span class="text-danger"  style="font-size:16px;" > Nom d\'utilisateur non valide ou déja utilisé ! </span><br>');
        $('#available').show();
         $('button[name=btn_valider]').attr('disabled', true);

       }else { // si username n'existe pas dja et valide 
            $('#available').html('<span class="text-success"  style="font-size:16px;" > Nom d\'utilisateur valide </span><br>');
            $('#available').show();
            $('button[name=btn_valider]').attr('disabled', false);
       }

      }

     });
  }
  });

</script>

             <div class="form-group">
                    <label >Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="password" maxlength="40"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" placeholder="Mot de passe"  >
                    <span id="mot_passe_message"></span>
                    <small style="font-size: 15px; color: black;">
                    Mot de passe doit avoir une longueur entre 8 caractères et 40 caractéres , peut être que des lettres (majuscule ou minuscule ) , que des chiffres ou alphanumérique et pas d'espaces et pas de caractères spéciaux (./=+*...).
                    </small>
              </div>  







<script type="text/javascript">
    $('#password').blur(function(){

    if($('password').val()!=''){
      
     var char=false;
     var password = $(this).val();
     var pattern = new RegExp(/^[A-Za-z0-9]+\w{7,20}$/);
     if(pattern.test($('#password').val())){
        char=true;
     }
     

     $.ajax({
      url:'../check_password.php',
      method:"POST",
      data:{password:password},
      success:function(data)
      {
       if(char==false){ // si mot de passe non valide 
           $('#mot_passe_message').html('<span class="text-danger"  style="font-size:16px;" >Mot de passe non valide ou déja utilisé !</span><br>');
           $('#mot_passe_message').show();
           $('button[name=btn_valider]').attr('disabled', true);

          
       }else if((data != '0') && ( char==false)) //si mot de passe  existe déja et non valide
       {
        $('#mot_passe_message').html('<span class="text-danger"  style="font-size:16px;" >Mot de passe non valide ou déja utilisé ! </span><br>');
        $('#mot_passe_message').show();
        $('button[name=btn_valider]').attr('disabled', true);


       }else if((data != '0') && ( char==true)){ // si mot de passe existe déja mais valide 
        $('#mot_passe_message').html('<span class="text-danger"  style="font-size:16px;" >Mot de passe non valide ou déja utilisé ! </span><br>');
        $('#mot_passe_message').show();
         $('button[name=btn_valider]').attr('disabled', true);

       }else { // si mot de passe  n'existe pas dja et valide 
            $('#mot_passe_message').html('<span class="text-success"  style="font-size:16px;"> Mot de passe valide </span><br>');
            $('#mot_passe_message').show();
            $('button[name=btn_valider]').attr('disabled', false);
       }

      }

     });
  }
  });

</script>
  

               <div class="form-group">
                    <label >Confirmer mot de passe</label>
                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" maxlength="40"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirmer Mot de passe'" placeholder="Confirmer mot de passe" >
                     <span id="confirmer_mot_passe_message"></span>
              </div>
                 

              <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" id="email"  maxlength="40" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email">
                     <span id=email_message></span>
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
      url:'../check_email.php',
      method:"POST",
      data:{email:email},
      success:function(data)
      {
       if(char==false){ // si émail non valide 
           $('#email_message').html('<span class="text-danger"  style="font-size:16px;" >Adresse émail non valide ou déja utilisé !</span><br>');
           $('#email_message').show();
           $('button[name=btn_valider]').attr('disabled', true);

          
       }else if((data != '0') && ( char==false)) //si émail existe déja non valide
       {
        $('#email_message').html('<span class="text-danger"  style="font-size:16px;" >Adresse émail non valide ou déja utilisé ! </span><br>');
        $('#email_message').show();
        $('button[name=btn_valider]').attr('disabled', true);


       }else if((data != '0') && ( char==true)){ // si username existe déja mais valide 
        $('#email_message').html('<span class="text-danger"  style="font-size:16px;" >Adresse émail non valide ou déja utilisé ! </span><br>');
        $('#email_message').show();
         $('button[name=btn_valider]').attr('disabled', true);

       }else { // si username n'existe pas dja et valide 
            $('#email_message').html('<span class="text-success"  style="font-size:16px;"> Adresse email valide !  </span><br>');
            $('#email_message').show();
            $('button[name=btn_valider]').attr('disabled', false);
       }

      }

     });
  }
  });

</script>

              <div class="form-group">
                   <label >Type de formation </label>
                   <input type="text" class="form-control" value="mathématique et informatique" readonly="readonly">
              </div>

        
              
              <div class="form-group" >
                      <label id="niveau_label">Niveau </label>
                      <select name="niveau" class="form-control" id="niveau">
                      <option value="Niveau">Niveau </option> 
                          <?php 
                          
                        $sql=mysqli_query($link,"select * from table_niveau") or die(mysqli_error($link));

                            while ($row=mysqli_fetch_array($sql)) 
                            {

                            echo '<option value="'.$row["id_niveau"].'".>'.$row["niveau_etude"].'</option>';                          
                           ?>

                           <?php } ?>                         
                        </select>
                      <span id="niveau_message"></span>
              </div>




                           
  <span id="span"></span>
                           <div class="form-group">
                <div class="row">
                    <button type="submit" name="btn_valider" id="btn_valider"   class="btn btn-primary btn-lg btn3d"  style=" font-size: 18px ;; "  >Ajouter</button>

                    
                    <button type="reset" name="reset" id="reset"                class="btn btn-primary btn-lg btn3d" style=" font-size: 18px ; " >Annuler</button>
              </div>

           <input type="text" name="profil" id="profil" value="Apprenant" style="display: none;"> 




<script type="text/javascript">

$('#reset').click(function(){

$('input[class="form-control"]').removeAttr('style');   
$('select[class="form-control"]').removeAttr('style');   


$('#available').hide();
$('#nom_message').hide();
$('#prenom_message').hide();
$('#mot_passe_message').hide();
$('#confirmer_mot_passe_message').hide();
$('#email_message').hide();

});
 
</script>
        </form>
    </div>
</div>


</div>

 
<script type="text/javascript" src="../js/My Java script Script/validation_form.js"></script> 




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











