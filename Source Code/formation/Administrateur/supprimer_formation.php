<?php 
include("connection.php");
if(isset($_GET["id_formation"])){
$id_formation=$_GET["id_formation"];
$q="delete from formation where id_formation=$id_formation";
$res=mysqli_query($link,$q)or die(mysqli_error($link));
header("Location:afficher_formation.php");

}

?>