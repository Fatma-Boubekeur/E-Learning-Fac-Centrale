<?php 
include("connection.php");

$id_ressource=$_GET["id_ressource"];
$id_chapitre=$_GET["id_chapitre"];  
$id_module=$_GET["id_module"];


$q2="select * from ressource where id_ressource=$id_ressource and id_chapitre=$id_chapitre";
$res2=mysqli_query($link,$q2)or die(mysqli_error($link));
$row=mysqli_fetch_assoc($res2)or die(mysqli_error($link));
$file=$row["contenue"];
unlink( "Ressource du cours/".$file);

$q="delete from ressource where id_chapitre=$id_chapitre and id_ressource=$id_ressource";
$res=mysqli_query($link,$q)or die(mysqli_error($link));

header("Location:ressource_chapitre.php?id_chapitre=$id_chapitre&id_module=$id_module");



?>