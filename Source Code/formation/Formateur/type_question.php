<?php 

include("connection.php");
$id_quiz=$_GET["id_quiz"];
$id_chapitre=$_GET["id_chapitre"];
$id_module=$_GET["id_module"];

$q="select * from quiz where  id_quiz=$id_quiz and id_module=$id_module and id_chapitre=$id_chapitre";

$res=mysqli_query($link,$q)or die(mysqli_errno($link));
$row=mysqli_fetch_assoc($res)or die(mysqli_errno($link));

$type_quiz=$row["type_quiz"];

if($type_quiz=="Choix multiple"){
header("Location:ajouter_qst_choix_mlt.php?id_quiz=$id_quiz&id_module=$id_module&id_chapitre=$id_chapitre");
}


if($type_quiz=="Vrai ou Faux"){
	header("Location:ajouter_qst_true_false.php?id_quiz=$id_quiz&id_module=$id_module&id_chapitre=$id_chapitre");
}



?>