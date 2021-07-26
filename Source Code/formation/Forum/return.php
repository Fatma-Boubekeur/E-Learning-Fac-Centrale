<?php 
session_start();
$profile=$_SESSION['profile'];


if($profile=="Administrateur"){
header("Location: ..\Administrateur\index.php");
}


if($profile=="Apprenant"){
header("Location: ..\Apprenant\index.php");
}


if($profile=="Formateur"){
header("Location: ..\Formateur\index.php");
}





?>