<?php 
include("connection.php");

$id_quiz=$_GET["id_quiz"];
$id_chapitre=$_GET["id_chapitre"];  
$id_module=$_GET["id_module"];
$id_formateur=$_GET["id_formateur"];

$q="delete from quiz where id_quiz=$id_quiz and id_chapitre=$id_chapitre and id_module=$id_module";

$res=mysqli_query($link,$q)or die(mysqli_error($link));

header("Location:afficher_quiz.php?id_chapitre=$id_chapitre&id_module=$id_module");



?>