

<?php
 include ("head.php");
?>


<body>
<div class="container">
  <div class="body" class="row"></div>
    <div class="row">
    <div class="grad"></div>
    <div class="header">
      <div>E-learning <span> Université Alger 1 </span></div>
    </div></div>
    <br>
    <div class="row">
    <div class="login">
    <form method="post" action="">
        <input type="text" name="pseudo_utilisateur" id="id_pseudo_utilisateur"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom d\'utilisateur '" placeholder="Nom d'utilisateur "> 
<br>

        <input type="password" name="mot_passe_utilisateur" id="id_mot_passe_utilisateur" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" placeholder="Mot de passe" > 
<br>
         

      <button type="submit" name="btn_login" id="btn_login">Login</button>
     </form>   
    </div>
    </div>
  
</div>








<!--*********************************espace script php****************************** -->

<?php 
include("connection.php");
if(isset($_POST["btn_login"])){
if(!empty($_POST["pseudo_utilisateur"]) && !empty($_POST["mot_passe_utilisateur"])){
   $user=$_POST["pseudo_utilisateur"];
   $pass=$_POST["mot_passe_utilisateur"];
   $password_forum=$_POST["mot_passe_utilisateur"];
   
   $pass=md5($pass);
   $query="select * from utilisateur where username='".$user."' and mot_de_passe='".$pass."'";
   $resultat=mysqli_query($link,$query)or die(mysqli_error($link));
   $num_rows=mysqli_num_rows($resultat);
   if($num_rows!=0)

   {
           while($row=mysqli_fetch_assoc($resultat))
           {
             $db_username=$row['username'];
             $db_password=$row['mot_de_passe'];
             $id_user=$row['id_user'];
             $profile=$row['profile'];
             $nom=$row['nom'];
             $prenom=$row['prenom'];

           }
           if($user==$db_username && $pass==$db_password && $profile=='Administrateur'){
                 session_start();
                 $_SESSION['id_user_session']=$id_user;
                 $_SESSION['username_session']=$user;
                 $_SESSION["password_forum"]=$password_forum;
                 $_SESSION['nom_user']=$nom;
                 $_SESSION['prenom_user']=$prenom;
                 $_SESSION['profile']=$profile;
    
                 header("Location: Administrateur\index.php");
        
           }else if($user==$db_username && $pass==$db_password && $profile=='Formateur')
           {
                 session_start();
                 $_SESSION['id_user_session']=$id_user;
                 $_SESSION['username_session']=$user;
                 $_SESSION["password_forum"]=$password_forum;
                 $_SESSION['nom_user']=$nom;
                 $_SESSION['prenom_user']=$prenom;
                 $_SESSION['profile']=$profile;
                 header("Location: Formateur\index.php"); 



           }else if($user==$db_username && $pass==$db_password && $profile=='Apprenant')
            {
                 session_start();
                 $_SESSION['id_user_session']=$id_user;
                 $_SESSION['username_session']=$user;
                 $_SESSION["password_forum"]=$password_forum;
                 $_SESSION['nom_user']=$nom;
                 $_SESSION['prenom_user']=$prenom;
                 $_SESSION['profile']=$profile;
                 header("Location: Apprenant\index.php"); 
           }

         }else{
          
         echo '<script>';
         echo 'alert("Nom d\'utilisateur ou mot de passe incorrecte !")';
         echo '</script>';
         }


}
}

?>













</body>
</html>

