<?php 
include("connection.php");

$id_quiz=$_GET["id_quiz"];
$id_chapitre=$_GET["id_chapitre"];  
$id_module=$_GET["id_module"];
$id_question=$_GET["id_question"];

$q="delete from questions where id_quiz=$id_quiz and id_question=$id_question";

$res=mysqli_query($link,$q)or die(mysqli_error($link));

header("Location:question.php?id_chapitre=$id_chapitre&id_module=$id_module&id_quiz=$id_quiz");



?>