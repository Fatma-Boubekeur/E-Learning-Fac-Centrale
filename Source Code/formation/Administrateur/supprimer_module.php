<?php 
include("connection.php");
if(isset($_GET["id_module"])){
$id_niveau=$_GET["id_niveau"];
$id_formation=$_GET["id_formation"];	
$id_module=$_GET["id_module"];
$q="delete from module where id_module=$id_module";
$res=mysqli_query($link,$q)or die(mysqli_error($link));
header("Location:module.php?id_niveau=$id_niveau&&id_formation=$id_formation");

}

?>