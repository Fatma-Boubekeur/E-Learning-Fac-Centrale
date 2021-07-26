<?php 
include("../connection.php");
if(isset($_GET["id_formateur"])){
$id_user=$_GET["id_formateur"];


$query="select * from utilisateur where id_user=$id_user";
$resultat=mysqli_query($link,$query) or die(mysqli_error($link));
$fetch=mysqli_fetch_assoc($resultat)or die(mysqli_error($link));
$formateur=$fetch["username"];

$q="delete from utilisateur where id_user=$id_user";
$res=mysqli_query($link,$q)or die(mysqli_error($link));

$link2=mysqli_connect("localhost","root","");
mysqli_select_db($link2,"forum") or die(mysqli_error($link2));

$username=$formateur;
$q2="delete from phpbb_users where username='$username'";
$res2=mysqli_query($link2,$q2)or die(mysqli_error($link2));


header("Location:afficher_listes_formateurs.php");
}

?>