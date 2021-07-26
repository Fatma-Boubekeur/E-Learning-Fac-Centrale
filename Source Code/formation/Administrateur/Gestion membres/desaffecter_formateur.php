<?php 
include("../connection.php");

if(isset($_GET["id_formateur"])){
$id_formateur=$_GET["id_formateur"];
$id_module=$_GET["id_module"];



$q="delete from enseigner where id_formateur=$id_formateur and id_module=$id_module";
$res=mysqli_query($link,$q)or die(mysqli_error($link));
 echo '<script>';
   echo 'alert("Formateur désaffecté avec succés ! ")';
   echo '</script>';
header("Location:afficher_listes_modules_formateur.php?id_formateur=$id_formateur");
}

?>