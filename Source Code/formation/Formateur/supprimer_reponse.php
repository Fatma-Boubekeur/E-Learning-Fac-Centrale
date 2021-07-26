<?php 
include("connection.php");


$id_chapitre=$_GET["id_chapitre"];  
$id_module=$_GET["id_module"];
$id_question=$_GET["id_question"];
$id_quiz=$_GET["id_quiz"];
$id_reponse=$_GET["id_reponse"];


$q="delete from reponses where id_question=$id_question and id_reponses=$id_reponse";

$res=mysqli_query($link,$q)or die(mysqli_error($link));

header("Location:reponse.php?id_chapitre=$id_chapitre&id_module=$id_module&id_question=$id_question&id_quiz=$id_quiz");



?>