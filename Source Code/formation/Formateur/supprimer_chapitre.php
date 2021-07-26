<?php 
include("connection.php");

$id_chapitre=$_GET["id_chapitre"];
$id_module=$_GET["id_module"];	


$q="delete from chapitre where id_chapitre=$id_chapitre and id_module=$id_module";
$res=mysqli_query($link,$q)or die(mysqli_error($link));

header("Location:liste_chapitre_module.php?id_module=$id_module");



?>